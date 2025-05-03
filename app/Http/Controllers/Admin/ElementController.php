<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Element;
use App\Models\Page;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\GD\Driver;
use Illuminate\Support\Str;

class ElementController extends Controller
{
    public function index($page_id)
    {
        $elements = Element::where('page_id',$page_id)->get();
        return view('admin.element.index', compact('elements'));
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
    ]);

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

    return redirect()->back()->with('notification', [
        'message' => 'Page Element Added Successfully!',
        'alert' => 'success',
    ]);
}



}
