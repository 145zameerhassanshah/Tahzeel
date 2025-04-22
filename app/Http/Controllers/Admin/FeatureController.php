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

    // Store Feature
    public function store(Request $request)
    {
        
        $request->merge(json_decode($request->getContent(), true));
        $request->validate([
            'page_id' => 'required',
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
        $feature = Feature::create([
            'page_id' => $request->page_id,
            'icon' => $request->icon,
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'description' => $request->description,
            'order_no' => $request->order_no,
            'status' => $request->status
        ]);
        return response()->json([
            'success' => true,
            'message' => 'Feature saved!',
        ]);
    }

    // Feature Delete
    public function delete($id)
    {
        $feature = Feature::find($id);
        $feature->delete();
        return response()->json([
            'success' => true,
        ]);
    }

    public function edit($id)
    {
        $feature = Feature::findOrFail($id);
        return response()->json([
            'title' => is_string($feature->title) ? json_decode($feature->title, true) : $feature->title,
            'subtitle' => is_string($feature->subtitle) ? json_decode($feature->subtitle, true) : $feature->subtitle,
            'description' => is_string($feature->description) ? json_decode($feature->description, true) : $feature->description,
            'icon' => is_string($feature->icon) ? json_decode($feature->icon, true) : $feature->icon,
            'order_no' => $feature->order_no,
            'status' => $feature->status,
        ]);
    }

    // Update Feature
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'icon' => 'required',
            'subtitle' => 'required',
            'description' => 'required',
            'order_no' => 'required',
            'status' => 'required',
        ]);
        $feature = Feature::find($id);
        $feature->title = json_encode($request->title);
        $feature->subtitle = json_encode($request->subtitle);
        $feature->description = json_encode($request->description);
        $feature->icon = $request->icon;
        $feature->order_no = $request->order_no;
        $feature->status = $request->status;
        $feature->save();
        return response()->json([
            'data' => $feature,
        ]);
    }
}