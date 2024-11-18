<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    // List all testimonials
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('admin.testimonial.index', compact('testimonials'));
    }

    // Show the form for creating a new testimonial
    public function create()
    {
        $pages = DB::table("pages")->get();

        return view('admin.testimonial.add', compact("pages"));
    }

    // Store a newly created testimonial
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string',
            'testimonial.en' => 'required|string',
            'testimonial.ar' => 'required|string',
            'designation.en' => 'required|string',
            'designation.ar' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $testimonial = new Testimonial();

        $testimonial->name = $request->name;
        $testimonial->page_id = $request->page_id;
        $testimonial->setTranslations('testimonial', $request->testimonial);
        $testimonial->setTranslations('designation', $request->designation);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('admin/testimonials', 'public');
            $testimonial->img = $path;
        }
        $testimonial->save();
        $notification = array(
            'message' => 'FAQ added successfully',
            'alert' => 'success',
        );
        return redirect()->route('testimonials.index')->with('notification', $notification);
    }


    // Show the form for editing an existing testimonial
    public function edit($id)
    {
        $pages = DB::table("pages")->get();
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.testimonial.edit', compact('testimonial', 'pages'));
    }

    // Update the specified testimonial
    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'name' => 'required|string',
        //     'testimonial.en' => 'required|string',
        //     'testimonial.ar' => 'required|string',
        //     'designation' => 'required|string',
        //     'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        // ]);
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->name = $request->name;
        $testimonial->page_id = $request->page_id;
        $testimonial->setTranslations('testimonial', $request->testimonial);
        $testimonial->setTranslations('designation', $request->designation);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('admin/testimonials', 'public');
            $testimonial->img = $path;
        }

        $testimonial->save();
        $notification = array(
            'message' => 'Testimonial Updated successfully',
            'alert' => 'success',
        );
        return redirect()->route('testimonials.index')->with('notification', $notification);
    }

    // Delete the specified testimonial
    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        if ($testimonial->img) {
            \Storage::disk('public')->delete($testimonial->img);
        }
        $testimonial->delete();
        $notification = array(
            'message' => 'FAQ Deleted successfully',
            'alert' => 'success',
        );
        return redirect()->route('testimonials.index')->with('notification', $notification);
    }
}
