<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('admin.service.index', compact('services'));
    }

    public function add()
    {
        return view('admin.service.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'status' => 'required',
        ]);

        $service = new Service();
        $service->name = $request->name;
        $service->status = $request->status;

        $service->save();

        $notification = array(
            'message' => 'Service Added Successfully!',
            'alert' => 'success',
        );


        return redirect()->route('admin.service.index')->with('notification', $notification);
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('admin.service.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'status' => 'required',

        ]);

        $service = Service::find($id);
        $service->name = $request->name;
        $service->status = $request->status;

        $service->save();

        $notification = array(
            'message' => 'Service Updated Successfully!',
            'alert' => 'success',
        );


        return redirect()->route('admin.service.index')->with('notification', $notification);
    }

    public function delete($id)
    {
        $service = Service::find($id);

        $service->delete();

        $notification = array(
            'message' => 'Service Deleted Successfully!',
            'alert' => 'success',
        );

        return back()->with('notification', $notification);
    }
}
