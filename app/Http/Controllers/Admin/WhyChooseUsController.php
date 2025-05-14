<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\WhyChooseUs;
use Illuminate\Http\Request;

class WhyChooseUsController extends Controller
{
    public function list($id)
    {
        $whyUs = WhyChooseUs::where('group_id', $id)->get();
        return view('admin.why-choose-us.list', compact('whyUs', 'id'));
    }

    public function index()
    {
        $whyChooseUs = WhyChooseUs::all();
        return response()->json([
            'data' => $whyChooseUs
        ]);
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

    public function add($id)
    {
        $group = Group::find($id);
        return view('admin.why-choose-us.add', compact('group'));
    }

    // Store Feature
    public function store(Request $request)
    {
        $request->validate([
            'title.en' => 'required',
            'title.ar' => 'required',
            'subtitle.en' => 'required',
            'subtitle.ar' => 'required',
            'description.en' => 'required',
            'description.ar' => 'required',
            'icon' => 'required',
            'order_no' => 'required',
            'status' => 'required',
        ]);
        $why_choose_us = new WhyChooseUs();
        $why_choose_us->page_id = $request->page_id;
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
        return response()->json([
            'success' => true,
            'whyus' => $why_choose_us,
        ]);
    }

    // Feature Delete
    public function delete($id)
    {
        $why_choose_us = WhyChooseUs::find($id);
        $why_choose_us->delete();
        return response()->json([
            'success' => true,
        ]);
    }

    // Feature Edit
    public function edit($id)
    {
        $whyUs = WhyChooseUs::find($id);
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
            'icon' => $whyUs->icon,
            'order_no' => $whyUs->order_no,
            'status' => $whyUs->status,
        ]);
    }

    // Update Feature
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'icon' => 'required',
            'description' => 'required',
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
        $why_choose_us->icon = json_encode($request->icon);
        $why_choose_us->order_no = $request->order_no;
        $why_choose_us->status = $request->status;
        $why_choose_us->save();
        return response()->json([
            'data' => $why_choose_us,
        ]);
    }
}
