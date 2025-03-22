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

    public function index(Request $request)
    {
        $groups = Group::where('type', 'features')->get();
        return view('admin.feature.index', compact('groups'));
    }

    public function add($id)
    {
        $group = Group::find($id);
        return view('admin.feature.add', compact('group'));
    }

    // Store Feature
    public function store(Request $request)
    {


        $request->validate([
            'group_id' => 'required|exists:groups,id',
            'title' => 'required|max:250',
            'icon' => 'required|max:250',
            'subtitle' => 'required|max:250',
            'description' => 'required|max:250',
            'order_no' => 'required|max:250',
            'status' => 'required',
        ]);

        $feature = new Feature();

        $feature->group_id = $request->group_id;

        $feature->title = json_encode([
            'en' => $request->title,
            'ar' => $request->title
        ]);

        $feature->icon = json_encode([
            'en' => $request->icon,
            'ar' => $request->icon
        ]);

        $feature->subtitle = json_encode([
            'en' => $request->subtitle,
            'ar' => $request->subtitle
        ]);

        $feature->description = json_encode([
            'en' => $request->description,
            'ar' => $request->description
        ]);

        $feature->order_no = $request->order_no;
        $feature->status = $request->status;

        $feature->save();


        $notification = array(
            'message' => 'Feature Added successfully!',
            'alert' => 'success'
        );
        return redirect()->route('admin.feature.list', ['id' => $feature->group_id])->with('notification', $notification);
    }

    // Feature Delete
    public function delete($id)
    {

        $feature = Feature::find($id);
        $feature->delete();

        $notification = array(
            'message' => 'Feature Deleted successfully!',
            'alert' => 'success'    
        );
        return redirect()->back()->with('notification', $notification);
    }

    // Feature Edit
    public function edit($id)
    {

        $feature = Feature::find($id);
        return view('admin.feature.edit', compact('feature'));
    }

    // Update Feature
    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => 'required|max:250',
            'icon' => 'required|max:250',
            'subtitle' => 'required|max:250',
            'description' => 'required|max:250',
            'order_no' => 'required|max:250',
            'status' => 'required',
        ]);

        $feature = Feature::find($id);

        $feature->title = json_encode([
            'en' => $request->title,
            'ar' => $request->title
        ]);

        $feature->icon = json_encode([
            'en' => $request->icon,
            'ar' => $request->icon
        ]);

        $feature->subtitle = json_encode([
            'en' => $request->subtitle,
            'ar' => $request->subtitle
        ]);

        $feature->description = json_encode([
            'en' => $request->description,
            'ar' => $request->description
        ]);

        $feature->order_no = $request->order_no;
        $feature->status = $request->status;

        $feature->save();


        $notification = array(
            'message' => 'Feature Updated successfully!',
            'alert' => 'success'
        );
        return redirect()->route('admin.feature.list', ['id' => $feature->group_id])->with('notification', $notification);
    }
}
