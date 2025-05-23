<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\{Group, Page};
use App\Models\WhyUsImage;
use Illuminate\Http\Request;

class WhyUsImageController extends Controller
{
    public function list($id)
    {
        $whyUs = WhyUsImage::where('group_id', $id)->get();
        return view('admin.why-us-image.list', compact('whyUs', 'id'));
    }

    public function index($slug)
    {
        $page = Page::where('slug', $slug)->first();
        $why_us_images = WhyUsImage::where('page_id', $page->id)->get();
        return view('admin.page.partials.why_us_images_list', compact('why_us_images', 'slug'));
    }

    public function getByPageId($pageId)
    {
        if (!is_numeric($pageId)) {
            return response()->json(['error' => 'Invalid page ID'], 400);
        }
        $whyUsImage = WhyUsImage::where('page_id', $pageId)->orderBy('id', 'DESC')->get();
        return response()->json([
            'data' => $whyUsImage
        ]);
    }

    public function add($slug)
    {
        return view('admin.page.partials.why_us_images_add', compact('slug'));
    }

    // Store Feature
    public function store(Request $request, $slug)
    {
        $request->validate([
            'title.en' => 'required',
            'title.ar' => 'required',
            'subtitle.en' => 'required',
            'subtitle.ar' => 'required',
            'description.en' => 'required',
            'description.ar' => 'required',
            'image' => 'required',
            'order_no' => 'required',
            'status' => 'required',
        ]);
        $page = Page::where('slug', $slug)->first();
        $why_us_image = new WhyUsImage();
        $why_us_image->page_id = $page->id;
        $why_us_image->setTranslations('title', [
            'en' => $request->title['en'],
            'ar' => $request->title['ar'],
        ]);
        $why_us_image->setTranslations('subtitle', [
            'en' => $request->subtitle['en'],
            'ar' => $request->subtitle['ar'],
        ]);
        $why_us_image->setTranslations('description', [
            'en' => $request->description['en'],
            'ar' => $request->description['ar'],
        ]);
        // $why_us_image->title = json_encode($request->title);
        // $why_us_image->subtitle = json_encode($request->subtitle);
        // $why_us_image->description = json_encode($request->description);
        $why_us_image->order_no = $request->order_no;
        $why_us_image->status = $request->status;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $image = time() . rand() . '.' . $extension;
            $file->move('assets/admin/uploads/why_us_image/', $image);
            $why_us_image->image = $image;
        }
        $why_us_image->save();
        
        $notification = [
            'alert' => 'success', 
            'message' => 'WhyUsImage added Successfully!'
        ];
        return redirect()->route('admin.why-us-image.index', ['slug' => $slug])->with('notification', $notification);
    }

    // public function delete($id)
    // {
    //     $why_us_image = WhyUsImage::find($id);
    //     @unlink('assets/admin/uplaods/why_us_image/' . $why_us_image->image);
    //     $why_us_image->delete();
    //     return response()->json([
    //         'success' => true,
    //     ]);
    // }

    public function delete($id)
    {
        $why_us_image = WhyUsImage::find($id);
        if (!$why_us_image) {
            return response()->json([
                'success' => false,
                'message' => 'Image not found.'
            ], 404);
        }
        $imagePath = public_path('assets/admin/uploads/why_us_image/' . $why_us_image->image);
        if (file_exists($imagePath)) {
            @unlink($imagePath);
        }
        $why_us_image->delete();
        
        $notification = [
            'alert' => 'success', 
            'message' => 'WhyUsImage added Successfully!'
        ];
        return redirect()->back()->with('notification', $notification);
    }


    // Feature Edit
    public function edit($id)
    {
        $whyUs = WhyUsImage::find($id);
        $slug = $whyUs->page->slug;
        return view('admin.page.partials.why_us_images_edit', compact('whyUs', 'slug'));
    }

    // Update Feature
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'nullable',
            'description' => 'required',
            'order_no' => 'required',
            'status' => 'required',
        ]);
        $why_us_image = WhyUsImage::find($id);
        $why_us_image->setTranslations('title', [
            'en' => $request->title['en'],
            'ar' => $request->title['ar'],
        ]);
        $why_us_image->setTranslations('subtitle', [
            'en' => $request->subtitle['en'],
            'ar' => $request->subtitle['ar'],
        ]);
        $why_us_image->setTranslations('description', [
            'en' => $request->description['en'],
            'ar' => $request->description['ar'],
        ]);
        // $why_us_image->title = json_encode($request->title);
        // $why_us_image->subtitle = json_encode($request->subtitle);
        // $why_us_image->description = json_encode($request->description);
        $why_us_image->order_no = $request->order_no;
        $why_us_image->status = $request->status;
        if ($request->hasFile('image')) {
            @unlink('assets/admin/uplaods/why_us_image/' . $why_us_image->image);
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $image = time() . rand() . '.' . $extension;
            $file->move('assets/admin/uploads/why_us_image/', $image);
            $why_us_image->image = $image;
        }
        $why_us_image->save();
        
        
        $notification = [
            'alert' => 'success', 
            'message' => 'WhyUsImage updated Successfully!'
        ];
        return redirect()->route('admin.why-us-image.index', ['slug' => $why_us_image->page->slug])->with('notification', $notification);
    }
}