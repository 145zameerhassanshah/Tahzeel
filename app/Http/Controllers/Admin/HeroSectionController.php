<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\HeroSection;
use Illuminate\Http\Request;

class HeroSectionController extends Controller
{
    public function list($id)
    {
        $hero_sections = HeroSection::where('group_id', $id)->get();
        return view('admin.hero_section.list', compact('hero_sections', 'id'));
    }

    public function index(Request $request)
    {
        $groups = Group::where('type', 'hero')->get();
        return view('admin.hero_section.index', compact('groups'));
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
            'group_id' => 'required|exists:groups,id',
            'title' => 'required|max:250',
            'status' => 'required',
        ]);

        $hero_section = new HeroSection();

        $hero_section->group_id = $request->group_id;

        $hero_section->title = json_encode([
            'en' => $request->title,
            'ar' => $request->title
        ]);

        $hero_section->subtitle = json_encode([
            'en' => $request->subtitle,
            'ar' => $request->subtitle
        ]);

        $hero_section->description = json_encode([
            'en' => $request->description,
            'ar' => $request->description
        ]);

        $hero_section->status = $request->status;

        if ($request->hasFile('background_image')) {
            $image = $request->file('background_image');
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/hero_section'), $filename);
            
            $hero_section->background_image = json_encode([
                'en' => $filename,
                'ar' => $filename
            ]);
        } else {
            $hero_section->background_image = json_encode([
                'en' => 'default.jpg',
                'ar' => 'default.jpg'
            ]);
        }

        $hero_section->save();


        $notification = array(
            'message' => 'HeroSection Added successfully!',
            'alert' => 'success'
        );
        return redirect()->route('admin.hero_section.list', ['id' => $hero_section->group_id])->with('notification', $notification);
    }

    // HeroSection Delete
    public function delete($id)
    {

        $hero_section = HeroSection::find($id);
        unlink(public_path('uploads/hero_section/' . $hero_section->image));
        $hero_section->delete();

        $notification = array(
            'message' => 'HeroSection Deleted successfully!',
            'alert' => 'success'
        );
        return redirect()->back()->with('notification', $notification);
    }

    // HeroSection Edit
    public function edit($id)
    {

        $hero_section = HeroSection::find($id);
        return view('admin.hero_section.edit', compact('hero_section'));
    }

    // Update HeroSection
    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => 'required|max:250',
            'status' => 'required',
        ]);

        $hero_section = HeroSection::find($id);

        $hero_section->title = json_encode([
            'en' => $request->title,
            'ar' => $request->title
        ]);

        $hero_section->subtitle = json_encode([
            'en' => $request->subtitle,
            'ar' => $request->subtitle
        ]);

        $hero_section->description = json_encode([
            'en' => $request->description,
            'ar' => $request->description
        ]);

        $hero_section->status = $request->status;

        if ($request->hasFile('background_image')) {
            unlink(public_path('uploads/hero_section/' . $hero_section->image));
            $image = $request->file('background_image');
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/hero_section'), $filename);
            $hero_section->background_image = $filename ;
        }

        $hero_section->save();


        $notification = array(
            'message' => 'HeroSection Updated successfully!',
            'alert' => 'success'
        );
        return redirect()->route('admin.hero_section.list', ['id' => $hero_section->group_id])->with('notification', $notification);
    }
}
