<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\PageSection;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\GD\Driver;

class PageSectionController extends Controller
{
    public function index($id)
    {
        $page = Page::find($id);
        $pageSections = PageSection::where('page_id', $id)->get();
        return view('admin.page-section.index', compact('pageSections', 'page'));
    }

    public function add($id)
    {
        $page = Page::find($id);
        return view('admin.page-section.add', compact('page'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title.en' => 'required|string|max:255',
            'title.ar' => 'required|string|max:255',
            'subtitle.en' => 'required|string|max:255',
            'subtitle.ar' => 'required|string|max:255',
            'page_id' => 'required|integer',
            'image' => 'required|max:2048',
            'order_no' => 'required|integer',
            'type' => 'required',
            'description.en' => 'required',
            'description.ar' => 'required',
        ]);
        $pageSection = new pageSection();
        $pageSection->title = $request->title;
        $pageSection->subtitle = $request->subtitle;
        $pageSection->page_id = $request->page_id;
        $pageSection->order_no = $request->order_no;
        $pageSection->type = $request->type;
        $pageSection->description = $request->description;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $image = time() . rand() . '.' . $extension;
            $file->move('assets/admin/uploads/PageSection/thumb/', $image);
            $imgManager = new ImageManager(new Driver());
            $thumb_icon = $imgManager->read('assets/admin/uploads/PageSection/thumb/' . $image);
            $thumb_icon->cover(600, 600);
            $thumb_icon->save(public_path('assets/admin/uploads/PageSection/' . $image));
            @unlink('assets/admin/uploads/PageSection/thumb/' . $image);
            $pageSection->image = 'assets/admin/uploads/PageSection/' . $image;
        }
        // Set translations like this:
        $pageSection->setTranslations('title', [
            'en' => $request->input('title.en'),
            'ar' => $request->input('title.ar')
        ]);
        // If you also want to set subtitle, title, description — same way.
        $pageSection->setTranslations('subtitle', [
            'en' => $request->input('subtitle.en'),
            'ar' => $request->input('subtitle.ar')
        ]);
        $pageSection->setTranslations('description', [
            'en' => $request->input('description.en'),
            'ar' => $request->input('description.ar')
        ]);
        $pageSection->save();
        $notification = array(
            'message' => 'Page Section Added Successfully!',
            'alert' => 'success',
        );
        return redirect()->route('admin.page.section.index', ['id' => $pageSection->page_id])->with('notification', $notification);
    }

    public function edit($id)
    {
        $pageSection = PageSection::findOrFail($id);
        return view('admin.Page-section.edit', compact('pageSection'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title.en' => 'required|string|max:255',
            'title.ar' => 'required|string|max:255',
            'subtitle.en' => 'required|string|max:255',
            'subtitle.ar' => 'required|string|max:255',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif|max:2048',
            'order_no' => 'required|integer',
            'type' => 'required',
            'description.en' => 'required',
            'description.ar' => 'required',
        ]);
        $pageSection = PageSection::find($id);
        $pageSection->title = $request->title;
        $pageSection->subtitle = $request->subtitle;
        $pageSection->order_no = $request->order_no;
        $pageSection->type = $request->type;
        $pageSection->description = $request->description;
        if ($request->hasFile('image')) {
            @unlink('assets/admin/uploads/PageSection/' . $pageSection->image);
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $image = time() . rand() . '.' . $extension;
            $file->move('assets/admin/uploads/PageSection/thumb/', $image);
            $imgManager = new ImageManager(new Driver());
            $thumb_icon = $imgManager->read('assets/admin/uploads/PageSection/thumb/' . $image);
            $thumb_icon->cover(600, 600);
            $thumb_icon->save(public_path('assets/admin/uploads/PageSection/' . $image));
            @unlink('assets/admin/uploads/PageSection/thumb/' . $image);
            $pageSection->image = 'assets/admin/uploads/PageSection/' . $image;
        }
        $pageSection->save();
        $notification = array(
            'message' => 'Page Section Updated Successfully!',
            'alert' => 'success',
        );

        return redirect()->route('admin.page.section.index', $pageSection->page_id)->with('notification', $notification);
    }

    public function delete($id)
    {
        $pageSection = PageSection::find($id);
        @unlink($pageSection->image);
        $pageSection->delete();
        $notification = array(
            'message' => 'Page Section Deleted Successfully!',
            'alert' => 'success',
        );
        return back()->with('notification', $notification);
    }
}