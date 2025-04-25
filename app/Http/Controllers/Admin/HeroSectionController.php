<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\HeroSection;
use Illuminate\Http\Request;

class HeroSectionController extends Controller
{
    public function index()
    {
        $hero_sections = HeroSection::all();
        return response()->json([
            'data' => $hero_sections
        ]);
    }

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

    public function list($id)
    {
        $hero_sections = HeroSection::where('group_id', $id)->get();
        return view('admin.hero_section.list', compact('hero_sections', 'id'));
    }


    public function add($id)
    {
        $group = Group::find($id);
        return view('admin.hero_section.add', compact('group'));
    }

    // Store Feature
    public function store(Request $request)
    {
        $request->validate([
            'page_id' => 'required|exists:groups,id',
            'title.en' => 'required|max:250',
            'status' => 'required',
        ]);
        $hero_section = new HeroSection();
        $hero_section->page_id = $request->page_id;
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
        return response()->json([
            'success' => true,
            'herosection' => $hero_section
        ]);
    }

    // HeroSection Edit
    public function edit($id)
    {
        $hero_section = HeroSection::find($id);

        return response()->json([
            'title' => json_decode($hero_section->title),
            'subtitle' => json_decode($hero_section->subtitle),
            'description' => json_decode($hero_section->description),
            'status' => $hero_section->status,
            'background_image' => $hero_section->background_image,
        ]);
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
        return response()->json([
            'data' => $hero_section,
        ]);
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
        return response()->json([
            'success' => true
        ]);
    }
}