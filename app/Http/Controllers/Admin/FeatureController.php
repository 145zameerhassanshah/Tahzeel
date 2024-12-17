<?php

namespace App\Http\Controllers\Admin;

use App\Models\Feature;
use App\Models\Language;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FeatureController extends Controller
{
    public function index(Request $request){
        $features = Feature::orderBy('serial_number', 'asc')->get();
        return view('admin.feature.index', compact('features'));
    }

    // Add Feature
    public function add(){
        return view('admin.feature.add');
    }

    // Store Feature
    public function store(Request $request){

      
        $request->validate([
            'title' => 'required|max:250',
            'icon' => 'required|max:250',
            'text' => 'required|max:250',
            'bg_color' => 'required|max:250',
            'serial_number' => 'required|numeric',
            'status' => 'required',
        ]);

        $feature = new Feature();

        $feature->title = $request->title;
        $feature->icon = $request->icon;
        $feature->text = $request->text;
        $feature->bg_color = $request->bg_color;
        $feature->serial_number = $request->serial_number;
        $feature->status = $request->status;

        $feature->save();

        $notification = array(
            'message' => 'Feature Added successfully!',
            'alert' => 'success'
        );
        return redirect()->route('admin.feature.index')->with('notification', $notification);
    }

    // Feature Delete
    public function delete($id){

        $feature = Feature::find($id);
        $feature->delete();

        $notification = array(
            'message' => 'Feature Deleted successfully!',
            'alert' => 'success'
        );
        return redirect()->back()->with('notification', $notification);
    }

    // Feature Edit
    public function edit($id){

        $feature = Feature::find($id);
        return view('admin.feature.edit', compact('feature'));

    }

    // Update Feature
    public function update(Request $request, $id){

        $request->validate([
            'title' => 'required|max:250',
            'icon' => 'required|max:250',
            'text' => 'required|max:250',
            'bg_color' => 'required|max:250',
            'serial_number' => 'required|numeric',
            'status' => 'required',
        ]);


        $feature = Feature::findOrFail($id);

        $feature->title = $request->title;
        $feature->icon = $request->icon;
        $feature->text = $request->text;
        $feature->bg_color = $request->bg_color;
        $feature->serial_number = $request->serial_number;
        $feature->status = $request->status;
        $feature->save();

        $notification = array(
            'message' => 'Feature Updated successfully!',
            'alert' => 'success'
        );
        return redirect(route('admin.feature.index'))->with('notification', $notification);
    }
}
