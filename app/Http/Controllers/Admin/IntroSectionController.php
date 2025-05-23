<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\IntroductionSection;

class IntroSectionController extends Controller
{
    public function index($slug)
    {
        $page = Page::where('slug', $slug)->first();
        $intro_sections = IntroductionSection::where('page_id', $page->id)->get();
        return view('admin.page.partials.introduction_section_list', compact('slug', 'intro_sections'));
    }

    public function list($id)
    {
        $intro_sections = IntroductionSection::where('group_id', $id)->get();
        return view('admin.intro_section.list', compact('intro_sections', 'id'));
    }


    public function getByPageId($pageId)
    {
        $introSection = IntroductionSection::where('page_id', $pageId)->get();
        return response()->json([
            'data' => $introSection
        ]);
    }

    public function add($slug)
    {
        return view('admin.page.partials.introduction_section_add', compact('slug'));
    }

    // Store Feature
    public function store(Request $request, $slug)
    {
        $request->validate([
            'title.en' => 'required|max:250',
            'title.ar' => 'required|max:250',
            'subtitle.en' => 'required|max:250',
            'subtitle.ar' => 'required|max:250',
            'description.en' => 'required|max:250',
            'description.ar' => 'required|max:250',
            'status' => 'required|in:active,inactive',
            'image' => 'required',
            'icon' => 'required',
        ]);
        $page = Page::where('slug', $slug)->first();
        $intro_section = new IntroductionSection();
        $intro_section->page_id = $page->id;
        $intro_section->setTranslations('title', [
            'en' => $request->title['en'],
            'ar' => $request->title['ar'],
        ]);
        $intro_section->setTranslations('subtitle', [
            'en' => $request->subtitle['en'],
            'ar' => $request->subtitle['ar'],
        ]);
        $intro_section->setTranslations('description', [
            'en' => $request->description['en'],
            'ar' => $request->description['ar'],
        ]);
        $intro_section->status = $request->status;
        if ($request->hasFile('image')) {
            $filename = time() . '_' . uniqid() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads/introduction_section'), $filename);
            $imagePath = 'uploads/introduction_section/' . $filename;
            $intro_section->images = $imagePath;
        }
        if ($request->hasFile('icon')) {
            $filename = time() . '_' . uniqid() . '.' . $request->icon->getClientOriginalExtension();
            $request->icon->move(public_path('uploads/introduction_section'), $filename);
            $iconPath = 'uploads/introduction_section/' . $filename;
            $intro_section->icon = $iconPath;
        }
        $intro_section->save();

        return redirect()->route('admin.introduction_section.index', ['slug' => $slug])->with('notification', ['alert' => 'success', 'message' => 'Introduction Section added Successfully!']);
    }

    // IntroductionSection Delete
    public function delete($id)
    {
        $intro_section = IntroductionSection::find($id);
        // Decode images JSON to array
        if ($intro_section->images && file_exists(public_path($intro_section->images))) {
            unlink(public_path($intro_section->images));
        }
        if ($intro_section->icon && file_exists(public_path($intro_section->icon))) {
            unlink(public_path($intro_section->icon));
        }
        $intro_section->delete();

        return redirect()->back()->with('notification', ['alert' => 'success', 'message' => 'Introduction Section deleted Successfully!']);
    }

    // IntroductionSection Edit
    public function edit($id)
    {
        $intro_section = IntroductionSection::find($id);
        // Decode images JSON to array
        $slug = $intro_section->page->slug;
        return view('admin.page.partials.introduction_section_edit', compact('intro_section', 'slug'));
    }


    // Update IntroductionSection
    public function update(Request $request, $id)
    {
        $request->validate([
            'title.en' => 'required|max:250',
            'title.ar' => 'required|max:250',
            'subtitle.en' => 'required|max:250',
            'subtitle.ar' => 'required|max:250',
            'description.en' => 'required|max:250',
            'description.ar' => 'required|max:250',
            'status' => 'required|in:active,inactive',
            'image' => 'required',
            'icon' => 'required',
        ]);
        $intro_section = IntroductionSection::findOrFail($id);
        $intro_section->setTranslations('title', [
            'en' => $request->title['en'],
            'ar' => $request->title['ar'],
        ]);
        $intro_section->setTranslations('subtitle', [
            'en' => $request->subtitle['en'],
            'ar' => $request->subtitle['ar'],
        ]);
        $intro_section->setTranslations('description', [
            'en' => $request->description['en'],
            'ar' => $request->description['ar'],
        ]);
        $intro_section->status = $request->status;
        if ($request->hasFile('image')) {
            unlink(public_path($intro_section->images));
            $filename = time() . '_' . uniqid() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads/introduction_section'), $filename);
            $imagePath = 'uploads/introduction_section/' . $filename;
            $intro_section->images = $imagePath;
        }
        if ($request->hasFile('icon')) {
            unlink(public_path($intro_section->icon));
            $filename = time() . '_' . uniqid() . '.' . $request->icon->getClientOriginalExtension();
            $request->icon->move(public_path('uploads/introduction_section'), $filename);
            $iconPath = 'uploads/introduction_section/' . $filename;
            $intro_section->icon = $iconPath;
        }
        $intro_section->save();

        return redirect()->route('admin.introduction_section.index', ['slug' => $intro_section->page->slug])->with('notification', ['alert' => 'success', 'message' => 'Introduction Section updated Successfully!']);
    }
}
