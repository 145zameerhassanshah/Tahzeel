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

    public function index(Request $request)
    {
        $groups = Group::where('type', 'why_choose_us')->get();
        return view('admin.why-choose-us.index', compact('groups'));
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
            'group_id' => 'required|exists:groups,id',
            'title' => 'required|max:250',
            'icon' => 'required|max:250',
            'description' => 'required|max:250',
            'order_no' => 'required|max:250',
            'status' => 'required',
        ]);

        $why_choose_us = new WhyChooseUs();

        $why_choose_us->group_id = $request->group_id;

        $why_choose_us->title = json_encode([
            'en' => $request->title,
            'ar' => $request->title
        ]);

        $why_choose_us->icon = json_encode([
            'en' => $request->icon,
            'ar' => $request->icon
        ]);

        $why_choose_us->description = json_encode([
            'en' => $request->description,
            'ar' => $request->description
        ]);

        $why_choose_us->order_no = $request->order_no;
        $why_choose_us->status = $request->status;

        $why_choose_us->save();


        $notification = array(
            'message' => 'WhyChooseUs Added successfully!',
            'alert' => 'success'
        );
        return redirect()->route('admin.why-choose-us.list', ['id' => $why_choose_us->group_id])->with('notification', $notification);
    }

    // Feature Delete
    public function delete($id)
    {

        $why_choose_us = WhyChooseUs::find($id);
        $why_choose_us->delete();

        $notification = array(
            'message' => 'WhyChooseUs Deleted successfully!',
            'alert' => 'success'    
        );
        return redirect()->back()->with('notification', $notification);
    }

    // Feature Edit
    public function edit($id)
    {

        $whyUs = WhyChooseUs::find($id);
        return view('admin.why-choose-us.edit', compact('whyUs'));
    }

    // Update Feature
    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => 'required|max:250',
            'icon' => 'required|max:250',
            'description' => 'required|max:250',
            'order_no' => 'required|max:250',
            'status' => 'required',
        ]);

        $why_choose_us = WhyChooseUs::find($id);

        $why_choose_us->title = json_encode([
            'en' => $request->title,
            'ar' => $request->title
        ]);

        $why_choose_us->icon = json_encode([
            'en' => $request->icon,
            'ar' => $request->icon
        ]);

        $why_choose_us->description = json_encode([
            'en' => $request->description,
            'ar' => $request->description
        ]);

        $why_choose_us->order_no = $request->order_no;
        $why_choose_us->status = $request->status;

        $why_choose_us->save();


        $notification = array(
            'message' => 'WhyChooseUs Updated successfully!',
            'alert' => 'success'
        );
        return redirect()->route('admin.why-choose-us.list', ['id' => $why_choose_us->group_id])->with('notification', $notification);
    }
}
