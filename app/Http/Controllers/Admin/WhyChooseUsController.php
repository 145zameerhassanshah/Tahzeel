<?php

namespace App\Http\Controllers\Admin;

use App\Models\Page;
use App\Models\Group;
use App\Models\WhyChooseUs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WhyChooseUsController extends Controller
{
    public function list($id)
    {
        $whyUs = WhyChooseUs::where('group_id', $id)->get();
        return view('admin.page.partials.why_choose_us_list', compact('whyUs', 'id'));
    }

    public function index($slug)
    {
        $page = Page::where('slug', $slug)->first();
        $whyUs = WhyChooseUs::where('page_id', $page->id)->get();
        return view('admin.page.partials.why_choose_us_list', compact('whyUs', 'slug'));
    }

    public function getByPageId($pageId)
    {
        if (!is_numeric($pageId)) {
            return response()->json(['error' => 'Invalid page ID'], 400);
        }
        $whyChooseUs = WhyChooseUs::where('page_id', $pageId)->orderBy('id', 'DESC')->get();
        return response()->json([
            'data' => $whyChooseUs
        ]);
    }

    public function add($slug)
    {
        return view('admin.page.partials.why_choose_us_add', compact('slug'));
    }

    // Store Feature
    public function store(Request $request, $slug)
    {
        $request->validate([
            'title.en' => 'required',
            'title.ar' => 'required',
            'subtitle.en' => 'nullable',
            'subtitle.ar' => 'nullable',
            'description.en' => 'required',
            'description.ar' => 'required',
            'icon' => 'required',
            'order_no' => 'required',
            'status' => 'required',
        ]);
        $why_choose_us = new WhyChooseUs();
        $page = Page::where('slug', $slug)->first();

        $why_choose_us->page_id = $page->id;
        $why_choose_us->setTranslations('title', [
            'en' => $request->title['en'],
            'ar' => $request->title['ar'],
        ]);
        $why_choose_us->setTranslations('subtitle', [
            'en' => $request->subtitle['en'],
            'ar' => $request->subtitle['ar'],
        ]);
        $why_choose_us->setTranslations('description', [
            'en' => $request->description['en'],
            'ar' => $request->description['ar'],
        ]);
        // $why_choose_us->icon = json_encode($request->icon);
        $why_choose_us->icon = $request->icon;
        $why_choose_us->order_no = $request->order_no;
        $why_choose_us->status = $request->status;
        $why_choose_us->save();
        $notification = [
            'alert' => 'success', 
            'message' => 'Why Choose Us  added Successfully!'
        ];
        return redirect()->route('admin.why-choose-us.index', ['slug' => $slug])->with('notification', $notification);
    }

    // Feature Delete
    public function delete($id)
    {
        $why_choose_us = WhyChooseUs::find($id);
        $why_choose_us->delete();
        $notification = [
            'alert' => 'success', 
            'message' => 'Why Choose Us  deleted Successfully!'
        ];
        return redirect()->back()->with('notification', $notification);
    }

    // Feature Edit
    public function edit($id)
    {
        $whyUs = WhyChooseUs::findorfail($id);
    $slug = $whyUs->page->slug;

      return view('admin.page.partials.why_choose_us_edit', compact('slug','whyUs'));

    }

    // Update Feature
    public function update(Request $request, $id)
    {
        $request->validate([
            'title.en' => 'required',
            'title.ar' => 'required',
            'subtitle.en' => 'nullable',
            'subtitle.ar' => 'nullable',
            'description.en' => 'required',
            'description.ar' => 'required',
            'icon' => 'required',
            'order_no' => 'required',
            'status' => 'required',
        ]);
        $why_choose_us = WhyChooseUs::find($id);
        $why_choose_us->setTranslations('title', [
            'en' => $request->title['en'],
            'ar' => $request->title['ar'],
        ]);
        $why_choose_us->setTranslations('subtitle', [
            'en' => $request->subtitle['en'],
            'ar' => $request->subtitle['ar'],
        ]);
        $why_choose_us->setTranslations('description', [
            'en' => $request->description['en'],
            'ar' => $request->description['ar'],
        ]);
        $why_choose_us->icon = $request->icon;
        $why_choose_us->order_no = $request->order_no;
        $why_choose_us->status = $request->status;
        $why_choose_us->save();
        $notification = [
            'alert' => 'success', 
            'message' => 'Why Choose Us Updated Successfully!'
        ];
        return redirect()->route('admin.why-choose-us.index', ['slug' =>$why_choose_us->page->slug])->with('notification', $notification);
    }
}
