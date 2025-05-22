<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\{Group, Page};
use App\Models\SectionTitle;
use Illuminate\Http\Request;

class SectionTitleController extends Controller
{
    public function index($slug)
    {
        $page = Page::where('slug', $slug)->first();
        $section_titles = SectionTitle::where('page_id', $page->id)->get();
        return view('admin.page.partials.section_title_list', compact('section_titles', 'slug'));
    }

    public function add($slug)
    {
        $page = Page::where('slug', $slug)->first();
        $section_types = ['testimonial',
                'faq',
                'feature',
                'procedure',
                'why_choose_us',
                'document',
                'feature_image',
                'hero_section',
                'intro_section',
                'why_us_image',
                'call_to_action',
                'residency-visa'];
        return view('admin.page.partials.section_title_add', compact('slug', 'section_types'));
    }

    public function getByPageId($pageId)
    {
        $sectionTitles = SectionTitle::where('page_id', $pageId)->get();
        return response()->json(['data' => $sectionTitles]);
    }

    public function store(Request $request, $slug)
    {
        $request->validate([
            // 'page_id' => 'required|exists:pages,id',
            'section_title.en' => 'required|string|max:250',
            'section_title.ar' => 'required|string|max:250',
            'section_subtitle.en' => 'nullable|string|max:250',
            'section_subtitle.ar' => 'nullable|string|max:250',
            'section_description.en' => 'nullable|string|max:250',
            'section_description.ar' => 'nullable|string|max:250',
            'section_status' => 'required|in:active,inactive',
            'section_type' => 'required|string'
        ]);
        $page = Page::where('slug', $slug)->first();
        $sectionTitle = new SectionTitle();
        $sectionTitle->page_id = $page->id;
        $sectionTitle->setTranslations('title', [
            'en' => $request->section_title['en'],
            'ar' => $request->section_title['ar'],
        ]);
        $sectionTitle->setTranslations('subtitle', [
            'en' => $request->section_subtitle['en'],
            'ar' => $request->section_subtitle['ar'],
        ]);
        $sectionTitle->setTranslations('description', [
            'en' => $request->section_description['en'],
            'ar' => $request->section_description['ar'],
        ]);
        // if (isset($request->section_subtitle['en']) && isset($request->section_subtitle['ar'])) {
        //     $sectionTitle->setTranslations('subtitle', [
        //         'en' => $request->section_subtitle['en'],
        //         'ar' => $request->section_subtitle['ar'],
        //     ]);
        // }

        $sectionTitle->status = $request->section_status;
        $sectionTitle->type = $request->section_type;
        $sectionTitle->save();

        $notification = [
            'alert' => 'success',
            'message' => 'Section Title added Successfully!'
        ];
        return redirect()->route('admin.section_title.index', $slug)->with('notification', $notification);
    }


    public function edit($id)
    {
        $section_title = SectionTitle::find($id);
        $slug = $section_title->page->slug;
        $section_types = ['testimonial',
                'faq',
                'feature',
                'procedure',
                'why_choose_us',
                'document',
                'feature_image',
                'hero_section',
                'intro_section',
                'why_us_image',
                'call_to_action',
                'residency-visa'];
                // dd($section_title);
        return view('admin.page.partials.section_title_edit', compact('section_title', 'slug', 'section_types'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'section_title.en' => 'required|string|max:250',
            'section_title.ar' => 'required|string|max:250',
            'section_subtitle.en' => 'required|string|max:250',
            'section_subtitle.ar' => 'required|string|max:250',
            'section_status' => 'required|in:active,inactive',
            'section_type' => 'required|string'
        ]);
        $sectionTitle = SectionTitle::findOrFail($id);
        $sectionTitle->setTranslations('title', [
            'en' => $request->section_title['en'],
            'ar' => $request->section_title['ar'],
        ]);
        $sectionTitle->setTranslations('subtitle', [
            'en' => $request->section_subtitle['en'],
            'ar' => $request->section_subtitle['ar'],
        ]);
        $sectionTitle->setTranslations('description', [
            'en' => $request->section_description['en'],
            'ar' => $request->section_description['ar'],
        ]);
        $sectionTitle->status = $request->section_status;
        $sectionTitle->type = $request->section_type;
        $sectionTitle->save();

        $notification = [
            'alert' => 'success',
            'message' => 'Section Title updated Successfully!'
        ];
        return redirect()->route('admin.section_title.index', $sectionTitle->page->slug)->with('notification', $notification);
    }

    public function delete($id)
    {
        $sectionTitle = SectionTitle::findOrFail($id);
        $sectionTitle->delete();

        $notification = [
            'alert' => 'success',
            'message' => 'Section Title deleted Successfully!'
        ];

        return redirect()->back()->with('notification', $notification);
    }
}
