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

    // public function index()
    // {
    //     $groups = Group::where('type', 'testimonials')->get();
    //     return view('admin.testimonial.index', compact('groups'));
    // }








    public function create(Request $request)
    {
        $group = Group::find($request->id);
        return view('admin.testimonial.add', compact("group"));
    }


    public function index()
    {
        $testimonials = Testimonial::orderBy('order_no')->get();
        
        return response()->json([
            'data' => $testimonials
        ]);
    }




    public function store(Request $request)
    {
        // Validate request data
        $request->validate([
            'name.en' => 'required|string',
            'name.ar' => 'required|string',
            'feedback.en' => 'required|string',
            'feedback.ar' => 'required|string',
            'designation.en' => 'required|string',
            'designation.ar' => 'required|string',
            'order_no' => 'nullable|integer|min:0',
            'status' => 'required|in:active,inactive',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Create new Testimonial
        $testimonial = new Testimonial();
        $testimonial->page_id = $request->page_id;
        
        // Store multilingual fields correctly
        $testimonial->name = json_encode([
            'en' => $request->input('name.en'),
            'ar' => $request->input('name.ar')
        ], JSON_UNESCAPED_UNICODE);
    
        $testimonial->feedback = json_encode([
            'en' => $request->input('feedback.en'),
            'ar' => $request->input('feedback.ar')
        ], JSON_UNESCAPED_UNICODE);
    
        $testimonial->designation = json_encode([
            'en' => $request->input('designation.en'),
            'ar' => $request->input('designation.ar')
        ], JSON_UNESCAPED_UNICODE);
    
        // Handle Image Upload
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->file('image')->extension();
            $request->file('image')->move(public_path('assets/admin/uploads/testimonial/'), $imageName);
            $testimonial->image = $imageName;
        }
    
        $testimonial->order_no = $request->order_no ?? 0;
        $testimonial->status = $request->status;
        $testimonial->save();
    
        // Return JSON response
        return response()->json([
            'success' => true,
            'testimonial' => $testimonial
        ]);
    }
    
    
    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        
        // Decode JSON fields and return as objects
        return response()->json([
            'data' => $testimonial,
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
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

        return response()->json([
            'data' => $testimonial,
        ]);
        // $notification = array(
        //     'message' => 'Testimonial Updated successfully',
        //     'alert' => 'success',
        // );
        // return redirect()->route('admin.testimonial.list', $testimonial->group_id)->with('notification', $notification);
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
