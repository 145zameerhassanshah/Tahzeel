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

    public function index()
    {
        $section_titles = SectionTitle::all();
        $types = [
            'testimonial',
            'faq',
            'feature',
            'procedure',
            'why_choose_us',
            'document',
            'call_to_action'
        ];
        return response()->json([
            'data' => $section_titles,
            'types' => $types
        ]);
    }
    public function add($id)
    {
        $group = Group::find($id);
        return view('admin.section_title.add', compact('group'));
    }

    // Store Feature
    public function store(Request $request)
    {
        $request->validate([
            'page_id' => 'required|exists:groups,id',
            'section_title.en' => 'required|max:250',
            'section_status' => 'required',
        ]);
    
        $section_title = new SectionTitle();
    
        $section_title->page_id = $request->page_id;
    
        $section_title->title = json_encode($request->section_title, JSON_UNESCAPED_UNICODE);
        $section_title->subtitle = json_encode($request->section_subtitle, JSON_UNESCAPED_UNICODE);
    
        $section_title->status = $request->section_status;
        $section_title->type = $request->section_type;
    
        $section_title->save();
    
        return response()->json([
            'success' => true,
            'section_title' => $section_title
        ]);
    }
    
    

    // SectionTitle Delete
    public function delete($id)
    {

        $section_title = SectionTitle::find($id);
            
        $section_title->delete();

        return response()->json([
            'success' => true
        ]);
    }

    // SectionTitle Edit
    public function edit($id)
    {
        $section_title = SectionTitle::find($id);
    
        return response()->json([
            'title' => json_decode($section_title->title),
            'subtitle' => json_decode($section_title->subtitle),
            'description' => json_decode($section_title->description),
            'status' => $section_title->status,
            'images' => $section_title->images,
            'type' => $section_title->type,
        ]);
    }
    
    // Update SectionTitle
    public function update(Request $request, $id)
    {

        $request->validate([
            'section_title' => 'required|max:250',
            'section_status' => 'required',
        ]);

        $section_title = SectionTitle::find($id);

        $section_title->title = json_encode($request->section_title);
        $section_title->subtitle = json_encode($request->section_subtitle);

        $section_title->status = $request->section_status;
        $section_title->type = $request->section_type;

        $section_title->save();

        return response()->json([
            'data' => $section_title,
        ]);
    }
}
