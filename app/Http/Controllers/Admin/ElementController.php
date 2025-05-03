<?php

namespace App\Http\Controllers\Admin;

use App\Models\Element;
use App\Models\ElementFeature;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ElementController extends Controller
{
    public function index()
    {
        // Get all elements
        $elements = Element::with('features')->get();

        return view('admin.element.index', compact('elements'));
    }

    public function create()
    {
        return view('admin.element.create');
    }

    public function store(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'name.en' => 'required|string',
            'name.ar' => 'required|string',
            'description.en' => 'nullable|string',
            'description.ar' => 'nullable|string',
            'image' => 'nullable|image',
            'features.*.en' => 'nullable|string',
            'features.*.ar' => 'nullable|string',
        ]);

        // Create the element
        $element = Element::create([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'status' => true,  // Assuming active by default
        ]);

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('elements', 'public');
            $element->image = $imagePath;
            $element->save();
        }

        // Store element features
        foreach ($request->features as $feature) {
            ElementFeature::create([
                'element_id' => $element->id,
                'feature_name' => $feature,
            ]);
        }

        return redirect()->route('admin.element.index')->with('success', 'Element created successfully');
    }
    public function update(Request $request, Element $element)
{
    // Validate the form data
    $validated = $request->validate([
        'name.en' => 'required|string',
        'name.ar' => 'required|string',
        'description.en' => 'nullable|string',
        'description.ar' => 'nullable|string',
        'image' => 'nullable|image',
        'features.*.en' => 'nullable|string',
        'features.*.ar' => 'nullable|string',
    ]);

    // Update the element
    $element->update([
        'name' => $validated['name'],
        'description' => $validated['description'],
    ]);

    // Handle image upload if provided
    if ($request->hasFile('image')) {
        if ($element->image) {
            Storage::delete('public/' . $element->image);
        }
        $imagePath = $request->file('image')->store('elements', 'public');
        $element->image = $imagePath;
    }

    // Update element features
    $element->features()->delete(); // Delete existing features
    foreach ($request->features as $feature) {
        ElementFeature::create([
            'element_id' => $element->id,
            'feature_name' => $feature,
        ]);
    }

    return redirect()->route('admin.elements.index')->with('success', 'Element updated successfully');
}
public function destroy(Element $element)
{
    // Delete associated features
    $element->features()->delete();

    // Delete the image file if it exists
    if ($element->image) {
        Storage::delete('public/' . $element->image);
    }

    // Delete the element itself
    $element->delete();

    return redirect()->route('admin.element.index')->with('success', 'Element deleted successfully');
}

}
