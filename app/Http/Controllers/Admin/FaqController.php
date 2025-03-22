<?php

namespace App\Http\Controllers\Admin;

use App\Models\Faq;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Group;
use DB;

class FaqController extends Controller
{

    public function list($id)
    {
        $faqs = Faq::where('group_id', $id)->get();
        $group = Group::find($id);
        return view('admin.faq.list', compact('faqs', 'id', 'group'));
    }

    public function index()
    {
        $groups = Group::where('type', 'faq')->get();
        return view('admin.faq.index', compact('groups'));
    }

    public function create(Request $request)
    {
        $group = Group::find($request->id);
        return view('admin.faq.add', compact("group"));
    }

    public function store(Request $request)
    {
        $request->validate([
            'group_id' => 'required|exists:groups,id',
            'question.en' => 'required|string',
            'question.ar' => 'required|string',
            'answer.en' => 'required|string',
            'answer.ar' => 'required|string',
            'status' => 'required',
            'order_no' => 'required',
        ]);

        $faq = new Faq();
        $faq->group_id = $request->group_id;

        $faq->question = json_encode([
            'en' => $request->question['en'],
            'ar' => $request->question['ar']
        ]);

        $faq->answer = json_encode([
            'en' => $request->answer['en'],
            'ar' => $request->answer['ar']
        ]);

        $faq->order_no = $request->order_no;
        $faq->status = $request->status;

        $faq->save();

        $notification = array(
            'message' => 'FAQ added successfully',
            'alert' => 'success',
        );

        return redirect()->route('admin.faq.list', $faq->group_id)->with('notification', $notification);
    }

    public function edit(Faq $faq)
    {
        return view('admin.faq.edit', compact('faq'));
    }

    public function update(Request $request, Faq $faq)
    {
        $request->validate([
            'question.en' => 'required|string',
            'question.ar' => 'required|string',
            'answer.en' => 'required|string',
            'answer.ar' => 'required|string',
            'status' => 'required',
            'order_no' => 'required',
        ]);

        $faq->question = json_encode([
            'en' => $request->question['en'],
            'ar' => $request->question['ar']
        ]);

        $faq->answer = json_encode([
            'en' => $request->answer['en'],
            'ar' => $request->answer['ar']
        ]);

        $faq->order_no = $request->order_no;
        $faq->status = $request->status;

        $faq->save();


        $notification = array(
            'message' => 'FAQ Updated successfully',
            'alert' => 'success',
        );

        return redirect()->route('admin.faq.list', $faq->group_id)->with('notification', $notification);
    }

    public function destroy(Faq $faq)
    {
        $faq->delete();
        $notification = array(
            'message' => 'FAQ Deleted successfully',
            'alert' => 'success',
        );

        return redirect()->back()->with('notification', $notification);
    }
}
