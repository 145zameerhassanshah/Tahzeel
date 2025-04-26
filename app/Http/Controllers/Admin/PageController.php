<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\IntroductionSection;
use App\Models\HeroSection;
use App\Models\Feature;
use App\Models\Faq;
use App\Models\Group;
use App\Models\Page;
use App\Models\PageGroup;
use App\Models\Testimonial;

class PageController extends Controller
{
    public function pagelist()
    {
        $pages = Page::all();
        return view('admin.page.list', compact('pages'));
    }

    public function detail($id, $slug)
    {
        $page = Page::where('slug', $slug)->first();
        $testimonials = Testimonial::where('page_id', $page->id)->get();
        $intro_types = ['single_image', 'double_image', 'tripple_image'];
        $section_types = [
            'testimonial',
            'faq',
            'feature',
            'procedure',
            'why_choose_us',
            'document',
            'call_to_action',
            'feature_image',
            'hero_section',
            'intro_section',
            'why_us_image'
        ];
        return view('admin.page.detail', compact('page', 'testimonials', 'intro_types', 'section_types'));
    }


    // Page Crud Functions:-
    public function add()
    {
        return view('admin.pages.add');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title.en' => 'required|string|max:255',
            'title.ar' => 'required|string|max:255',
            'description.en' => 'nullable|string',
            'description.ar' => 'nullable|string',
            'hero_title.en' => 'nullable|string',
            'hero_title.ar' => 'nullable|string',
            'hero_sub_title.en' => 'nullable|string',
            'hero_sub_title.ar' => 'nullable|string',
            'hero_description.en' => 'nullable|string',
            'hero_description.ar' => 'nullable|string',
            // 'meta_tags' => 'nullable|string',
            'route_name' => 'nullable|string',
            'meta_title' => 'nullable|string',
            'order_no' => 'integer',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
            'slug' => 'required|unique:pages,slug',
            'status' => 'required|in:draft,published',
            'type' => 'required',
            'page_link_for' => 'required|in:header,footer,services,none',
            'hero_image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $page = new Page();

        if ($request->hasFile('hero_image')) {
            $file = $request->file('hero_image');
            $image = time() . rand() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/admin/img'), $image);
            $page->hero_image = $image;
        }

        $page->slug = $request->slug;
        $page->status = $request->status;
        $page->type = $request->type;
        $page->route_name = $request->route_name;
        // $page->page_link_for = $request->page_link_for;
        $page->page_link_for = $request->page_link_for ?? 'none';
        $page->order_no = $request->order_no ?? 0;
        $page->meta_title = $request->meta_title;
        $page->meta_description = $request->meta_description;
        $page->meta_keywords = $request->meta_keywords;

        // Set translations like this:
        $page->setTranslations('title', [
            'en' => $request->input('title.en'),
            'ar' => $request->input('title.ar')
        ]);

        $page->setTranslations('description', [
            'en' => $request->input('description.en'),
            'ar' => $request->input('description.ar')
        ]);

        // If you also want to set hero_title, hero_sub_title, hero_description — same way.
        $page->setTranslations('hero_title', [
            'en' => $request->input('hero_title.en'),
            'ar' => $request->input('hero_title.ar')
        ]);

        $page->setTranslations('hero_sub_title', [
            'en' => $request->input('hero_sub_title.en'),
            'ar' => $request->input('hero_sub_title.ar')
        ]);

        $page->setTranslations('hero_description', [
            'en' => $request->input('hero_description.en'),
            'ar' => $request->input('hero_description.ar')
        ]);
        // $page->setTranslations('meta_tags', [
        //     'en' => $request->input('meta_tags.en'),
        //     'ar' => $request->input('meta_tags.ar')
        // ]);
        $page->save();
        return redirect()->route('admin.page.index')->with('success', 'Page created successfully.');
    }


    // Page Delete
    public function delete($id)
    {
        $page = Page::findOrFail($id);
        @unlink(public_path('assets/admin/img/' . $page->hero_image));
        $page->delete();
        return redirect()->route('admin.page.index')->with('success', 'Page deleted successfully!');
    }

    // Page Edit
    public function edit($id)
    {
        $page = Page::findOrFail($id);
        return view('admin.pages.edit', compact('page'));
    }

    // Page Update
    public function update(Request $request, $id)
    {
        $page = Page::findOrFail($id);
        $request->validate([
            'title.en' => 'required|string|max:255',
            'title.ar' => 'required|string|max:255',
            'description.en' => 'nullable|string',
            'description.ar' => 'nullable|string',
            'hero_title.en' => 'nullable|string',
            'hero_title.ar' => 'nullable|string',
            'hero_sub_title.en' => 'nullable|string',
            'hero_sub_title.ar' => 'nullable|string',
            'hero_description.en' => 'nullable|string',
            'hero_description.ar' => 'nullable|string',
            // 'meta_tags' => 'nullable|string',
            'route_name' => 'nullable|string',
            'meta_title' => 'nullable|string',
            'order_no' => 'integer',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
            'slug' => 'required',
            'status' => 'required|in:draft,published',
            'type' => 'required',
            'page_link_for' => 'required|in:header,footer,services,none',
            'hero_image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);


        $page->slug = $request->slug;
        $page->status = $request->status;
        $page->type = $request->type;
        $page->route_name = $request->route_name;
        // $page->page_link_for = $request->page_link_for;
        $page->page_link_for = $request->page_link_for ?? 'none';
        $page->order_no = $request->order_no ?? 0;
        $page->meta_title = $request->meta_title;
        $page->meta_description = $request->meta_description;
        $page->meta_keywords = $request->meta_keywords;

        // Set translations like this:
        $page->setTranslations('title', [
            'en' => $request->input('title.en'),
            'ar' => $request->input('title.ar')
        ]);

        $page->setTranslations('description', [
            'en' => $request->input('description.en'),
            'ar' => $request->input('description.ar')
        ]);

        // If you also want to set hero_title, hero_sub_title, hero_description — same way.
        $page->setTranslations('hero_title', [
            'en' => $request->input('hero_title.en'),
            'ar' => $request->input('hero_title.ar')
        ]);

        $page->setTranslations('hero_sub_title', [
            'en' => $request->input('hero_sub_title.en'),
            'ar' => $request->input('hero_sub_title.ar')
        ]);

        $page->setTranslations('hero_description', [
            'en' => $request->input('hero_description.en'),
            'ar' => $request->input('hero_description.ar')
        ]);
        // $page->setTranslations('meta_tags', [
        //     'en' => $request->input('meta_tags.en'),
        //     'ar' => $request->input('meta_tags.ar')
        // ]);



        $slug = Str::slug($request->slug);
        if ($request->hasFile('hero_image')) {
            @unlink(public_path('assets/admin/img/' . $page->hero_image)); // Remove the old image
            $file = $request->file('hero_image');
            $image = time() . rand() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/admin/img'), $image);
            $page->hero_image = $image;
        }


        $page->save();
        return redirect()->route('admin.page.index')->with('success', 'Page updated successfully!');
    }

}
