<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\{Group, Page};
use Illuminate\Http\Request;
use App\Models\Testimonial;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    public function index($slug)
    {
        $page = Page::where('slug', $slug)->first();
        $testimonials = Testimonial::where('page_id', $page->id)->orderBy('order_no')->get();
        return view('admin.page.partials.testimonial_list', compact('testimonials', 'slug'));
    }
    public function getByPageId($pageId)
    {
        if (!is_numeric($pageId)) {
            return response()->json(['error' => 'Invalid page ID'], 400);
        }
        $testimonials = Testimonial::where('page_id', $pageId)->orderBy('id', 'DESC')->get();
        return response()->json([
            'data' => $testimonials
        ]);
    }

    public function list($id)
    {
        $testimonials = Testimonial::where('group_id', $id)->get();
        $group = Group::find($id);
        return view('admin.testimonial.list', compact('testimonials', 'id', 'group'));
    }


    public function add($slug)
    {
        return view('admin.page.partials.testimonial_add', compact("slug"));
    }

    public function store(Request $request, $slug)
    {
        // dd($request->all());
        // $request->validate([
        //     'name.en' => 'required|string',
        //     'name.ar' => 'required|string',
        //     'feedback.en' => 'required|string',
        //     'feedback.ar' => 'required|string',
        //     'designation.en' => 'required|string',
        //     'designation.ar' => 'required|string',
        //     'order_no' => 'nullable|integer|min:0',
        //     'status' => 'required|in:active,inactive',
        //     'image' => 'nullable|image|max:2048',
        // ]);
        $page = Page::where('slug', $slug)->first();
        $testimonial = new Testimonial();
        $testimonial->page_id = $page->id;
        $testimonial->setTranslations('name', [
            'en' => $request->name['en'],
            'ar' => $request->name['ar'],
        ]);
        $testimonial->setTranslations('feedback', [
            'en' => $request->feedback['en'],
            'ar' => $request->feedback['ar'],
        ]);
        $testimonial->setTranslations('designation', [
            'en' => $request->designation['en'],
            'ar' => $request->designation['ar'],
        ]);
        // $testimonial->setTranslation('name', 'en', $request['name']['en']);
        // $testimonial->setTranslation('name', 'ar', $request['name']['ar']);
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->file('image')->extension();
            $request->file('image')->move(public_path('assets/admin/uploads/testimonial/'), $imageName);
            $testimonial->image = $imageName;
        }
        $testimonial->order_no = $request->order_no ?? 0;
        $testimonial->status = $request->status;
        $testimonial->save();
        
        return redirect()->route('admin.testimonial.index', ['slug' => $page->slug])->with('notification', ['alert' => 'success', 'message' => 'Testimonial added Successfully!']);
    }

    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $slug = $testimonial->page->slug;
        return view('admin.page.partials.testimonial_edit', compact('testimonial', 'slug'));
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
            'image' => 'nullable|image|max:2048',
        ]);

        $testimonial = Testimonial::find($id);

        $testimonial->setTranslation('name', 'en', $request['name']['en']);
        $testimonial->setTranslation('name', 'ar', $request['name']['ar']);
        $testimonial->setTranslation('feedback', 'en', $request['feedback']['en']);
        $testimonial->setTranslation('feedback', 'ar', $request['feedback']['ar']);
        $testimonial->setTranslation('designation', 'en', $request['designation']['en']);
        $testimonial->setTranslation('designation', 'ar', $request['designation']['ar']);
        if ($request->hasFile('image')) {
            @unlink('assets/admin/uploads/testimonial/' . $testimonial->image);
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $image = time() . rand() . '.' . $extension;
            $file->move('assets/admin/uploads/testimonial/', $image);
            $testimonial->image = $image;
        }
        $testimonial->order_no = $request->order_no;
        $testimonial->status = $request->status;
        $testimonial->save();
        
        return redirect()->route('admin.testimonial.index', ['slug' => $testimonial->page->slug])->with('notification', ['alert' => 'success', 'message' => 'Testimonial updated Successfully!']);
    }

    // Delete the specified testimonial
    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        @unlink('assets/admin/uploads/testimonial/' . $testimonial->image);
        $testimonial->delete();
        return redirect()->back()->with('notification', ['alert' => 'success', 'message' => 'Testimonial deleted Successfully!']);
    }

    // public function index()
    // {
    //     $groups = Group::where('type', 'testimonials')->get();
    //     return view('admin.testimonial.index', compact('groups'));
    // }
}
