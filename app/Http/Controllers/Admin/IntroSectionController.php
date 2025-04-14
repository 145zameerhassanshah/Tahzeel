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
        $request->validate([
            'page_id' => 'required|exists:groups,id',
            'intro_title.en' => 'required|max:250',
            'intro_status' => 'required',
        ]);
        $typeLimits = [
            'single_image'  => 1,
            'double_image'  => 2,
            'tripple_image' => 3,
        ];
        $maxFiles = $typeLimits[$request->type] ?? 1;
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
            if (count($uploadedImages) > $maxFiles) {
                return response()->json(['images' => "You can upload a maximum of $maxFiles images for {$request->type}."]);
            }
            foreach ($uploadedImages as $image) {
                $filename = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('uploads/introduction_section'), $filename);
                $imagePaths[] = 'uploads/introduction_section/' . $filename;
            }
        }
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
        $imagePath = public_path('uploads/intro_section/' . $intro_section->images);

        if (file_exists($imagePath) && is_file($imagePath)) {
            unlink($imagePath);
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

        $request->validate([
            'intro_title' => 'required|max:250',
            'intro_status' => 'required',
        ]);

        $typeLimits = [
            'single_image'  => 1,
            'double_image'  => 2,
            'tripple_image' => 3,
        ];

        $maxFiles = $typeLimits[$request->type] ?? 1;

        $intro_section = IntroductionSection::find($id);

        $intro_section->title = json_encode($request->intro_title);
        $intro_section->subtitle = json_encode($request->intro_subtitle);
        $intro_section->description = json_encode($request->intro_description);

        $intro_section->status = $request->intro_status;
        $intro_section->type = $request->intro_type;

        $imagePaths = [];

        if ($request->hasFile('images')) {

            if ($intro_section->image && file_exists(public_path($intro_section->image))) {
                unlink(public_path('uploads/introduction/' . $intro_section->image));
            }

            $uploadedImages = $request->file('images');

            if (!is_array($uploadedImages)) {
                $uploadedImages = [$uploadedImages];
            }

            if (count($uploadedImages) > $maxFiles) {
                return back()->withErrors(['images' => "You can upload a maximum of $maxFiles images for {$request->type}."])->withInput();
            }

            foreach ($uploadedImages as $image) {
                $filename = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('uploads/introduction_section'), $filename);
                $imagePaths[] = 'uploads/introduction_section/' . $filename;
            }
        }


        $intro_section->save();

        return response()->json([
            'data' => $intro_section,
        ]);
    }
}
