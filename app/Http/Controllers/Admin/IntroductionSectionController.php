<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\IntroductionSection;
use Illuminate\Http\Request;

class IntroductionSectionController extends Controller
{
    public function list($id)
    {
        $introduction_sections = IntroductionSection::where('group_id', $id)->get();
        return view('admin.introduction_section.list', compact('introduction_sections', 'id'));
    }

    public function index(Request $request)
    {
        $groups = Group::where('type', 'intro_section')->get();
        return view('admin.introduction_section.index', compact('groups'));
    }

    public function add($id)
    {
        $group = Group::find($id);
        $types = ['single_image', 'double_image', 'tripple_image'];
        return view('admin.introduction_section.add', compact('group', 'types'));
    }

    // Store Feature
    public function store(Request $request)
    {
        $request->validate([
            'group_id'    => 'required|exists:groups,id',
            'title'       => 'required|max:250',
            'subtitle'    => 'required|max:250',
            'description' => 'required|max:250',
            'status'      => 'required',
            'type'        => 'required|in:single_image,double_image,tripple_image',
        ]);

        $typeLimits = [
            'single_image'  => 1,
            'double_image'  => 2,
            'tripple_image' => 3,
        ];

        $maxFiles = $typeLimits[$request->type] ?? 1;

        // Initialize model before checking for images
        $introduction_section = new IntroductionSection();
        $introduction_section->group_id = $request->group_id;
        $introduction_section->title = json_encode(['en' => $request->title, 'ar' => $request->title]);
        $introduction_section->subtitle = json_encode(['en' => $request->subtitle, 'ar' => $request->subtitle]);
        $introduction_section->description = json_encode(['en' => $request->description, 'ar' => $request->description]);
        $introduction_section->type = $request->type;
        $introduction_section->status = $request->status;

        // Handle image upload
        $imagePaths = [];

        if ($request->hasFile('images')) {
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

        // Store images as JSON (empty array if no images uploaded)
        $introduction_section->images = json_encode($imagePaths);
        $introduction_section->save();

        $notification = [
            'message' => 'Introduction Section Added successfully!',
            'alert'   => 'success'
        ];

        return redirect()->route('admin.introduction_section.list', ['id' => $introduction_section->group_id])
            ->with('notification', $notification);
    }


    // Feature Delete
    public function delete($id)
    {

        $introduction_section = IntroductionSection::find($id);
        if ($introduction_section->image && file_exists(public_path( $introduction_section->image))) {
            unlink(public_path('uploads/introduction/' . $introduction_section->image));
        }
        $introduction_section->delete();

        $notification = array(
            'message' => 'IntroductionSection Deleted successfully!',
            'alert' => 'success'
        );
        return redirect()->back()->with('notification', $notification);
    }

    // Feature Edit
    public function edit($id)
    {

        $introduction_section = IntroductionSection::find($id);
        $types = ['single_image', 'double_image', 'tripple_image'];
        return view('admin.introduction_section.edit', compact('introduction_section', 'types'));
    }

    // Update Feature
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'       => 'required|max:250',
            'subtitle'    => 'required|max:250',
            'description' => 'required|max:250',
            'status'      => 'required',
            'type'        => 'required|in:single_image,double_image,tripple_image',
        ]);

        $typeLimits = [
            'single_image'  => 1,
            'double_image'  => 2,
            'tripple_image' => 3,
        ];

        $maxFiles = $typeLimits[$request->type] ?? 1;

        $introduction_section = IntroductionSection::find($id);
        $introduction_section->title = json_encode(['en' => $request->title, 'ar' => $request->title]);
        $introduction_section->subtitle = json_encode(['en' => $request->subtitle, 'ar' => $request->subtitle]);
        $introduction_section->description = json_encode(['en' => $request->description, 'ar' => $request->description]);
        $introduction_section->type = $request->type;
        $introduction_section->status = $request->status;

        $imagePaths = [];

        if ($request->hasFile('images')) {

            if ($introduction_section->image && file_exists(public_path( $introduction_section->image))) {
                unlink(public_path('uploads/introduction/' . $introduction_section->image));
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

        $introduction_section->images = json_encode($imagePaths);
        $introduction_section->save();

        $notification = [
            'message' => 'Introduction Section Updated successfully!',
            'alert'   => 'success'
        ];

        return redirect()->route('admin.introduction_section.list', ['id' => $introduction_section->group_id])
            ->with('notification', $notification);
    }
}
