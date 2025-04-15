<?php

namespace App\Http\Controllers\Admin;

use App\Models\Faq;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Group;
use DB;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::orderBy('order_no')->get();
        return response()->json([
            'data' => $faqs
        ]);
    }

    public function getByPageId($pageId)
    {
        if (!is_numeric($pageId)) {
            return response()->json(['error' => 'Invalid page ID'], 400);
        }
        $faq = Faq::where('page_id', $pageId)->orderBy('id', 'DESC')->get();
        return response()->json([
            'data' => $faq
        ]);
    }

    public function list($id)
    {
        $faqs = Faq::where('group_id', $id)->get();
        $group = Group::find($id);
        return view('admin.faq.list', compact('faqs', 'id', 'group'));
    }

    public function create(Request $request)
    {
        $group = Group::find($request->id);
        return view('admin.faq.add', compact("group"));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'page_id' => 'required|exists:pages,id',
            'question.en' => 'required|string',
            'question.ar' => 'required|string',
            'answer.en' => 'required|string',
            'answer.ar' => 'required|string',
            'order_no' => 'nullable|integer|min:0',
            'status' => 'required|in:active,inactive',
        ]);
        // Create the FAQ
        $faq = Faq::create([
            'page_id' => $validated['page_id'],
            'question' => [
                'en' => $validated['question']['en'],
                'ar' => $validated['question']['ar']
            ],
            'answer' => [
                'en' => $validated['answer']['en'],
                'ar' => $validated['answer']['ar']
            ],
            'order_no' => $validated['order_no'] ?? 0,
            'status' => $validated['status']
        ]);
        $faq->order_no = $request->order_no ?? 0;
        $faq->status = $request->status;
        $faq->save();
        return response()->json([
            'success' => true,
            'message' => 'FAQ created successfully',
            'data' => $faq
        ]);
    }

    public function edit($id)
    {
        $faq = Faq::findOrFail($id);
        return response()->json([
            'question' => $faq->question,
            'answer' => $faq->answer,
            'order_no' => $faq->order_no,
            'status' => $faq->status,
            'page_id' => $faq->page_id
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'question.en' => 'required|string',
            'question.ar' => 'required|string',
            'answer.en' => 'required|string',
            'answer.ar' => 'required|string',
            'order_no' => 'nullable|integer|min:0',
            'status' => 'required|in:active,inactive',
        ]);
        $faq = Faq::findOrFail($id);
        // Update multilingual fields
        $faq->question = json_encode([
            'en' => $request->input('question.en'),
            'ar' => $request->input('question.ar')
        ], JSON_UNESCAPED_UNICODE);
        $faq->answer = json_encode([
            'en' => $request->input('answer.en'),
            'ar' => $request->input('answer.ar')
        ], JSON_UNESCAPED_UNICODE);
        $faq->order_no = $request->order_no ?? 0;
        $faq->status = $request->status;
        $faq->save();
        return response()->json([
            'success' => true,
            'faq' => $faq
        ]);
    }

    public function destroy($id)
    {
        $faq = Faq::findOrFail($id);
        $faq->delete();
        return response()->json([
            'success' => true,
            'message' => 'FAQ deleted successfully'
        ]);
    }
}
