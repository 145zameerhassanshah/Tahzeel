<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\{Group, Page};
use App\Models\HeroSection;
use Illuminate\Http\Request;

class HeroSectionController extends Controller
{

    public function getByPageId($pageId)
    {
        if (!is_numeric($pageId)) {
            return response()->json(['error' => 'Invalid page ID'], 400);
        }
        $heroSection = HeroSection::where('page_id', $pageId)->orderBy('id', 'DESC')->get();
        return response()->json([
            'data' => $heroSection
        ]);
    }

    public function index($slug)
    {
        $page = Page::where('slug', $slug)->first();
        $hero_sections = HeroSection::where('page_id', $page->id)->get();
        return view('admin.page.partials.hero_section_list', compact('hero_sections', 'slug'));
    }


    public function add($slug)
    {
        return view('admin.page.partials.hero_section_add', compact('slug'));
    }

    // Store Feature
    public function store(Request $request, $slug)
    {
        $request->validate([
            'title.en' => 'required|max:250',
            'status' => 'required',
        ]);
        $page = Page::where('slug', $slug)->first();
        $hero_section = new HeroSection();
        $hero_section->page_id = $page->id;
        // $hero_section->title = json_encode($request->title, JSON_UNESCAPED_UNICODE);
        $hero_section->setTranslations('title', [
            'en' => $request->title['en'],
            'ar' => $request->title['ar'],
        ]);
        $hero_section->setTranslations('subtitle', [
            'en' => $request->subtitle['en'],
            'ar' => $request->subtitle['ar'],
        ]);
        $hero_section->setTranslations('description', [
            'en' => $request->description['en'],
            'ar' => $request->description['ar'],
        ]);
        $hero_section->status = $request->status;
        if ($request->hasFile('background_image')) {
            $imageName = time() . '.' . $request->file('background_image')->extension();
            $request->file('background_image')->move(public_path('uploads/hero_section/'), $imageName);
            $hero_section->background_image = $imageName;
        }
        $hero_section->save();
        return redirect()->route('admin.hero_section.index', ['slug' => $page->slug])->with('notification', ['alert' => 'success', 'message' => 'Hero Section added Successfully!']);
    }

    // HeroSection Edit
    public function edit($id)
    {
        $hero_section = HeroSection::find($id);
        $slug = $hero_section->page->slug;
        return view('admin.page.partials.hero_section_edit', compact('hero_section', 'slug'));
    }

    // Update HeroSection
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:250',
            'status' => 'required',
        ]);
        $hero_section = HeroSection::find($id);
        $hero_section->setTranslations('title', [
            'en' => $request->title['en'],
            'ar' => $request->title['ar'],
        ]);
        $hero_section->setTranslations('subtitle', [
            'en' => $request->subtitle['en'],
            'ar' => $request->subtitle['ar'],
        ]);
        $hero_section->setTranslations('description', [
            'en' => $request->description['en'],
            'ar' => $request->description['ar'],
        ]);
        $hero_section->status = $request->status;
        if ($request->hasFile('background_image')) {
            $imagePath = public_path('uploads/hero_section/' . $hero_section->background_image);
            if (file_exists($imagePath) && is_file($imagePath)) {
                unlink($imagePath);
            }
            $image = $request->file('background_image');
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/hero_section'), $filename);
            $hero_section->background_image = $filename;
        }
        $hero_section->save();
        return redirect()->route('admin.hero_section.index', ['slug' => $hero_section->page->slug])->with('notification', ['alert' => 'success', 'message' => 'Hero Section updated Successfully!']);
    }

    // HeroSection Delete
    public function delete($id)
    {
        $hero_section = HeroSection::find($id);
        $imagePath = public_path('uploads/hero_section/' . $hero_section->background_image);
        if (file_exists($imagePath) && is_file($imagePath)) {
            unlink($imagePath);
        }
        $hero_section->delete();
        
        return redirect()->back()->with('notification', ['alert' => 'success', 'message' => 'Hero Section deleted Successfully!']);
    }
}