<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DocumentRequired;
use App\Models\Group;
use Illuminate\Http\Request;

class DocumentRequiredController extends Controller
{
    public function index()
    {
        $documents = DocumentRequired::orderBy('order_no')->get();

        return response()->json([
            'data' => $documents
        ]);
    }

    public function getByPageId($pageId)
    {
        if (!is_numeric($pageId)) {
            return response()->json(['error' => 'Invalid page ID'], 400);
        }
        $documentRequired = DocumentRequired::where('page_id', $pageId)->orderBy('id', 'DESC')->get();
        return response()->json([
            'data' => $documentRequired
        ]);
    }

    public function list($id)
    {
        $documentRequireds = DocumentRequired::where('group_id', $id)->get();
        return view('admin.document-required.list', compact('documentRequireds', 'id'));
    }
    public function add($id)
    {
        $group = Group::find($id);
        return view('admin.document-required.add', compact('group'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'page_id' => 'required|exists:pages,id',
            'title.en' => 'required|string',
            'title.ar' => 'required|string',
            'description.en' => 'nullable|string',
            'description.ar' => 'nullable|string',
            'order_no' => 'nullable|integer|min:0',
            'status' => 'required|in:active,inactive',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Create new DocumentRequired
        $document = new DocumentRequired();
        $document->page_id = $request->page_id;

        // Store multilingual fields
        $document->title = json_encode([
            'en' => $request->input('title.en'),
            'ar' => $request->input('title.ar')
        ], JSON_UNESCAPED_UNICODE);

        $document->description = json_encode([
            'en' => $request->input('description.en'),
            'ar' => $request->input('description.ar')
        ], JSON_UNESCAPED_UNICODE);

        // Handle Icon Upload
        if ($request->hasFile('icon')) {
            $iconName = time() . '.' . $request->file('icon')->extension();
            $request->file('icon')->move(public_path('assets/admin/uploads/document/'), $iconName);
            $document->icon = $iconName;
        }

        $document->order_no = $request->order_no ?? 0;
        $document->status = $request->status;
        $document->save();

        // Return JSON response
        return response()->json([
            'success' => true,
            'document' => $document
        ]);
    }

    public function edit($id)
    {
        $document = DocumentRequired::findOrFail($id);

        return response()->json([
            'title' => json_decode($document->title),
            'description' => json_decode($document->description),
            'order_no' => $document->order_no,
            'status' => $document->status,
            'icon' => $document->icon
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title.en' => 'required|string',
            'title.ar' => 'required|string',
            'description.en' => 'nullable|string',
            'description.ar' => 'nullable|string',
            'order_no' => 'nullable|integer|min:0',
            'status' => 'required|in:active,inactive',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $document = DocumentRequired::findOrFail($id);
        // Update multilingual fields
        $document->title = json_encode([
            'en' => $request->input('title.en'),
            'ar' => $request->input('title.ar')
        ], JSON_UNESCAPED_UNICODE);
        $document->description = json_encode([
            'en' => $request->input('description.en'),
            'ar' => $request->input('description.ar')
        ], JSON_UNESCAPED_UNICODE);
        // Handle Icon Upload
        if ($request->hasFile('icon')) {
            // Delete old icon if exists
            if ($document->icon) {
                @unlink(public_path('assets/admin/uploads/document/' . $document->icon));
            }

            $file = $request->file('icon');
            $extension = $file->getClientOriginalExtension();
            $icon = time() . rand() . '.' . $extension;
            $file->move(public_path('assets/admin/uploads/document/'), $icon);
            $document->icon = $icon;
        }
        $document->order_no = $request->order_no ?? 0;
        $document->status = $request->status;
        $document->save();
        return response()->json([
            'success' => true,
            'document' => $document
        ]);
    }

    public function destroy($id)
    {
        $document = DocumentRequired::findOrFail($id);

        // Delete associated icon
        if ($document->icon) {
            @unlink(public_path('assets/admin/uploads/document/' . $document->icon));
        }

        $document->delete();

        return response()->json([
            'success' => true,
            'message' => 'Document deleted successfully'
        ]);
    }



    // public function index(Request $request)
    // {
    //     $groups = Group::where('type', 'document-required')->get();
    //     return view('admin.document-required.index', compact('groups'));
    // }


    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'group_id' => 'required|exists:groups,id',
    //         'title' => 'required',
    //         'icon' => 'required',
    //         'description' => 'required',
    //         'order_no' => 'required',
    //         'status' => 'required',
    //     ]);

    //     $documentRequired = new DocumentRequired();
    //     $documentRequired->group_id = $request->group_id;
    //     $documentRequired->title = json_encode([
    //         'en' => $request->title,
    //         'ar' => $request->title
    //     ]);
    //     $documentRequired->icon = $request->icon;
    //     $documentRequired->description = json_encode([
    //         'en' => $request->description,
    //         'ar' => $request->description
    //     ]);
    //     $documentRequired->order_no = $request->order_no;
    //     $documentRequired->status = $request->status;
    //     $documentRequired->save();
    //     $notification = array(
    //         'message' => 'DocumentRequired Added successfully!',
    //         'alert' => 'success'
    //     );
    //     return redirect()->route('admin.document-required.list', ['id' => $documentRequired->group_id])->with('notification', $notification);
    // }

    // // Feature Delete
    // public function delete($id)
    // {
    //     $documentRequired = DocumentRequired::find($id);
    //     $documentRequired->delete();
    //     $notification = array(
    //         'message' => 'DocumentRequired Deleted successfully!',
    //         'alert' => 'success'
    //     );
    //     return redirect()->back()->with('notification', $notification);
    // }

    // Feature Edit
    // public function edit($id)
    // {
    //     $documentRequired = DocumentRequired::find($id);
    //     return view('admin.document-required.edit', compact('documentRequired'));
    // }

    // public function update(Request $request, $id)
    // {
    //     $request->validate([
    //         'title' => 'required',
    //         'icon' => 'required',
    //         'description' => 'required',
    //         'order_no' => 'required',
    //         'status' => 'required',
    //     ]);
    //     $documentRequired = DocumentRequired::find($id);
    //     $documentRequired->title = json_encode([
    //         'en' => $request->title,
    //         'ar' => $request->title
    //     ]);
    //     $documentRequired->icon = $request->icon;
    //     $documentRequired->description = json_encode([
    //         'en' => $request->description,
    //         'ar' => $request->description
    //     ]);
    //     $documentRequired->order_no = $request->order_no;
    //     $documentRequired->status = $request->status;
    //     $documentRequired->save();
    //     $notification = array(
    //         'message' => 'DocumentRequired Updated successfully!',
    //         'alert' => 'success'
    //     );
    //     return redirect()->route('admin.document-required.list', ['id' => $documentRequired->group_id])->with('notification', $notification);
    // }
}
