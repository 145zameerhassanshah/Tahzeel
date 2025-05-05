<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Element;
use App\Models\Page;
use Illuminate\Http\Request;
use App\Models\ElementFeature;

class ElementController extends Controller
{
    public function index($page_id)
    {
        $elements = Element::where('page_id',$page_id)->get();
            $page = Page::findOrFail($page_id); // fetch page info

        return view('admin.element.index', compact('elements','page'));
    }

    public function add($page_id)
    {
        $page = Page::findorfail($page_id);
        return view('admin.element.add', compact('page'));
    }

public function store(Request $request)
{
    $request->validate([
        'title.en' => 'required|string|max:255',
        'title.ar' => 'required|string|max:255',
        'subtitle.en' => 'nullable|string|max:255',
        'subtitle.ar' => 'nullable|string|max:255',
        'description.en' => 'required|string',
        'description.ar' => 'required|string',
        'page_id' => 'required|integer',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        'icon' => 'nullable|image|mimes:jpeg,png,jpg,svg,webp|max:2048',
        'features.*.en' => 'nullable|string',
        'features.*.ar' => 'nullable|string',
        'features.*.description_en' => 'nullable|string',
        'features.*.description_ar' => 'nullable|string',
        'features.*.order_no' => 'nullable|integer',
    ]);
        // dd($request->all());

    // Create the element
    $element = new Element();
    $element->element_name = "test"; // You may want to make this dynamic or remove

    // Spatie translatable fields
    $element->setTranslations('title', $request->input('title'));
    $element->setTranslations('subtitle', $request->input('subtitle'));
    $element->setTranslations('description', $request->input('description'));
    $element->page_id = $request->page_id;

    // Handle Image Upload
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $imageName = time() . rand() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('assets/admin/uploads/element/thumb/'), $imageName);
        $element->image = 'assets/admin/uploads/element/thumb/' . $imageName;
    }

    // Handle Icon Upload
    if ($request->hasFile('icon')) {
        $file = $request->file('icon');
        $iconName = time() . rand() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('assets/admin/uploads/element/icons/'), $iconName);
        $element->icon = 'assets/admin/uploads/element/icons/' . $iconName;
    }

    $element->save();

    // Handle features
    if ($request->has('features')) {
        foreach ($request->input('features') as $feature) {
            $elementFeature = new ElementFeature();
            $elementFeature->element_id = $element->id;
            $elementFeature->setTranslations('title', [
                'en' => $feature['en'] ?? '',
                'ar' => $feature['ar'] ?? '',
            ]);
            $elementFeature->setTranslations('description', [
                'en' => $feature['description_en'] ?? '',
                'ar' => $feature['description_ar'] ?? '',
            ]);

            $elementFeature->order_no = $feature['order_no'] ?? 0;
            $elementFeature->save();
        }
    }
    return redirect()->back()->with('notification', [
        'message' => 'Page Element Added Successfully!',
        'alert' => 'success',
    ]);
}

public function edit($id)
{
    $element = Element::with('features')->findOrFail($id);
    $page = $element->page;
    return view('admin.element.edit', compact('element', 'page'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'title.en' => 'required|string|max:255',
        'title.ar' => 'required|string|max:255',
        'subtitle.en' => 'nullable|string|max:255',
        'subtitle.ar' => 'nullable|string|max:255',
        'description.en' => 'required|string',
        'description.ar' => 'required|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        'icon' => 'nullable|image|mimes:jpeg,png,jpg,svg,webp|max:2048',
        'features.*.id' => 'nullable|integer|exists:element_features,id',
        'features.*.en' => 'nullable|string',
        'features.*.ar' => 'nullable|string',
        'features.*.description_en' => 'nullable|string',
        'features.*.description_ar' => 'nullable|string',
        'features.*.order_no' => 'nullable|integer',
    ]);

    $element = Element::findOrFail($id);
    $element->setTranslations('title', $request->input('title'));
    $element->setTranslations('subtitle', $request->input('subtitle'));
    $element->setTranslations('description', $request->input('description'));

    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $imageName = time() . rand() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('assets/admin/uploads/element/thumb/'), $imageName);
        $element->image = 'assets/admin/uploads/element/thumb/' . $imageName;
    }

    if ($request->hasFile('icon')) {
        $file = $request->file('icon');
        $iconName = time() . rand() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('assets/admin/uploads/element/icons/'), $iconName);
        $element->icon = 'assets/admin/uploads/element/icons/' . $iconName;
    }

    $element->save();

    // Update or Add Features
    if ($request->has('features')) {
        foreach ($request->input('features') as $featureData) {
            if (isset($featureData['id'])) {
                $feature = ElementFeature::find($featureData['id']);
            } else {
                $feature = new ElementFeature();
                $feature->element_id = $element->id;
            }

            $feature->setTranslations('title', [
                'en' => $featureData['en'] ?? '',
                'ar' => $featureData['ar'] ?? '',
            ]);

            $feature->setTranslations('description', [
                'en' => $featureData['description_en'] ?? '',
                'ar' => $featureData['description_ar'] ?? '',
            ]);

            $feature->order_no = $featureData['order_no'] ?? 0;
            $feature->save();
        }
    }

    return redirect()->route('admin.element.index', $element->id)
    ->with('notification', [
        'message' => 'Page Element Updated Successfully!',
        'alert' => 'success',
    ]);
}

public function delete($id)
{
    $element = Element::findOrFail($id);

    // Delete related features
    $element->features()->delete();

    // Delete element images if needed
    if ($element->image && file_exists(public_path($element->image))) {
        unlink(public_path($element->image));
    }

    if ($element->icon && file_exists(public_path($element->icon))) {
        unlink(public_path($element->icon));
    }

    // Delete element
    $element->delete();

    return redirect()->back()->with('notification', [
        'message' => 'Page Element Deleted Successfully!',
        'alert' => 'success',
    ]);
}



}
