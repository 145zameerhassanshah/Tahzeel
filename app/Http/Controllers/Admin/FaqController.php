<?php

namespace App\Http\Controllers\Admin;

use DB;
use App\Models\Faq;
use App\Models\Page;
use App\Models\Group;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FaqController extends Controller
{
        public function list($id)
    {
        $faqs = Faq::where('group_id', $id)->get();
        return view('admin.faq.list', compact('faqs', 'id'));
    }

    public function index($slug)
    {
        $page = Page::where('slug',$slug)->first();
        $faqs = Faq::where('page_id', $page->id)->get();
        return view('admin.page.partials.faq_list', compact('faqs', 'slug'));
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


    public function add($slug)
    {
        return view('admin.page.partials.faq_add', compact('slug'));
    }

    public function store(Request $request, $slug)
    {
        $validated = $request->validate([
            'question.en' => 'required|string',
            'question.ar' => 'required|string',
            'answer.en' => 'required|string',
            'answer.ar' => 'required|string',
            'order_no' => 'nullable|integer|min:0',
            'status' => 'required|in:active,inactive',
        ]);

        // Create empty FAQ instance
        $faq = new Faq();
        $page = Page::where('slug', $slug)->first();
        $faq->page_id = $page->id;
        $faq->order_no = $validated['order_no'] ?? 0;
        $faq->status = $validated['status'];

        // Set translations AFTER object is instantiated
        $faq->setTranslations('question', [
            'en' => $request->input('question.en'),
            'ar' => $request->input('question.ar'),
        ]);
        $faq->setTranslations('answer', [
            'en' => $request->input('answer.en'),
            'ar' => $request->input('answer.ar'),
        ]);

        $faq->save();

        $notification = [
            'alert' => 'success', 
            'message' => 'WhyUsImage added Successfully!'
        ];
        return redirect()->route('admin.faq.index', ['slug' => $slug])->with('notification', $notification);
    }


    public function edit($id)
    {
        $faq = Faq::findOrFail($id);
        $slug = $faq->page->slug;
        return view('admin.page.partials.faq_edit', compact('faq', 'slug'));
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
        $faq->setTranslations('question', [
            'en' => $request->question['en'],
            'ar' => $request->question['ar'],
        ]);
        $faq->setTranslations('answer', [
            'en' => $request->answer['en'],
            'ar' => $request->answer['ar'],
        ]);
        $faq->order_no = $request->order_no ?? 0;
        $faq->status = $request->status;
        $faq->save();
        $notification = [
            'alert' => 'success', 
            'message' => 'Faq Updated Successfully!'
        ];
        return redirect()->route('admin.faq.index', ['slug' =>$faq->page->slug])->with('notification', $notification);
    }

    public function delete($id)
    {
        $faq = Faq::findOrFail($id);
        $faq->delete();
        $notification = [
            'alert' => 'success', 
            'message' => 'FAQ deleted Successfully!'
        ];
        return redirect()->back()->with('notification', $notification);
    }
}
