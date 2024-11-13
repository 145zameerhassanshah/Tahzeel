<?php

namespace App\Http\Controllers\Admin;

use App\Models\Faq;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::all();
        return view('admin.faq.index', compact('faqs'));
    }

    public function create()
    {
        $pages = DB::table("pages")->get();
        return view('admin.faq.add', compact("pages"));
    }

    public function store(Request $request)
    {

        $request->validate([
            'page_id' => 'nullable|integer',
            'question.en' => 'required|string',
            'question.ar' => 'required|string',
            'ans.en' => 'required|string',
            'ans.ar' => 'required|string',
        ]);

        $faq = new Faq();
        $faq->page_id = $request->input('page_id');
        $faq->setTranslations('question', $request->input('question'));
        $faq->setTranslations('ans', $request->input('ans'));
        $faq->save();
        $notification = array(
            'message' => 'FAQ added successfully',
            'alert' => 'success',
        );

        return redirect()->route('faqs.index')->with('notification', $notification);
    }

    public function edit(Faq $faq)
    {
        $pages = DB::table("pages")->get();
        return view('admin.faq.edit', compact('faq', 'pages'));
    }

    public function update(Request $request, Faq $faq)
    {
        $request->validate([
            'page_id' => 'nullable|integer',
            'question.en' => 'required|string',
            'question.ar' => 'required|string',
            'ans.en' => 'required|string',
            'ans.ar' => 'required|string',
        ]);

        $faq->page_id = $request->input('page_id');
        $faq->setTranslations('question', $request->input('question'));
        $faq->setTranslations('ans', $request->input('ans'));
        $faq->save();


        $notification = array(
            'message' => 'FAQ Updated successfully',
            'alert' => 'success',
        );

        return redirect()->route('faqs.index')->with('notification', $notification);
    }

    public function destroy(Faq $faq)
    {
        $faq->delete();
        $notification = array(
            'message' => 'FAQ Deleted successfully',
            'alert' => 'success',
        );

        return redirect()->route('faqs.index')->with('notification', $notification);
    }
}
