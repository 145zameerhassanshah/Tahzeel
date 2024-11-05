<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\ServiceFeature;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Str;

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
        $request->validate([
            'name' => 'required',
            'service_category_id' => 'required',
            'slug' => 'required|unique',
            'icon' => 'required|mimes:jpg,jpeg,png',
            'order_no' => 'required',
            'status' => 'required',
            'banner_title' => 'required',
            'banner_subtitle' => 'required',
            'banner_image' => 'required|mimes:jpg,jpeg,png',
            'description' => 'required',
            'other_description' => 'nullable',
            'meta_title' => 'nullable',
            'meta_keywords' => 'nullable',
            'meta_description' => 'nullable',
            'meta_image' => 'nullable|mimes:jpg,jpeg,png',
        ]);

        $service = new Service();

        $isUnique = Service::where('slug', $request->slug)->count() === 0;

        if (!$isUnique) {
            return redirect()->back()->withInput()->withErrors(['slug' => 'The slug must be unique.'])->with('notification', [
                'messege' => 'Service could not be added!',
                'alert' => 'error',
            ]);
        }

        $slug = Str::slug($request->title);

        $service->name = $request->name;
        $service->service_category_id = $request->service_category_id;
        $service->slug = $slug;
        $service->order_no = $request->order_no;
        $service->status = $request->status;
        $service->banner_title = $request->banner_title;
        $service->banner_subtitle = $request->banner_subtitle;
        $service->description = $request->description;
        $service->other_description = $request->other_description;

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

        $service->save();

        foreach ($request->feature_names as $name) {
            ServiceFeature::create([
                'name' => $name,
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
