<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\Page;
use App\Models\PageGroup;

class PageController extends Controller
{
    public function pagelist()
    {
        $pages = Page::all();
        return view('admin.page.list', compact('pages'));
    }
    public function addGroupstoPage($id)
    {
        $page = Page::findOrFail($id);
        $groups = Group::all();

        $pagegroups = PageGroup::with('group')->get();


        return view('admin.page.add-groups', compact('page', 'groups','pagegroups'));
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
