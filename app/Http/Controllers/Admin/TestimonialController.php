<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use Illuminate\Support\Facades\DB;

class TestimonialController extends Controller
{
    // List all testimonials
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('admin.testimonials.index', compact('testimonials'));
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
        // Validate the form input
        $request->validate([
            'name' => 'required|string',
            'testimonial.en' => 'required|string',  // Validation for English testimonial
            'testimonial.ar' => 'required|string',  // Validation for Arabic testimonial
            'designation' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',  // Image must be a valid file type and size
        ]);

        // Create a new Testimonial instance
        $testimonial = new Testimonial();
        $testimonial->name = $request->input('name');
        $testimonial->designation = $request->input('designation');

        // Store the multilingual testimonial content
        $testimonial->setTranslations('testimonial', $request->input('testimonial'));

        // Handle image upload if present
        if ($request->hasFile('image')) {
            // Save the image in the 'public/admin/testimonials' folder and store path in the database
            $path = $request->file('image')->store('admin/testimonials', 'public');
            $testimonial->image = $path;
        }

        // Save the testimonial record to the database
        $testimonial->save();

        // Redirect back to the testimonials index page with a success message
        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial added successfully.');
    }


    // Show the form for editing an existing testimonial
    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    // Update the specified testimonial
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'testimonial.en' => 'required|string',
            'testimonial.ar' => 'required|string',
            'designation' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $testimonial = Testimonial::findOrFail($id);
        $testimonial->name = $request->input('name');
        $testimonial->setTranslations('testimonial', $request->input('testimonial'));
        $testimonial->designation = $request->input('designation');

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('testimonials', 'public');
            $testimonial->image = $path;
        }

        $testimonial->save();
        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial updated successfully.');
    }

    // Delete the specified testimonial
    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        if ($testimonial->image) {
            \Storage::disk('public')->delete($testimonial->image);
        }
        $testimonial->delete();
        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial deleted successfully.');
    }
}
