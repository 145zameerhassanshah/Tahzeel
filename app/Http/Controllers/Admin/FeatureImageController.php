<?php

namespace App\Http\Controllers\Admin;

use App\Models\Page;
use App\Models\Group;
use App\Models\FeatureImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FeatureImageController extends Controller
{
    public function index($slug)
    {
        $page = Page::where('slug', $slug)->first();
        $feature_image = FeatureImage::where('page_id', $page->id)->get();
        return view('admin.page.partials.feature_image_list', compact('feature_image', 'slug'));
    }
    public function list($id)
    {
        $feature_images = FeatureImage::where('group_id', $id)->get();
        return view('admin.page.partials.feature_image_list', compact('feature_image', 'id'));
    }


    public function getByPaeId($pageId)
    {
        $feature_images = FeatureImage::where('page_id', $pageId)->get();
        return response()->json([
            'data' => $feature_images
        ]);
    }

    public function getByPageId($pageId)
    {
        if (!is_numeric($pageId)) {
            return response()->json(['error' => 'Invalid page ID'], 400);
        }
        $featureImage = FeatureImage::where('page_id', $pageId)->orderBy('id', 'DESC')->get();
        return response()->json([
            'data' => $featureImage
        ]);
    }

    public function add($slug)
    {
        return view('admin.page.partials.feature_image_add', compact('slug'));
    }

    // Store Feature
    public function store(Request $request, $slug)
    {
        $request->validate([
            'title.en' => 'required|max:250',
            'title.ar' => 'required|max:250',
            'subtitle.en' => 'nullable|max:250',
            'subtitle.ar' => 'nullable|max:250',
            'description.en' => 'required',
            'description.ar' => 'required',
            'image' => 'required',
            'order_no' => 'required|max:250',
            'status' => 'required',
        ]);

        $feature_image = new FeatureImage();
        $page = Page::where('slug', $slug)->first();

        $feature_image->page_id = $page->id;
        $feature_image->setTranslations('title', [
            'en' => $request->title['en'],
            'ar' => $request->title['ar'],
        ]);
        $feature_image->setTranslations('subtitle', [
            'en' => $request->subtitle['en'],
            'ar' => $request->subtitle['ar'],
        ]);
        $feature_image->setTranslations('description', [
            'en' => $request->description['en'],
            'ar' => $request->description['ar'],
        ]);
        $feature_image->order_no = $request->order_no;
        $feature_image->status = $request->status;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $image = time() . rand() . '.' . $extension;
            $file->move('assets/admin/uploads/feature_image/', $image);
            $feature_image->image = $image;
        }
        $feature_image->save();
        $notification = [
            'alert' => 'success',
            'message' => 'Feature Image added Successfully!'
        ];
        return redirect()->route('admin.feature_image.index', ['slug' => $slug])->with('notification', $notification);
    }

    // Feature Delete
    public function delete($id)
    {
        $feature_image = FeatureImage::find($id);
        @unlink('assets/admin/uploads/feature_image/' . $feature_image->image);
        $feature_image->delete();
        $notification = [
            'alert' => 'success',
            'message' => 'Feature Image deleted Successfully!'
        ];
        return redirect()->back()->with('notification', $notification);
    }

    // Feature Edit
    public function edit($id)
    {
        $feature_image = FeatureImage::findOrFail($id);
        $slug = $feature_image->page->slug;
        return view('admin.page.partials.feature_image_edit', compact('feature_image', 'slug'));
    }

    // Update Feature
    public function update(Request $request, $id)
    {
        $request->validate([
            'title.en' => 'required|max:250',
            'title.ar' => 'required|max:250',
            'subtitle.en' => 'nullable|max:250',
            'subtitle.ar' => 'nullable|max:250',
            'description.en' => 'required',
            'description.ar' => 'required',
            'image' => 'nullable',
            'order_no' => 'required|max:250',
            'status' => 'required',
        ]);
        $feature_image = FeatureImage::find($id);
        $feature_image->setTranslations('title', [
            'en' => $request->title['en'],
            'ar' => $request->title['ar'],
        ]);
        $feature_image->setTranslations('subtitle', [
            'en' => $request->subtitle['en'],
            'ar' => $request->subtitle['ar'],
        ]);
        $feature_image->setTranslations('description', [
            'en' => $request->description['en'],
            'ar' => $request->description['ar'],
        ]);
        $feature_image->order_no = $request->order_no;
        $feature_image->status = $request->status;
        if ($request->hasFile('image')) {
            @unlink('assets/admin/uploads/feature_image/' . $feature_image->image);
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $image = time() . rand() . '.' . $extension;
            $file->move('assets/admin/uploads/feature_image/', $image);
            $feature_image->image = $image;
        }
        $feature_image->save();
        $notification = [
            'alert' => 'success',
            'message' => 'Feature Image Updated Successfully!'
        ];
        return redirect()->route('admin.feature_image.index', ['slug' => $feature_image->page->slug])->with('notification', $notification);
    }
}
