<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\SectionTitle;
use Illuminate\Http\Request;

class SectionTitleController extends Controller
{
    public function list($id)
    {
        $section_titles = SectionTitle::where('group_id', $id)->get();
        return view('admin.section_title.list', compact('section_titles', 'id'));
    }

    public function index(Request $request)
    {
        $groups = Group::where('type', 'section_title')->get();
        return view('admin.section_title.index', compact('groups'));
    }

    public function add($id)
    {
        $group = Group::find($id);
        $types = [
            'testimonial',
            'faq',
            'feature',
            'procedure',
            'why_choose_us',
            'document',
            'call_to_action'
        ];
        return view('admin.section_title.add', compact('group', 'types'));
    }

    // Store Feature
    public function store(Request $request)
    {
        $request->validate([
            'group_id' => 'required|exists:groups,id',
            'title' => 'required|max:250',
            'subtitle' => 'required|max:250',
            'status' => 'required',
        ]);

        $section_title = new SectionTitle();

        $section_title->group_id = $request->group_id;

        $section_title->title = json_encode([
            'en' => $request->title,
            'ar' => $request->title
        ]);

        $section_title->subtitle = json_encode([
            'en' => $request->subtitle,
            'ar' => $request->subtitle
        ]);

        $section_title->status = $request->status;
        $section_title->type = $request->type;

        $section_title->save();


        $notification = array(
            'message' => 'SectionTitle Added successfully!',
            'alert' => 'success'
        );
        return redirect()->route('admin.section_title.list', ['id' => $section_title->group_id])->with('notification', $notification);
    }

    // SectionTitle Delete
    public function delete($id)
    {

        $section_title = SectionTitle::find($id);
        $section_title->delete();

        $notification = array(
            'message' => 'Feature Deleted successfully!',
            'alert' => 'success'
        );
        return redirect()->back()->with('notification', $notification);
    }

    // SectionTitle Edit
    public function edit($id)
    {

        $section_title = SectionTitle::find($id);
        $types = [
            'testimonial',
            'faq',
            'feature',
            'procedure',
            'why_choose_us',
            'document',
            'call_to_action'
        ];
        return view('admin.section_title.edit', compact('section_title', 'types'));
    }

    // Update SectionTitle
    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => 'required|max:250',
            'subtitle' => 'required|max:250',
            'status' => 'required',
        ]);

        $section_title = SectionTitle::find($id);

        $section_title->title = json_encode([
            'en' => $request->title,
            'ar' => $request->title
        ]);

        $section_title->subtitle = json_encode([
            'en' => $request->subtitle,
            'ar' => $request->subtitle
        ]);

        $section_title->status = $request->status;
        $section_title->type = $request->type;

        $section_title->save();


        $notification = array(
            'message' => 'SectionTitle Updated successfully!',
            'alert' => 'success'
        );
        return redirect()->route('admin.section_title.list', ['id' => $section_title->group_id])->with('notification', $notification);
    }
}
