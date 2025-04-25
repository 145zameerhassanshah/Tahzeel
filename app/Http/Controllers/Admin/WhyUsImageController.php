<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\WhyUsImage;
use Illuminate\Http\Request;

class WhyUsImageController extends Controller
{
    public function list($id)
    {
        $whyUs = WhyUsImage::where('group_id', $id)->get();
        return view('admin.why-us-image.list', compact('whyUs', 'id'));
    }

    public function index(Request $request)
    {
        $whyUs = WhyUsImage::all();
        return response()->json([
            'data' => $whyUs,
        ]);
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

    public function add($id)
    {
        $group = Group::find($id);
        return view('admin.why-us-image.add', compact('group'));
    }

    // Store Feature
    public function store(Request $request)
    {
        $request->validate([
            'page_id' => 'required',
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
        $why_us_image = new WhyUsImage();
        $why_us_image->page_id = $request->page_id;
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
        return response()->json([
            'success' => true,
        ]);
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
        return response()->json([
            'success' => true,
            'message' => 'Image deleted successfully.'
        ]);
    }


    // Feature Edit
    public function edit($id)
    {
        $whyUs = WhyUsImage::find($id);
        return response()->json([
            'title' => [
                'en' => $whyUs->getTranslation('title', 'en'),
                'ar' => $whyUs->getTranslation('title', 'ar'),
            ],
            'subtitle' => [
                'en' => $whyUs->getTranslation('subtitle', 'en'),
                'ar' => $whyUs->getTranslation('subtitle', 'ar'),
            ],
            'description' => [
                'en' => $whyUs->getTranslation('description', 'en'),
                'ar' => $whyUs->getTranslation('description', 'ar'),
            ],
            // 'title' => json_decode($whyUs->title, true),
            'image' => $whyUs->image,
            'order_no' => $whyUs->order_no,
            'status' => $whyUs->status,
        ]);
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
        return response()->json([
            'data' => $why_us_image,
        ]);
    }
}