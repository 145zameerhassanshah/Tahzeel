<?php

namespace App\Http\Controllers\Admin;

use App\Models\Feature;
use App\Models\Language;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Group;

class FeatureController extends Controller
{
    public function list($id)
    {
        $features = Feature::where('group_id', $id)->get();
        return view('admin.feature.list', compact('features', 'id'));
    }

    public function index()
    {
        $features = Feature::all();
        return response()->json([
            'data' => $features
        ]);
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

    public function add($id)
    {
        $group = Group::find($id);
        return view('admin.feature.add', compact('group'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'page_id' => 'required|exists:pages,id',
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

        $feature = new Feature();
        $feature->page_id = $request->page_id;
        $feature->icon = $request->icon;
        $feature->order_no = $request->order_no;
        $feature->status = $request->status;

        $feature->setTranslations('title', $request->input('title'));
        $feature->setTranslations('subtitle', $request->input('subtitle'));
        $feature->setTranslations('description', $request->input('description'));

        $feature->save();

        return response()->json([
            'success' => true,
            'message' => 'Feature saved!',
            'data' => $feature
        ]);
    }


    public function edit($id)
    {
        $feature = Feature::findOrFail($id);
        return response()->json([
            'title' => [
                'en' => $feature->getTranslation('title', 'en'),
                'ar' => $feature->getTranslation('title', 'ar'),
            ],
            'subtitle' => [
                'en' => $feature->getTranslation('subtitle', 'en'),
                'ar' => $feature->getTranslation('subtitle', 'ar'),
            ],
            'description' => [
                'en' => $feature->getTranslation('description', 'en'),
                'ar' => $feature->getTranslation('description', 'ar'),
            ],
            'icon' => is_string($feature->icon) ? json_decode($feature->icon, true) : $feature->icon,
            'order_no' => $feature->order_no,
            'status' => $feature->status,
        ]);
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

        return response()->json([
            'success' => true,
            'data' => $feature
        ]);
    }
    public function delete($id)
    {
        $feature = Feature::find($id);
        $feature->delete();
        return response()->json([
            'success' => true,
        ]);
    }
}
