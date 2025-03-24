<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\Procedure;
use Illuminate\Http\Request;

class ProcedureController extends Controller
{
    public function list($id)
    {
        $procedures = Procedure::where('group_id', $id)->orderBy('order_no', 'asc')->get();
        $group = Group::find($id);
        return view('admin.procedure.list', compact('procedures', 'id', 'group'));
    }

    public function index(Request $request)
    {
        $groups = Group::where('type', 'procedure')->get();
        return view('admin.procedure.index', compact('groups'));
    }

    public function add($id)
    {
        $group = Group::find($id);
        return view('admin.procedure.add', compact('group'));
    }

    // Store Procedure
    public function store(Request $request)
    {
        $request->validate([
            'group_id' => 'required|exists:groups,id',
            'title' => 'required',
            'icon' => 'required',
            'subtitle' => 'required',
            'description' => 'required',
            'order_no' => 'required',
            'status' => 'required',
        ]);

        $procedure = new Procedure();

        $procedure->group_id = $request->group_id;

        $procedure->title = json_encode([
            'en' => $request->title,
            'ar' => $request->title
        ]);

        $procedure->icon = $request->icon;

        $procedure->subtitle = json_encode([
            'en' => $request->subtitle,
            'ar' => $request->subtitle
        ]);

        $procedure->description = json_encode([
            'en' => $request->description,
            'ar' => $request->description
        ]);

        $procedure->order_no = $request->order_no;
        $procedure->status = $request->status;

        $procedure->save();


        $notification = array(
            'message' => 'Procedure Added successfully!',
            'alert' => 'success'
        );
        return redirect()->route('admin.procedure.list', ['id' => $procedure->group_id])->with('notification', $notification);
    }

    // Feature Delete
    public function delete($id)
    {

        $procedure = Procedure::find($id);
        $procedure->delete();

        $notification = array(
            'message' => 'Procedure Deleted successfully!',
            'alert' => 'success'    
        );
        return redirect()->back()->with('notification', $notification);
    }

    // Feature Edit
    public function edit($id)
    {

        $procedure = Procedure::find($id);
        return view('admin.procedure.edit', compact('procedure'));
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

        $procedure = Procedure::find($id);

        $procedure->title = json_encode([
            'en' => $request->title,
            'ar' => $request->title
        ]);

        $procedure->icon = $request->icon;

        $procedure->subtitle = json_encode([
            'en' => $request->subtitle,
            'ar' => $request->subtitle
        ]);

        $procedure->description = json_encode([
            'en' => $request->description,
            'ar' => $request->description
        ]);

        $procedure->order_no = $request->order_no;
        $procedure->status = $request->status;

        $procedure->save();


        $notification = array(
            'message' => 'Procedure Updated successfully!',
            'alert' => 'success'
        );
        return redirect()->route('admin.procedure.list', ['id' => $procedure->group_id])->with('notification', $notification);
    }
}
