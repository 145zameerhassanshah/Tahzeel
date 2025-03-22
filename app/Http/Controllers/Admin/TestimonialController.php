<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Group;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{

    public function list($id)
    {
        $testimonials = Testimonial::where('group_id', $id)->get();
        $group = Group::find($id);
        return view('admin.testimonial.list', compact('testimonials', 'id', 'group'));
    }

    public function index()
    {
        $groups = Group::where('type', 'testimonials')->get();
        return view('admin.testimonial.index', compact('groups'));
    }

    public function create(Request $request)
    {
        $group = Group::find($request->id);
        return view('admin.testimonial.add', compact("group"));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'group_id' => 'required|exists:groups,id',
            'feedback.en' => 'required|string',
            'feedback.ar' => 'required|string',
            'designation.en' => 'required|string',
            'designation.ar' => 'required|string',
            'status' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $testimonial = new Testimonial();

        $testimonial->group_id = $request->group_id;

        $testimonial->name = json_encode([
            'en' => $request->name,
            'ar' => $request->name
        ]);

        $testimonial->feedback = json_encode([
            'en' => $request->feedback['en'],
            'ar' => $request->feedback['ar']
        ]);

        $testimonial->designation = json_encode([
            'en' => $request->designation['en'],
            'ar' => $request->designation['ar']
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $image = time() . rand() . '.' . $extension;
            $file->move('assets/admin/uploads/testimonial/', $image);
            $testimonial->image = $image;
        }

        $testimonial->order_no = $request->order_no;
        $testimonial->status = $request->status;

        $testimonial->save();

        $notification = array(
            'message' => 'Testimonial added successfully',
            'alert' => 'success',
        );
        return redirect()->route('admin.testimonial.list', $testimonial->group_id)->with('notification', $notification);
    }


    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.testimonial.edit', compact('testimonial'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'feedback.en' => 'required|string',
            'feedback.ar' => 'required|string',
            'designation.en' => 'required|string',
            'designation.ar' => 'required|string',
            'status' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $testimonial = Testimonial::find($id);

        $testimonial->name = json_encode([
            'en' => $request->name,
            'ar' => $request->name
        ]);

        $testimonial->feedback = json_encode([
            'en' => $request->feedback['en'],
            'ar' => $request->feedback['ar']
        ]);

        $testimonial->designation = json_encode([
            'en' => $request->designation['en'],
            'ar' => $request->designation['ar']
        ]);

        if ($request->hasFile('image')) {

            @unlink('assets/admin/uploads/testimonial/'. $testimonial->image);
        
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $image = time() . rand() . '.' . $extension;
            $file->move('assets/admin/uploads/testimonial/', $image);
            $testimonial->image = $image;
        }

        $testimonial->order_no = $request->order_no;
        $testimonial->status = $request->status;

        $testimonial->save();

        $notification = array(
            'message' => 'Testimonial Updated successfully',
            'alert' => 'success',
        );
        return redirect()->route('admin.testimonial.list', $testimonial->group_id)->with('notification', $notification);
    }

    // Delete the specified testimonial
    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);

        @unlink('assets/admin/uploads/testimonial/'. $testimonial->image);

        $testimonial->delete();
        $notification = array(
            'message' => 'Testimonial Deleted successfully',
            'alert' => 'success',
        );
        return redirect()->back()->with('notification', $notification);
    }
}
