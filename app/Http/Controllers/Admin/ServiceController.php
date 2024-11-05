<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\ServiceFeature;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('admin.service.index', compact('services'));
    }

    public function add()
    {
        $service_categories = ServiceCategory::where('status', 'publish')->get();
        return view('admin.service.add', compact('service_categories'));
    }

    public function store(Request $request)
    {
        // return $request;
        $request->validate([
            'name.en' => 'required|string|max:255',
            'name.ar' => 'required|string|max:255',
            'service_category_id' => 'required|integer|exists:service_categories,id',
            'slug' => 'required|string|unique:services,slug',
            'icon' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'banner_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'order_no' => 'required|integer',
            'status' => 'required|string|in:publish,draft',
            'banner_title.en' => 'required|string|max:255',
            'banner_title.ar' => 'required|string|max:255',
            'banner_subtitle.en' => 'required|string|max:255',
            'banner_subtitle.ar' => 'required|string|max:255',
            'description.en' => 'required|string',
            'description.ar' => 'required|string',
            'other_description.en' => 'nullable|string',
            'other_description.ar' => 'nullable|string',
            'features.*.en' => 'required|string|max:255',
            'features.*.ar' => 'required|string|max:255',
        ]);

        $service = new Service();

        if ($request->hasFile('icon')) {

            $file = $request->file('icon');
            $extension = $file->getClientOriginalExtension();
            $icon = time() . rand() . '.' . $extension;
            $file->move('assets/admin/uploads/service/icon/thumb/', $icon);

            $imgManager = new ImageManager(new Driver());

            $thumb_icon = $imgManager->read('assets/admin/uploads/service/icon/thumb/' . $icon);
            $thumb_icon->cover(150, 150);
            $thumb_icon->save(public_path('assets/admin/uploads/service/icon/' . $icon));

            @unlink('assets/admin/uploads/service/icon/thumb/' . $icon);

            $service->icon = $icon;
        }

        if ($request->hasFile('banner_image')) {

            $file = $request->file('banner_image');
            $extension = $file->getClientOriginalExtension();
            $banner_image = time() . rand() . '.' . $extension;
            $file->move('assets/admin/uploads/service/banner/thumb/', $banner_image);

            $imgManager = new ImageManager(new Driver());

            $thumb_icon = $imgManager->read('assets/admin/uploads/service/banner/thumb/' . $banner_image);
            $thumb_icon->cover(2202, 886);
            $thumb_icon->save(public_path('assets/admin/uploads/service/banner/' . $banner_image));

            @unlink('assets/admin/uploads/service/banner/thumb/' . $banner_image);

            $service->banner_image = $banner_image;
        }

        // $service->name = json_encode($request->name);
        // $service->service_category_id = $request->service_category_id;
        // $service->slug = $request->slug;
        // $service->order_no = $request->order_no;
        // $service->status = $request->status;
        // $service->banner_title = json_encode($request->banner_title);
        // $service->banner_subtitle = json_encode($request->banner_subtitle);
        // $service->description = json_encode($request->description);
        // $service->other_description = json_encode($request->other_description);

        $service->fill($request->except('features'));
        $service->save();

        // Handle service features
        foreach ($request->features as $feature) {
            ServiceFeature::create([
                'name' => $feature, // This will be stored as a JSON-encoded array
                'service_id' => $service->id,
            ]);
        }


        $notification = array(
            'message' => 'Service Added Successfully!',
            'alert' => 'success',
        );


        return redirect()->route('admin.service.index')->with('notification', $notification);
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('admin.service-category.edit', compact('service'));
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


        return redirect()->route('admin.service.category.index')->with('notification', $notification);
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
