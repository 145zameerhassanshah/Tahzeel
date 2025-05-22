<?php

namespace App\Http\Controllers\Admin;
use App\Models\Package;
use Illuminate\Http\Request;
use App\Models\PackageDetail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PackageController extends Controller
{
public function index()
{
    $packages = Package::with(['details' => function ($q) {
        $q->orderBy('order_no');
    }])->get();

    return view('admin.packages.index', compact('packages'));
}

public function add()
{
    $package = Package::with('details');
    return view('admin.packages.add', compact('package'));
}

public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'subtitle' => 'nullable|string|max:255',
        'amount' => 'required|numeric|min:0',
        'discount_percentage' => 'nullable|numeric|min:0|max:100',
        'discounted_amount' => 'nullable|numeric|min:0|lte:amount',
        'status' => 'required|in:active,inactive',
        'publish' => 'required|in:draft,published',
        'icon' => 'nullable|image|mimes:jpg,jpeg,png,svg|max:2048',
        'details' => 'nullable|array',
        'details.*.title' => 'required_with:details|string|max:255',
        'details.*.status' => 'required_with:details|in:included,excluded',
        'details.*.order_no' => 'nullable|integer|min:0',
    ]);

    $data = $request->only([
        'title', 'subtitle', 'amount', 'discount_percentage', 'discounted_amount', 'status', 'publish'
    ]);

    if ($request->hasFile('icon')) {
        $data['icon'] = $request->file('icon')->store('package_icons', 'public');
    }

    $package = Package::create($data);

    if ($request->has('details')) {
        foreach ($request->details as $detail) {
            $package->details()->create([
                'title' => $detail['title'],
                'status' => $detail['status'],
                'order_no' => $detail['order_no'] ?? 0,
            ]);
        }
    }

    return redirect()->route('admin.package.index', $package->id)->with('success', 'Package created successfully.');
}

public function edit($id)
{
    $package = Package::with(['details' => function ($query) {
        $query->orderBy('order_no');
    }])->findOrFail($id);

    $details = $package->details;

    return view('admin.packages.edit', compact('package', 'details'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'subtitle' => 'nullable|string|max:255',
        'amount' => 'required|numeric|min:0',
        'discount_percentage' => 'nullable|numeric|min:0|max:100',
        'discounted_amount' => 'nullable|numeric|min:0|lte:amount',
        'status' => 'required|in:active,inactive',
        'publish' => 'required|in:draft,published',
        'icon' => 'nullable|image|mimes:jpg,jpeg,png,svg|max:2048',
        'details' => 'nullable|array',
        'details.*.title' => 'required_with:details|string|max:255',
        'details.*.status' => 'required_with:details|in:included,excluded',
        'details.*.order_no' => 'nullable|integer|min:0',
    ]);

    $package = Package::findOrFail($id);

    // Collect basic package data
    $data = $request->only([
        'title', 'subtitle', 'amount', 'discount_percentage', 'discounted_amount', 'status', 'publish'
    ]);

    // Handle icon upload
    if ($request->hasFile('icon')) {
        if ($package->icon && Storage::disk('public')->exists($package->icon)) {
            Storage::disk('public')->delete($package->icon);
        }

        $data['icon'] = $request->file('icon')->store('package_icons', 'public');
    }

    // Update package
    $package->update($data);

    // Delete and reinsert package_details (you can optimize to update instead if needed)
    $package->details()->delete();

    if ($request->has('details')) {
        foreach ($request->details as $detail) {
            $package->details()->create([
                'title' => $detail['title'],
                'status' => $detail['status'],
                'order_no' => $detail['order_no'] ?? 0,
            ]);
        }
    }

    return redirect()->route('admin.package.index', $package->id)->with('success', 'Package updated successfully.');
}

public function delete($id)
{
    $package = Package::findOrFail($id);

    // Soft delete the package and cascade soft delete the details
    $package->delete();

    return redirect()->route('admin.package.index', $package->id)->with('success', 'Package deleted successfully.');
}

}
