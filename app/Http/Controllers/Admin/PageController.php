<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\Feature;
use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\HeroSection;
use App\Models\IntroductionSection;
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

    // public function detail($slug)
    // {
    //     $page = Page::where('slug',$slug)->first();
    //     $testimonials = Testimonial::where('page_id', $page->id)->get();
    //     $intro_types = ['single_image', 'double_image', 'tripple_image'];
    //     $section_types = [
    //         'testimonial',
    //         'faq',
    //         'feature',
    //         'procedure',
    //         'why_choose_us',
    //         'document',
    //         'call_to_action'
    //     ];
    //     return view('admin.page.detail', compact('page','testimonials', 'intro_types', 'section_types'));
    // }
    public function detail($id, $slug)
    {
        $page = Page::where('id', $id)->where('slug', $slug)->firstOrFail();

        $testimonials = Testimonial::where('page_id', $page->id)->get();
        $heroSection = HeroSection::where('page_id', $page->id)->first();
        $introSection = IntroductionSection::where('page_id', $page->id)->first();
        $faq = Faq::where('page_id', $page->id)->get();
        $features = Feature::where('page_id', $page->id)->get();
        $intro_types = ['single_image', 'double_image', 'tripple_image'];
        $section_types = [
            'testimonial',
            'faq',
            'feature',
            'procedure',
            'why_choose_us',
            'document',
            'call_to_action'
        ];

        return view('admin.page.detail', compact(
            'page',
            'testimonials',
            'heroSection',
            'introSection',
            'faq',
            'features',
            'intro_types',
            'section_types'
        ));
    }


    public function addGroupstoPage($id)
    {
        $page = Page::findOrFail($id);
        $groups = Group::all();

        $pagegroups = PageGroup::with('group')->where('page_id', $id)->get();


        return view('admin.page.add-groups', compact('page', 'groups', 'pagegroups'));
    }

    public function storeGroupstoPage(Request $request)
    {


        $request->validate([
            'group_id' => 'required|exists:groups,id',
            'page_id' => 'required|exists:groups,id',
            'order_no' => 'required',
            'status' => 'required',
        ]);

        $group = Group::find($request->group_id);

        $pagegroup = new PageGroup();

        $pagegroup->group_id = $group->id;
        $pagegroup->group_type = $group->type;
        $pagegroup->page_id = $request->page_id;
        $pagegroup->order_no = $request->order_no;
        $pagegroup->status = $request->status;
        $pagegroup->save();

        $notification = array(
            'message' => 'Group Has been Added successfully!',
            'alert' => 'success'
        );
        return redirect()->back()->with('notification', $notification);
    }

    public function deletePageGroup($id)
    {

        $pageGroup = PageGroup::find($id);
        $pageGroup->delete();

        $notification = array(
            'message' => 'Group Deleted successfully!',
            'alert' => 'success'
        );
        return redirect()->back()->with('notification', $notification);
    }
}
