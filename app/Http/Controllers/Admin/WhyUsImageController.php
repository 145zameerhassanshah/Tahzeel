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
        $groups = Group::where('type', 'why_us_img')->get();
        return view('admin.why-us-image.index', compact('groups'));
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
            'group_id' => 'required|exists:groups,id',
            'title' => 'required',
            'image' => 'required',
            'description' => 'required',
            'order_no' => 'required',
            'status' => 'required',
        ]);

        $why_us_image = new WhyUsImage();

        $why_us_image->group_id = $request->group_id;

        $why_us_image->title = json_encode([
            'en' => $request->title,
            'ar' => $request->title
        ]);

        $why_us_image->description = json_encode([
            'en' => $request->description,
            'ar' => $request->description
        ]);

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


        $notification = array(
            'message' => 'WhyUsImage Added successfully!',
            'alert' => 'success'
        );
        return redirect()->route('admin.why-us-image.list', ['id' => $why_us_image->group_id])->with('notification', $notification);
    }

    public function delete($id)
    {

        $why_us_image = WhyUsImage::find($id);
        @unlink('assets/admin/uplaods/why_us_image/'. $why_us_image->image);
        $why_us_image->delete();

        $notification = array(
            'message' => 'WhyUsImage Deleted successfully!',
            'alert' => 'success'    
        );
        return redirect()->back()->with('notification', $notification);
    }

    // Feature Edit
    public function edit($id)
    {

        $whyUs = WhyUsImage::find($id);
        return view('admin.why-us-image.edit', compact('whyUs'));
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

        $why_us_image->title = json_encode([
            'en' => $request->title,
            'ar' => $request->title
        ]);

        $why_us_image->description = json_encode([
            'en' => $request->description,
            'ar' => $request->description
        ]);

        $why_us_image->order_no = $request->order_no;
        $why_us_image->status = $request->status;

        if ($request->hasFile('image')) {
            @unlink('assets/admin/uplaods/why_us_image/'. $why_us_image->image);
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $image = time() . rand() . '.' . $extension;
            $file->move('assets/admin/uploads/why_us_image/', $image);
            $why_us_image->image = $image;
        }

        $why_us_image->save();


        $notification = array(
            'message' => 'WhyUsImage Updated successfully!',
            'alert' => 'success'
        );
        return redirect()->route('admin.why-us-image.list', ['id' => $why_us_image->group_id])->with('notification', $notification);
    }
}
