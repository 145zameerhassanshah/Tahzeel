<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DocumentRequired;
use App\Models\Group;
use Illuminate\Http\Request;

class DocumentRequiredController extends Controller
{
    public function list($id)
    {
        $documentRequireds = DocumentRequired::where('group_id', $id)->get();
        return view('admin.document-required.list', compact('documentRequireds', 'id'));
    }

    public function index(Request $request)
    {
        $groups = Group::where('type', 'document-required')->get();
        return view('admin.document-required.index', compact('groups'));
    }

    public function add($id)
    {
        $group = Group::find($id);
        return view('admin.document-required.add', compact('group'));
    }

    // Store Feature
    public function store(Request $request)
    {

        $request->validate([
            'group_id' => 'required|exists:groups,id',
            'title' => 'required',
            'icon' => 'required',
            'description' => 'required',
            'order_no' => 'required',
            'status' => 'required',
        ]);

        $documentRequired = new DocumentRequired();

        $documentRequired->group_id = $request->group_id;

        $documentRequired->title = json_encode([
            'en' => $request->title,
            'ar' => $request->title
        ]);

        $documentRequired->icon = $request->icon;

        $documentRequired->description = json_encode([
            'en' => $request->description,
            'ar' => $request->description
        ]);

        $documentRequired->order_no = $request->order_no;
        $documentRequired->status = $request->status;

        $documentRequired->save();


        $notification = array(
            'message' => 'DocumentRequired Added successfully!',
            'alert' => 'success'
        );
        return redirect()->route('admin.document-required.list', ['id' => $documentRequired->group_id])->with('notification', $notification);
    }

    // Feature Delete
    public function delete($id)
    {

        $documentRequired = DocumentRequired::find($id);
        $documentRequired->delete();

        $notification = array(
            'message' => 'DocumentRequired Deleted successfully!',
            'alert' => 'success'
        );
        return redirect()->back()->with('notification', $notification);
    }

    // Feature Edit
    public function edit($id)
    {

        $documentRequired = DocumentRequired::find($id);
        return view('admin.document-required.edit', compact('documentRequired'));
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

        $documentRequired = DocumentRequired::find($id);

        $documentRequired->title = json_encode([
            'en' => $request->title,
            'ar' => $request->title
        ]);

        $documentRequired->icon = $request->icon;

        $documentRequired->description = json_encode([
            'en' => $request->description,
            'ar' => $request->description
        ]);

        $documentRequired->order_no = $request->order_no;
        $documentRequired->status = $request->status;

        $documentRequired->save();


        $notification = array(
            'message' => 'DocumentRequired Updated successfully!',
            'alert' => 'success'
        );
        return redirect()->route('admin.document-required.list', ['id' => $documentRequired->group_id])->with('notification', $notification);
    }
}
