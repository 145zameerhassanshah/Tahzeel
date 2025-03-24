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
        $groups = Group::where('type', 'feature_img')->get();
        return view('admin.feature-image.index', compact('groups'));
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
            'group_id' => 'required|exists:groups,id',
            'title' => 'required|max:250',
            'image' => 'required',
            'subtitle' => 'required|max:250',
            'description' => 'required',
            'order_no' => 'required|max:250',
            'status' => 'required',
        ]);

        $feature_image = new FeatureImage();

        $feature_image->group_id = $request->group_id;

        $feature_image->title = json_encode([
            'en' => $request->title,
            'ar' => $request->title
        ]);

        $feature_image->subtitle = json_encode([
            'en' => $request->subtitle,
            'ar' => $request->subtitle
        ]);

        $feature_image->description = json_encode([
            'en' => $request->description,
            'ar' => $request->description
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


        $notification = array(
            'message' => 'Feature Image Added successfully!',
            'alert' => 'success'
        );
        return redirect()->route('admin.feature-image.list', ['id' => $feature_image->group_id])->with('notification', $notification);
    }

    // Feature Delete
    public function delete($id)
    {

        $feature_image = FeatureImage::find($id);
        @unlink('assets/admin/uploads/feature_image/'. $feature_image->image);
        $feature_image->delete();

        $notification = array(
            'message' => 'Feature Image Deleted successfully!',
            'alert' => 'success'    
        );
        return redirect()->back()->with('notification', $notification);
    }

    // Feature Edit
    public function edit($id)
    {

        $feature_image = FeatureImage::find($id);
        return view('admin.feature-image.edit', compact('feature_image'));
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

        $feature_image->title = json_encode([
            'en' => $request->title,
            'ar' => $request->title
        ]);

        $feature_image->subtitle = json_encode([
            'en' => $request->subtitle,
            'ar' => $request->subtitle
        ]);

        $feature_image->description = json_encode([
            'en' => $request->description,
            'ar' => $request->description
        ]);

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


        $notification = array(
            'message' => 'Feature Image Updated successfully!',
            'alert' => 'success'
        );
        return redirect()->route('admin.feature-image.list', ['id' => $feature_image->group_id])->with('notification', $notification);
    }
}
