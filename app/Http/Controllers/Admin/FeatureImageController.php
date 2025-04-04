<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FeatureImage;
use App\Models\Group;
use Illuminate\Http\Request;

class FeatureImageController extends Controller
{
    public function list($id)
    {
        $feature_images = FeatureImage::where('group_id', $id)->get();
        return view('admin.feature-image.list', compact('feature_images', 'id'));
    }

    public function index(Request $request)
    {
        $feature_images = FeatureImage::all();
        return response()->json([
            'data' => $feature_images,
        ]);
    }

    public function add($id)
    {
        $group = Group::find($id);
        return view('admin.feature-image.add', compact('group'));
    }

    // Store Feature
    public function store(Request $request)
    {
        $request->validate([
            'page_id' => 'required',
            'title' => 'required|max:250',
            'image' => 'required',
            'subtitle' => 'required|max:250',
            'description' => 'required',
            'order_no' => 'required|max:250',
            'status' => 'required',
        ]);

        $feature_image = new FeatureImage();

        $feature_image->page_id = $request->page_id;

        $feature_image->title = json_encode($request->title);
        $feature_image->subtitle = json_encode($request->subtitle);
        $feature_image->description = json_encode($request->description);

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


        return response()->json([
            'success' => true,
        ]);
    }

    // Feature Delete
    public function delete($id)
    {

        $feature_image = FeatureImage::find($id);
        @unlink('assets/admin/uploads/feature_image/'. $feature_image->image);
        $feature_image->delete();

        return response()->json([
            'success'=> true,
        ]);
    }

    // Feature Edit
    public function edit($id)
    {
        $feature_image = FeatureImage::find($id);
        return response()->json([
            'title' => json_decode($feature_image->title, true),
            'subtitle' => json_decode($feature_image->subtitle, true),
            'description' => json_decode($feature_image->description, true),
            'image' => $feature_image->image,
            'order_no' => $feature_image->order_no,
            'status' => $feature_image->status,
        ]);
    }

    // Update Feature
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:250',
            'image' => 'nullable',
            'subtitle' => 'required|max:250',
            'description' => 'required',
            'order_no' => 'required|max:250',
            'status' => 'required',
        ]);

        $feature_image = FeatureImage::find($id);

        $feature_image->title = json_encode($request->title);
        $feature_image->subtitle = json_encode($request->subtitle);
        $feature_image->description = json_encode($request->description);

        $feature_image->order_no = $request->order_no;
        $feature_image->status = $request->status;

        if ($request->hasFile('image')) {
            @unlink('assets/admin/uploads/feature_image/'. $feature_image->image);
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $image = time() . rand() . '.' . $extension;
            $file->move('assets/admin/uploads/feature_image/', $image);
            $feature_image->image = $image;
        }

        $feature_image->save();

        return response()->json([
            'data' => $feature_image
        ]);
    }
}
