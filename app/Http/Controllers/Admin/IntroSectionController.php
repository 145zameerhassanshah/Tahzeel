<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\IntroductionSection;

class IntroSectionController extends Controller
{
    public function index()
    {
        $intro_sections = IntroductionSection::all();
        $types = ['single_image', 'double_image', 'tripple_image'];
        return response()->json([
            'data' => $intro_sections,
            'types' => $types
        ]);
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

    public function add($id)
    {
        $group = Group::find($id);
        return view('admin.intro_section.add', compact('group'));
    }

    // Store Feature
    public function store(Request $request)
    {
        $typeLimits = [
            'single_image'  => 1,
            'double_image'  => 2,
            'tripple_image' => 3,
        ];
        $request->validate([
            'page_id' => 'required|exists:pages,id',
            'title.en' => 'required|max:250',
            'title.ar' => 'required|max:250',
            'subtitle.en' => 'required|max:250',
            'subtitle.ar' => 'required|max:250',
            'description.en' => 'required|max:250',
            'description.ar' => 'required|max:250',
            'status' => 'required|in:active,inactive',
            'type' => 'required|in:single_image,double_image,tripple_image',
            'images' => 'required|array',
            'images.*' => 'image|max:3000',
        ]);
        $intro_section = new IntroductionSection();
        $intro_section->page_id = $request->page_id;
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
        $intro_section->type = $request->type;
        $imagePaths = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads/introduction_section'), $filename);
                $imagePaths[] = 'uploads/introduction_section/' . $filename;
            }
        }
        $intro_section->images = json_encode($imagePaths);
        $intro_section->save();
        return response()->json([
            'success' => true,
            'introsection' => $intro_section,
        ]);
    }

    // IntroductionSection Delete
    public function delete($id)
    {
        $intro_section = IntroductionSection::find($id);
        // Decode images JSON to array
        if ($intro_section && $intro_section->images) {
            $images = json_decode($intro_section->images, true);
            if (is_array($images)) {
                foreach ($images as $imagePath) {
                    $fullPath = public_path($imagePath);
                    if (file_exists($fullPath) && is_file($fullPath)) {
                        unlink($fullPath);
                    }
                }
            }
        }
        $intro_section->delete();
        return response()->json([
            'success' => true
        ]);
    }

    // IntroductionSection Edit
    public function edit($id)
    {
        $intro_section = IntroductionSection::findOrFail($id);
        return response()->json([
            'title'       => $intro_section->getTranslations('title'),
            'subtitle'    => $intro_section->getTranslations('subtitle'),
            'description' => $intro_section->getTranslations('description'),
            'status'      => $intro_section->status,
            'images'      => json_decode($intro_section->images),
            'type'        => $intro_section->type,
            'page_id'     => $intro_section->page_id,
        ]);
    }


    // Update IntroductionSection
    public function update(Request $request, $id)
    {
        $typeLimits = [
            'single_image'  => 1,
            'double_image'  => 2,
            'tripple_image' => 3,
        ];
        $request->validate([
            'title.en' => 'required|max:250',
            'title.ar' => 'required|max:250',
            'subtitle.en' => 'required|max:250',
            'subtitle.ar' => 'required|max:250',
            'description.en' => 'required|max:250',
            'description.ar' => 'required|max:250',
            'status' => 'required|in:active,inactive',
            'type' => 'required|in:single_image,double_image,tripple_image',
            'images' => 'required|array',
            'images.*' => 'image|max:3000',
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
        $intro_section->type = $request->type;
        if ($request->hasFile('images')) {
            if ($intro_section->images) {
                $oldImages = json_decode($intro_section->images, true);
                foreach ($oldImages as $oldImagePath) {
                    $fullPath = public_path($oldImagePath);
                    if (file_exists($fullPath)) {
                        @unlink($fullPath);
                    }
                }
            }
            $imagePaths = [];
            foreach ($request->file('images') as $image) {
                $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads/introduction_section'), $filename);
                $imagePaths[] = 'uploads/introduction_section/' . $filename;
            }
            $intro_section->images = json_encode($imagePaths);
        }
        $intro_section->save();
        return response()->json([
            'success' => true,
            'data' => $intro_section,
        ]);
    }
}
