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

    // public function index(Request $request)
    // {
    //     $groups = Group::where('type', 'procedure')->get();
    //     return view('admin.procedure.index', compact('groups'));
    // }

    // public function add($id)
    // {
    //     $group = Group::find($id);
    //     return view('admin.procedure.add', compact('group'));
    // }
    // public function store(Request $request)
    // {

    //     $request->validate([
    //         'group_id' => 'required|exists:groups,id',
    //         'title' => 'required',
    //         'icon' => 'required',
    //         'subtitle' => 'required',
    //         'description' => 'required',
    //         'order_no' => 'required',
    //         'status' => 'required',
    //     ]);

    //     $procedure = new Procedure();

    //     $procedure->group_id = $request->group_id;

    //     $procedure->title = json_encode([
    //         'en' => $request->title,
    //         'ar' => $request->title
    //     ]);

    //     $procedure->icon = json_encode($request->icon);

    //     $procedure->subtitle = json_encode([
    //         'en' => $request->subtitle,
    //         'ar' => $request->subtitle
    //     ]);

    //     $procedure->description = json_encode([
    //         'en' => $request->description,
    //         'ar' => $request->description
    //     ]);

    //     $procedure->order_no = $request->order_no;
    //     $procedure->status = $request->status;

    //     $procedure->save();


    //     $notification = array(
    //         'message' => 'Procedure Added successfully!',
    //         'alert' => 'success'
    //     );
    //     return redirect()->route('admin.procedure.list', ['id' => $procedure->group_id])->with('notification', $notification);
    // }
    // public function delete($id)
    // {

    //     $procedure = Procedure::find($id);
    //     $procedure->delete();

    //     $notification = array(
    //         'message' => 'Procedure Deleted successfully!',
    //         'alert' => 'success'    
    //     );
    //     return redirect()->back()->with('notification', $notification);
    // }

    // public function edit($id)
    // {

    //     $procedure = Procedure::find($id);
    //     return view('admin.procedure.edit', compact('procedure'));
    // }
    // public function update(Request $request, $id)
    // {


    //     $request->validate([
    //         'title' => 'required',
    //         'icon' => 'required',
    //         'subtitle' => 'required',
    //         'description' => 'required',
    //         'order_no' => 'required',
    //         'status' => 'required',
    //     ]);

    //     $procedure = Procedure::find($id);

    //     $procedure->title = json_encode([
    //         'en' => $request->title,
    //         'ar' => $request->title
    //     ]);

    //     $procedure->icon = $request->icon;

    //     $procedure->subtitle = json_encode([
    //         'en' => $request->subtitle,
    //         'ar' => $request->subtitle
    //     ]);

    //     $procedure->description = json_encode([
    //         'en' => $request->description,
    //         'ar' => $request->description
    //     ]);

    //     $procedure->order_no = $request->order_no;
    //     $procedure->status = $request->status;

    //     $procedure->save();


    //     $notification = array(
    //         'message' => 'Procedure Updated successfully!',
    //         'alert' => 'success'
    //     );
    //     return redirect()->route('admin.procedure.list', ['id' => $procedure->group_id])->with('notification', $notification);
    // }
    public function index()
{
    
    $procedures = Procedure::orderBy('order_no')->get();
    
    return response()->json([
        'data' => $procedures
    ]);
}

public function store(Request $request)
{
    
    $request->validate([
        'title.en' => 'required|string',
        'title.ar' => 'required|string',
        'subtitle.en' => 'nullable|string',
        'subtitle.ar' => 'nullable|string',
        'description.en' => 'nullable|string',
        'description.ar' => 'nullable|string',
        'order_no' => 'nullable|integer|min:0',
        'status' => 'required|in:active,inactive',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Create new Procedure
    $procedure = new Procedure();
    $procedure->page_id = $request->page_id;
    
    // Store multilingual fields
    $procedure->title = json_encode([
        'en' => $request->input('title.en'),
        'ar' => $request->input('title.ar')
    ], JSON_UNESCAPED_UNICODE);

    $procedure->subtitle = json_encode([
        'en' => $request->input('subtitle.en'),
        'ar' => $request->input('subtitle.ar')
    ], JSON_UNESCAPED_UNICODE);

    $procedure->description = json_encode([
        'en' => $request->input('description.en'),
        'ar' => $request->input('description.ar')
    ], JSON_UNESCAPED_UNICODE);

    // Handle Image Upload
    if ($request->hasFile('image')) {
        $imageName = time() . '.' . $request->file('image')->extension();
        $request->file('image')->move(public_path('assets/admin/uploads/procedure/'), $imageName);
        $procedure->image = $imageName;
    }

    $procedure->order_no = $request->order_no ?? 0;
    $procedure->status = $request->status;
    $procedure->save();

    // Return JSON response
    return response()->json([
        'success' => true,
        'procedure' => $procedure
    ]);
}

public function edit($id)
{
    $procedure = Procedure::findOrFail($id);
    
    return response()->json([
        'title' => json_decode($procedure->title),
        'subtitle' => json_decode($procedure->subtitle),
        'description' => json_decode($procedure->description),
        'order_no' => $procedure->order_no,
        'status' => $procedure->status,
        'image' => $procedure->image
    ]);
}

public function update(Request $request, $id)
{
    $request->validate([
        'title.en' => 'required|string',
        'title.ar' => 'required|string',
        'subtitle.en' => 'nullable|string',
        'subtitle.ar' => 'nullable|string',
        'description.en' => 'nullable|string',
        'description.ar' => 'nullable|string',
        'order_no' => 'nullable|integer|min:0',
        'status' => 'required|in:active,inactive',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $procedure = Procedure::findOrFail($id);

    // Update multilingual fields
    $procedure->title = json_encode([
        'en' => $request->input('title.en'),
        'ar' => $request->input('title.ar')
    ], JSON_UNESCAPED_UNICODE);

    $procedure->subtitle = json_encode([
        'en' => $request->input('subtitle.en'),
        'ar' => $request->input('subtitle.ar')
    ], JSON_UNESCAPED_UNICODE);

    $procedure->description = json_encode([
        'en' => $request->input('description.en'),
        'ar' => $request->input('description.ar')
    ], JSON_UNESCAPED_UNICODE);

    // Handle Image Upload
    if ($request->hasFile('image')) {
        // Delete old image if exists
        if ($procedure->image) {
            @unlink(public_path('assets/admin/uploads/procedure/'. $procedure->image));
        }
        
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $image = time() . rand() . '.' . $extension;
        $file->move(public_path('assets/admin/uploads/procedure/'), $image);
        $procedure->image = $image;
    }

    $procedure->order_no = $request->order_no ?? 0;
    $procedure->status = $request->status;
    $procedure->save();

    return response()->json([
        'success' => true,
        'procedure' => $procedure
    ]);
}

public function destroy($id)
{
    $procedure = Procedure::findOrFail($id);

    // Delete associated image
    if ($procedure->image) {
        @unlink(public_path('assets/admin/uploads/procedure/'. $procedure->image));
    }

    $procedure->delete();

    return response()->json([
        'success' => true,
        'message' => 'Procedure deleted successfully'
    ]);
}
}
