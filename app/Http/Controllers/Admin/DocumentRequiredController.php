<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DocumentRequired;
use App\Models\{Group, Page};
use Illuminate\Http\Request;

class DocumentRequiredController extends Controller
{
    public function index($slug)
    {
        $page = Page::where('slug', $slug)->first();
        $documents = DocumentRequired::where('page_id', $page->id)->orderBy('order_no')->get();

        return view('admin.page.partials.document_required_list', compact('documents', 'slug'));
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
    public function add($slug)
    {
        return view('admin.page.partials.document_required_add', compact('slug'));
    }

    public function store(Request $request, $slug)
    {
        $request->validate([
            'title.en' => 'required|string',
            'title.ar' => 'required|string',
            'description.en' => 'required|string',
            'description.ar' => 'required|string',
            'order_no' => 'required|integer|min:0',
            'status' => 'required|in:active,inactive',
            'icon' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $page = Page::where('slug', $slug)->first();
        $document = new DocumentRequired();
        $document->page_id = $page->id;
        $document->setTranslations('title', [
            'en' => $request->title['en'],
            'ar' => $request->title['ar'],
        ]);
        $document->setTranslations('description', [
            'en' => $request->description['en'],
            'ar' => $request->description['ar'],
        ]);
        if ($request->hasFile('icon')) {
            $iconName = time() . '.' . $request->file('icon')->extension();
            $request->file('icon')->move(public_path('assets/admin/uploads/document/'), $iconName);
            $document->icon = $iconName;
        }
        $document->order_no = $request->order_no ?? 0;
        $document->status = $request->status;
        $document->save();
        
        return redirect()->route('admin.document-required.index', ['slug' => $slug])->with('notification', ['alert' => 'success', 'message' => 'Document Required added Successfully!']);
    }

    public function edit($id)
    {
        $document = DocumentRequired::findOrFail($id);
        $slug = $document->page->slug;
        return view('admin.page.partials.document_required_edit', compact('document', 'slug'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title.en' => 'required|string',
            'title.ar' => 'required|string',
            'description.en' => 'required|string',
            'description.ar' => 'required|string',
            'order_no' => 'required|integer|min:0',
            'status' => 'required|in:active,inactive',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $document = DocumentRequired::findOrFail($id);
        $document->setTranslations('title', [
            'en' => $request->title['en'],
            'ar' => $request->title['ar'],
        ]);
        $document->setTranslations('description', [
            'en' => $request->description['en'],
            'ar' => $request->description['ar'],
        ]);
        if ($request->hasFile('icon')) {
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
        
        return redirect()->route('admin.document-required.index', ['slug' => $document->page->slug])->with('notification', ['alert' => 'success', 'message' => 'Document Required added Successfully!']);
    }

    public function delete($id)
    {
        $document = DocumentRequired::findOrFail($id);

        // Delete associated icon
        if ($document->icon) {
            @unlink(public_path('assets/admin/uploads/document/' . $document->icon));
        }

        $document->delete();

        return redirect()->back()->with('notificaion', ['alert' => 'success', 'message' => 'Document Required deleted Successfully!']);
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
