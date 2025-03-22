<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CallToAction;
use App\Models\Group;
use Illuminate\Http\Request;

class CallToActionController extends Controller
{
    public function list($id)
    {
        $callToActions = CallToAction::where('group_id', $id)->get();
        $group = Group::find($id);
        return view('admin.call-to-action.list', compact('callToActions', 'id', 'group'));
    }

    public function index(Request $request)
    {
        $groups = Group::where('type', 'cta')->get();
        return view('admin.call-to-action.index', compact('groups'));
    }

    public function add($id)
    {
        $group = Group::find($id);
        return view('admin.call-to-action.add', compact('group'));
    }

    // Store CallToAction
    public function store(Request $request)
    {

        $request->validate([
            'group_id' => 'required|exists:groups,id',
            'title' => 'required|max:250',
            'subtitle' => 'required|max:250',
            'button_text' => 'required|max:250',
            'button_link' => 'required|url|max:250',
            'status' => 'required',
        ]);

        $call_to_action = new CallToAction();

        $call_to_action->group_id = $request->group_id;

        $call_to_action->title = json_encode([
            'en' => $request->title,
            'ar' => $request->title
        ]);

        $call_to_action->subtitle = json_encode([
            'en' => $request->subtitle,
            'ar' => $request->subtitle
        ]);

        $call_to_action->button_text = json_encode([
            'en' => $request->button_text,
            'ar' => $request->button_text
        ]);

        $call_to_action->button_link = $request->button_link;
        $call_to_action->status = $request->status;

        $call_to_action->save();


        $notification = array(
            'message' => 'CallToAction Added successfully!',
            'alert' => 'success'
        );
        return redirect()->route('admin.call-to-action.list', ['id' => $call_to_action->group_id])->with('notification', $notification);
    }

    // Feature Delete
    public function delete($id)
    {

        $call_to_action = CallToAction::find($id);
        $call_to_action->delete();

        $notification = array(
            'message' => 'CallToAction Deleted successfully!',
            'alert' => 'success'    
        );
        return redirect()->back()->with('notification', $notification);
    }

    // Feature Edit
    public function edit($id)
    {

        $call_to_action = CallToAction::find($id);
        return view('admin.call-to-action.edit', compact('call_to_action'));
    }

    // Update Feature
    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => 'required|max:250',
            'subtitle' => 'required|max:250',
            'button_text' => 'required|max:250',
            'button_link' => 'required|url|max:250',
            'status' => 'required',
        ]);

        $call_to_action = CallToAction::find($id);

        $call_to_action->title = json_encode([
            'en' => $request->title,
            'ar' => $request->title
        ]);

        $call_to_action->subtitle = json_encode([
            'en' => $request->subtitle,
            'ar' => $request->subtitle
        ]);

        $call_to_action->button_text = json_encode([
            'en' => $request->button_text,
            'ar' => $request->button_text
        ]);

        $call_to_action->button_link = $request->button_link;
        $call_to_action->status = $request->status;

        $call_to_action->save();

        $notification = array(
            'message' => 'CallToAction Updated successfully!',
            'alert' => 'success'
        );
        return redirect()->route('admin.call-to-action.list', ['id' => $call_to_action->group_id])->with('notification', $notification);
    }
}
