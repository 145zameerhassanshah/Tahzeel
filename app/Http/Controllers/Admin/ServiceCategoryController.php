<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;

class ServiceCategoryController extends Controller
{
    public function index()
    {
        $services = ServiceCategory::all();
        return view('admin.service-category.index', compact('services'));
    }

    public function add()
    {
        return view('admin.service-category.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'status' => 'required',
        ]);

        $service = new ServiceCategory();

        $service->name = $request->name;
        $service->status = $request->status;

        $service->save();

        $notification = array(
            'message' => 'Service Added Successfully!',
            'alert' => 'success',
        );


        return redirect()->route('admin.service.category.index')->with('notification', $notification);
    }

    public function edit($id)
    {
        $service = ServiceCategory::findOrFail($id);
        return view('admin.service-category.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'status' => 'required',
        ]);

        $service = ServiceCategory::find($id);

        $service->name = $request->name;
        $service->status = $request->status;

        $service->save();

        $notification = array(
            'message' => 'Service Updated Successfully!',
            'alert' => 'success',
        );


        return redirect()->route('admin.service.category.index')->with('notification', $notification);
    }

    public function delete($id)
    {
        $category = ServiceCategory::find($id);

        if($category->services->count() === 0)
        {
            $category->delete();
            $notification = array(
                'message' => 'Service Deleted Successfully!',
                'alert' => 'success',
            );
        }else{
            $notification = array(
                'message' => 'First Delete Services of this Category!',
                'alert' => 'warning',
            );
        }

        return back()->with('notification', $notification);
    }
}
