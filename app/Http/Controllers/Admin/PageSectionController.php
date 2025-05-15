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
        $page = Page::findOrFail($id);
        $pageSections = PageSection::where('page_id', $id)->get();
        return view('admin.page-section.index', compact('pageSections', 'page'));
    }

    public function add($id)
    {
        $page = Page::findOrFail($id);
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
            'image' => 'required|mimes:jpeg,png,jpg,gif|max:2048',
            'order_no' => 'required|integer',
            'type' => 'required',
            'description.en' => 'required',
            'description.ar' => 'required',
        ]);

        $pageSection = new PageSection();
        $pageSection->page_id = $request->page_id;
        $pageSection->order_no = $request->order_no;
        $pageSection->type = $request->type;

        // Handle Image Upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = time() . rand() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/admin/uploads/PageSection/thumb/'), $imageName);
            $pageSection->image = 'assets/admin/uploads/PageSection/thumb/' . $imageName;

        }

        // Set translations
        $pageSection->setTranslations('title', [
            'en' => $request->input('title.en'),
            'ar' => $request->input('title.ar')
        ]);
        $pageSection->setTranslations('subtitle', [
            'en' => $request->input('subtitle.en'),
            'ar' => $request->input('subtitle.ar')
        ]);
        $pageSection->setTranslations('description', [
            'en' => $request->input('description.en'),
            'ar' => $request->input('description.ar')
        ]);

        $pageSection->save();

        return redirect()->route('admin.page.section.index', $pageSection->page_id)
                         ->with('notification', [
                             'message' => 'Page Section Added Successfully!',
                             'alert' => 'success',
                         ]);
    }

    public function edit($id)
    {
        $pageSection = PageSection::findOrFail($id);
        return view('admin.page-section.edit', compact('pageSection'));
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
            'description.en' => 'string',
            'description.ar' => 'string',
        ]);

        $pageSection = PageSection::findOrFail($id);
        $pageSection->order_no = $request->order_no;
        $pageSection->type = $request->type;

        // Handle new image upload
        if ($request->hasFile('image')) {
            if ($pageSection->image && file_exists(public_path($pageSection->image))) {
                unlink(public_path($pageSection->image));
            }

            $file = $request->file('image');
            $imageName = time() . rand() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/admin/uploads/PageSection/thumb/'), $imageName);
            $pageSection->image = 'assets/admin/uploads/PageSection/thumb/' . $imageName;

            // Optional: use Intervention Image (uncomment if needed)
            /*
            $manager = ImageManager::withDriver(Driver::class);
            $image = $manager->read($file);
            $image->resize(800, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $image->save(public_path('assets/admin/uploads/PageSection/thumb/' . $imageName));
            $pageSection->image = 'assets/admin/uploads/PageSection/thumb/' . $imageName;
            */
        }

        // Update translations
        $pageSection->setTranslations('title', [
            'en' => $request->input('title.en'),
            'ar' => $request->input('title.ar')
        ]);
        $pageSection->setTranslations('subtitle', [
            'en' => $request->input('subtitle.en'),
            'ar' => $request->input('subtitle.ar')
        ]);
        $pageSection->setTranslations('description', [
            'en' => $request->input('description.en'),
            'ar' => $request->input('description.ar')
        ]);

        $pageSection->save();

        return redirect()->route('admin.page.section.index', $pageSection->page_id)
                         ->with('notification', [
                             'message' => 'Page Section Updated Successfully!',
                             'alert' => 'success',
                         ]);
    }

    public function delete($id)
    {
        $pageSection = PageSection::findOrFail($id);

        // Delete the image file
        if ($pageSection->image && file_exists(public_path($pageSection->image))) {
            unlink(public_path($pageSection->image));
        }

        $pageSection->delete();

        return back()->with('notification', [
            'message' => 'Page Section Deleted Successfully!',
            'alert' => 'success',
        ]);
    }
}
