<?php

namespace App\Http\Controllers\Admin;

use App\Models\Feature;
use App\Models\Language;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Page;

class FeatureController extends Controller
{
    public function index($slug)
    {
        $page = Page::where('slug', $slug)->first();
        $features = Feature::where('page_id', $page->id)->get();
        return view('admin.page.partials.feature_list', compact('slug', 'features'));
    }

    public function getByPageId($pageId)
    {
        if (!is_numeric($pageId)) {
            return response()->json(['error' => 'Invalid page ID'], 400);
        }
        $feature = Feature::where('page_id', $pageId)->orderBy('id', 'DESC')->get();
        return response()->json([
            'data' => $feature
        ]);
    }

    public function add($slug)
    {
        return view('admin.page.partials.feature_add', compact('slug'));
    }

    public function store(Request $request, $slug)
    {
        $request->validate([
            'title.en' => 'required|string',
            'title.ar' => 'required|string',
            'subtitle.en' => 'required|string',
            'subtitle.ar' => 'required|string',
            'description.en' => 'required|string',
            'description.ar' => 'required|string',
            'icon' => 'required',    
            'order_no' => 'required|integer',
            'status' => 'required|in:active,inactive',
        ]);

        $page = Page::where('slug', $slug)->first();
        $feature = new Feature();
        $feature->page_id = $page->id;
        $feature->icon = $request->icon;
        $feature->order_no = $request->order_no;
        $feature->status = $request->status;

        $feature->setTranslations('title', $request->input('title'));
        $feature->setTranslations('subtitle', $request->input('subtitle'));
        $feature->setTranslations('description', $request->input('description'));

        $feature->save();

        return redirect()->route('admin.feature.index', ['slug' => $slug])->with('notification', ['alert' => 'success', 'message' => 'Feature added Successfully!']);
    }


    public function edit($id)
    {
        $feature = Feature::findOrFail($id);
        $slug = $feature->page->slug;
        return view('admin.page.partials.feature_edit', compact('feature', 'slug'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title.en' => 'required|string',
            'title.ar' => 'required|string',
            'subtitle.en' => 'required|string',
            'subtitle.ar' => 'required|string',
            'description.en' => 'required|string',
            'description.ar' => 'required|string',
            'icon' => 'required|string',
            'order_no' => 'required|integer',
            'status' => 'required|in:active,inactive',
        ]);

        $feature = Feature::findOrFail($id);

        $feature->setTranslations('title', [
            'en' => $request->input('title.en'),
            'ar' => $request->input('title.ar'),
        ]);
        $feature->setTranslations('subtitle', [
            'en' => $request->input('subtitle.en'),
            'ar' => $request->input('subtitle.ar'),
        ]);
        $feature->setTranslations('description', [
            'en' => $request->input('description.en'),
            'ar' => $request->input('description.ar'),
        ]);

        $feature->icon = $request->icon;
        $feature->order_no = $request->order_no;
        $feature->status = $request->status;

        $feature->save();

        return redirect()->route('admin.feature.index', ['slug' => $feature->page->slug])->with('notification', ['alert' => 'success', 'message' => 'Feature updated Successfully!']);
    }
    public function delete($id)
    {
        $feature = Feature::find($id);
        $feature->delete();
        
        return redirect()->back()->with('notification', ['alert' => 'success', 'message' => 'Feature deleted Successfully!']);
    }
}
