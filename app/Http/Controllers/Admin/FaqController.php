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
    public function create(Request $request)
    {
        $group = Group::find($request->id);
        return view('admin.faq.add', compact("group"));
    }
    // public function index()
    // {
    //     $groups = Group::where('type', 'faq')->get();
    //     return view('admin.faq.index', compact('groups'));
    // }

   

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'group_id' => 'required|exists:groups,id',
    //         'question.en' => 'required|string',
    //         'question.ar' => 'required|string',
    //         'answer.en' => 'required|string',
    //         'answer.ar' => 'required|string',
    //         'status' => 'required',
    //         'order_no' => 'required',
    //     ]);

    //     $faq = new Faq();
    //     $faq->group_id = $request->group_id;

    //     $faq->question = json_encode([
    //         'en' => $request->question['en'],
    //         'ar' => $request->question['ar']
    //     ]);

    //     $faq->answer = json_encode([
    //         'en' => $request->answer['en'],
    //         'ar' => $request->answer['ar']
    //     ]);

    //     $faq->order_no = $request->order_no;
    //     $faq->status = $request->status;

    //     $faq->save();

    //     $notification = array(
    //         'message' => 'FAQ added successfully',
    //         'alert' => 'success',
    //     );

    //     return redirect()->route('admin.faq.list', $faq->group_id)->with('notification', $notification);
    // }

    // public function edit(Faq $faq)
    // {
    //     return view('admin.faq.edit', compact('faq'));
    // }

    // public function update(Request $request, Faq $faq)
    // {
    //     $request->validate([
    //         'question.en' => 'required|string',
    //         'question.ar' => 'required|string',
    //         'answer.en' => 'required|string',
    //         'answer.ar' => 'required|string',
    //         'status' => 'required',
    //         'order_no' => 'required',
    //     ]);

    //     $faq->question = json_encode([
    //         'en' => $request->question['en'],
    //         'ar' => $request->question['ar']
    //     ]);

    //     $faq->answer = json_encode([
    //         'en' => $request->answer['en'],
    //         'ar' => $request->answer['ar']
    //     ]);

    //     $faq->order_no = $request->order_no;
    //     $faq->status = $request->status;

    //     $faq->save();


    //     $notification = array(
    //         'message' => 'FAQ Updated successfully',
    //         'alert' => 'success',
    //     );

    //     return redirect()->route('admin.faq.list', $faq->group_id)->with('notification', $notification);
    // }

    // public function destroy(Faq $faq)
    // {
    //     $faq->delete();
    //     $notification = array(
    //         'message' => 'FAQ Deleted successfully',
    //         'alert' => 'success',
    //     );

    //     return redirect()->back()->with('notification', $notification);
    // }



    public function index()
{
    $faqs = Faq::orderBy('order_no')->get();
    
    return response()->json([
        'data' => $faqs
    ]);
}

public function store(Request $request)
{
    $request->validate([
        'page_id' => 'required|exists:pages,id',
        'question.en' => 'required|string',
        'question.ar' => 'required|string',
        'answer.en' => 'required|string',
        'answer.ar' => 'required|string',
        'order_no' => 'nullable|integer|min:0',
        'status' => 'required|in:active,inactive',
    ]);

    // Create new FAQ
    $faq = new Faq();
    $faq->page_id = $request->page_id;
    
    // Store multilingual fields
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

    // Return JSON response
    return response()->json([
        'success' => true,
        'faq' => $faq
    ]);
}

public function edit($id)
{
    $faq = Faq::findOrFail($id);
    
    return response()->json([
        'question' => json_decode($faq->question),
        'answer' => json_decode($faq->answer),
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
