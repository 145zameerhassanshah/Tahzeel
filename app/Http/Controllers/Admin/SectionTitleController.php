<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\SectionTitle;
use Illuminate\Http\Request;

class SectionTitleController extends Controller
{
    public function index()
    {
        $types = [
            'testimonial',
            'faq',
            'feature',
            'procedure',
            'why_choose_us',
            'document',
            'call_to_action'
        ];
        return view('admin.section_title.index', compact('types'));
    }

    public function getByPageId($pageId)
    {
        $sectionTitles = SectionTitle::where('page_id', $pageId)->get();
        return response()->json(['data' => $sectionTitles]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'page_id' => 'required|exists:pages,id',
            'section_title.en' => 'required|string|max:250',
            'section_title.ar' => 'required|string|max:250',
            'section_subtitle.en' => 'nullable|string|max:250',
            'section_subtitle.ar' => 'nullable|string|max:250',
            'section_status' => 'required|in:active,inactive',
            'section_type' => 'required|string'
        ]);
        $sectionTitle = new SectionTitle();
        $sectionTitle->page_id = $request->page_id;
        $sectionTitle->setTranslations('title', [
            'en' => $request->section_title['en'],
            'ar' => $request->section_title['ar'],
        ]);
        if (isset($request->section_subtitle['en']) && isset($request->section_subtitle['ar'])) {
            $sectionTitle->setTranslations('subtitle', [
                'en' => $request->section_subtitle['en'],
                'ar' => $request->section_subtitle['ar'],
            ]);
        }
        $sectionTitle->status = $request->section_status;
        $sectionTitle->type = $request->section_type;
        $sectionTitle->save();
        return response()->json(['success' => true, 'section_title' => $sectionTitle]);
    }


    public function edit($id)
    {
        $sectionTitle = SectionTitle::findOrFail($id);

        return response()->json([
            'title' => [
                'en' => $sectionTitle->getTranslation('title', 'en'),
                'ar' => $sectionTitle->getTranslation('title', 'ar'),
            ],
            'subtitle' => [
                'en' => $sectionTitle->getTranslation('subtitle', 'en'),
                'ar' => $sectionTitle->getTranslation('subtitle', 'ar'),
            ],
            'status' => $sectionTitle->status,
            'type' => $sectionTitle->type,
            'id' => $sectionTitle->id
        ]);
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
        $sectionTitle->status = $request->section_status;
        $sectionTitle->type = $request->section_type;
        $sectionTitle->save();

        return response()->json(['success' => true, 'section_title' => $sectionTitle]);
    }

    public function delete($id)
    {
        $sectionTitle = SectionTitle::findOrFail($id);
        $sectionTitle->delete();

        return response()->json(['success' => true]);
    }
}
