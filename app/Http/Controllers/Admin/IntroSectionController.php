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
            'single_image' => 1,
            'double_image' => 2,
            'tripple_image' => 3,
        ];
        $maxFiles = $typeLimits[$request->intro_type] ?? 1;
        $request->validate([
            'page_id' => 'required|exists:groups,id',
            'intro_title.en' => 'required|max:250',
            'intro_status' => 'required',
            'images' => 'required|array|max:' . $maxFiles,
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $intro_section = new IntroductionSection();
        $intro_section->page_id = $request->page_id;
        $intro_section->title = json_encode($request->intro_title, JSON_UNESCAPED_UNICODE);
        $intro_section->subtitle = json_encode($request->intro_subtitle, JSON_UNESCAPED_UNICODE);
        $intro_section->description = json_encode($request->intro_description, JSON_UNESCAPED_UNICODE);
        $intro_section->status = $request->intro_status;
        $intro_section->type = $request->intro_type;
        $imagePaths = [];
        if ($request->hasFile('images')) {
            $uploadedImages = $request->file('images');
            if (!is_array($uploadedImages)) {
                $uploadedImages = [$uploadedImages];
            }
            // Validate number of uploaded files
            if (count($uploadedImages) > $maxFiles) {
                return response()->json(['images' => "You can upload a maximum of $maxFiles images for {$request->intro_type}."]);
            }
            foreach ($uploadedImages as $image) {
                $filename = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('uploads/introduction_section'), $filename);
                $imagePaths[] = 'uploads/introduction_section/' . $filename;
            }
        }
        $intro_section->images = json_encode($imagePaths); // Store image paths
        $intro_section->save();
        return response()->json([
            'success' => true,
            'introsection' => $intro_section
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
        $intro_section = IntroductionSection::find($id);
        return response()->json([
            'title' => json_decode($intro_section->title),
            'subtitle' => json_decode($intro_section->subtitle),
            'description' => json_decode($intro_section->description),
            'status' => $intro_section->status,
            'images' => $intro_section->images,
            'type' => $intro_section->type,
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
        $maxFiles = $typeLimits[$request->intro_type] ?? 1;
        $request->validate([
            'intro_title' => 'required|max:250',
            'intro_status' => 'required',
            'images' => 'nullable|array|max:' . $maxFiles,
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $intro_section = IntroductionSection::findOrFail($id); // Update text fields
        $intro_section->title = json_encode($request->intro_title, JSON_UNESCAPED_UNICODE);
        $intro_section->subtitle = json_encode($request->intro_subtitle, JSON_UNESCAPED_UNICODE);
        $intro_section->description = json_encode($request->intro_description, JSON_UNESCAPED_UNICODE);
        $intro_section->status = $request->intro_status;
        $intro_section->type = $request->intro_type; // Handle image update
        if ($request->hasFile('images')) {
            // Delete old images (optional)
            if ($intro_section->images) {
                $oldImages = json_decode($intro_section->images, true);
                foreach ($oldImages as $oldImagePath) {
                    $fullPath = public_path($oldImagePath);
                    if (file_exists($fullPath) && is_file($fullPath)) {
                        unlink($fullPath);
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
            'data' => $intro_section
        ]);
    }
}
