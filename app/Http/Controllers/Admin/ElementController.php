<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\{Element, Service, ServiceCategory, ServiceFeature};
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\GD\Driver;
use Illuminate\Support\Str;

class ElementController extends Controller
{
    public function index()
    {
        $elements = Element::all();
        return view('admin.element.index', compact('elements'));
    }

    public function add()
    {
        $service_categories = ServiceCategory::where('status', 'publish')->get();
        return view('admin.element.add', compact('service_categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'element_name' => 'required|string|max:255',
            'icon' => 'required|mimes:jpeg,png,jpg,gif|max:2048',
            'image' => 'required|mimes:jpeg,png,jpg,gif|max:2048',
            'title.*.en' => 'required|string|max:255',
            'title.*.ar' => 'required|string|max:255',
            'subtitle.*.en' => 'required|string|max:255',
            'subtitle.*.ar' => 'required|string|max:255',
            'description.*.en' => 'required|string',
            'description.*.ar' => 'required|string',
        ]);
        $element = new Element();
        $element->setTranslations('title', $request->title);
        $element->setTranslations('subtitle', $request->subtitle);
        $element->setTranslations('description', $request->description);
        $element->element_name = $request->input('element_name');
        if ($request->hasFile('icon')) {
            $icon = $this->uploadImage($request->file('icon'), 'icon');
            $element->icon = $icon;
        }
        if ($request->hasFile('image')) {
            $image = $this->uploadImage($request->file('image'), 'image');
            $element->image = $image;
        }
        $element->save();
        return redirect()->route('admin.element.index')->with('message', 'Element Added Successfully!');
    }


    private function uploadImage($file, $type)
    {
        $extension = $file->getClientOriginalExtension();
        $filename = time() . rand() . '.' . $extension;
        $file->move(public_path('assets/admin/uploads/element/' . $type), $filename);
        // Resize the image to 150x150
        $imgPath = public_path('assets/admin/uploads/element/' . $type . '/' . $filename);
        list($width, $height) = getimagesize($imgPath);
        $newWidth = 150;
        $newHeight = 150;
        // Create a new true color image and copy the resized image onto it
        $thumb = imagecreatetruecolor($newWidth, $newHeight);
        if ($extension == 'jpeg' || $extension == 'jpg') {
            $source = imagecreatefromjpeg($imgPath);
        } elseif ($extension == 'png') {
            $source = imagecreatefrompng($imgPath);
        } elseif ($extension == 'gif') {
            $source = imagecreatefromgif($imgPath);
        }
        imagecopyresampled($thumb, $source, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
        imagejpeg($thumb, $imgPath, 90); // Save resized image with 90% quality
        // Clean up
        imagedestroy($thumb);
        imagedestroy($source);
        return 'assets/admin/uploads/element/' . $type . '/' . $filename;
    }


    // public function store(Request $request)
    // {
    //     // Validate incoming request data
    //     $request->validate([
    //         'icon' => 'required|mimes:jpeg,png,jpg,gif|max:2048',    // Icon validation
    //         'image' => 'required|mimes:jpeg,png,jpg,gif|max:2048',   // Image validation
    //         'title.*.en' => 'required|string|max:255',               // Title validation (both languages)
    //         'title.*.ar' => 'required|string|max:255',
    //         'subtitle.*.en' => 'required|string|max:255',            // Subtitle validation (both languages)
    //         'subtitle.*.ar' => 'required|string|max:255',
    //         'description.*.en' => 'required',                         // Description validation (both languages)
    //         'description.*.ar' => 'required',
    //     ]);

    //     // Create a new element instance
    //     $element = new Element();

    //     // Set translations for title, subtitle, and description
    //     $element->setTranslations('title', [
    //         'en' => isset($request->title[0]['en']) ? $request->title[0]['en'] : '',
    //         'ar' => isset($request->title[0]['ar']) ? $request->title[0]['ar'] : '',
    //     ]);

    //     $element->setTranslations('subtitle', [
    //         'en' => isset($request->subtitle[0]['en']) ? $request->subtitle[0]['en'] : '',
    //         'ar' => isset($request->subtitle[0]['ar']) ? $request->subtitle[0]['ar'] : '',
    //     ]);

    //     $element->setTranslations('description', [
    //         'en' => isset($request->description[0]['en']) ? $request->description[0]['en'] : '',
    //         'ar' => isset($request->description[0]['ar']) ? $request->description[0]['ar'] : '',
    //     ]);


    //     // Handle icon file upload
    //     if ($request->hasFile('icon')) {
    //         $file = $request->file('icon');
    //         $extension = $file->getClientOriginalExtension();
    //         $icon = time() . rand() . '.' . $extension;
    //         $file->move('assets/admin/uploads/service/icon/thumb/', $icon);

    //         // Generate a thumbnail for the icon
    //         $imgManager = new ImageManager(new Driver());
    //         $thumb_icon = $imgManager->make('assets/admin/uploads/service/icon/thumb/' . $icon);
    //         $thumb_icon->resize(150, 150); // Resize to 150x150
    //         $thumb_icon->save(public_path('assets/admin/uploads/service/icon/' . $icon));

    //         // Remove the temporary thumbnail
    //         @unlink('assets/admin/uploads/service/icon/thumb/' . $icon);

    //         // Save the icon path
    //         $element->icon = 'assets/admin/uploads/service/icon/' . $icon;
    //     }

    //     // Handle image file upload
    //     if ($request->hasFile('image')) {
    //         $file = $request->file('image');
    //         $extension = $file->getClientOriginalExtension();
    //         $image = time() . rand() . '.' . $extension;
    //         $file->move('assets/admin/uploads/service/image/thumb/', $image);
    //         // Generate a thumbnail for the image
    //         $imgManager = new ImageManager(new Driver());
    //         $thumb_image = $imgManager->make('assets/admin/uploads/service/image/thumb/' . $image);
    //         $thumb_image->resize(150, 150); // Resize to 150x150
    //         $thumb_image->save(public_path('assets/admin/uploads/service/image/' . $image));
    //         // Remove the temporary thumbnail
    //         @unlink('assets/admin/uploads/service/image/thumb/' . $image);
    //         // Save the image path
    //         $element->image = 'assets/admin/uploads/service/image/' . $image;
    //     }
    //     $element->save();
    //     // Return a success notification
    //     $notification = array(
    //         'message' => 'Element Added Successfully!',
    //         'alert' => 'success',
    //     );

    //     return redirect()->route('admin.element.index')->with('notification', $notification);
    // }

    public function edit($id)
    {
        $service = Service::findOrFail($id);

        $service_categories = ServiceCategory::where('status', 'publish')->get();

        return view('admin.element.edit', compact('service', 'service_categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name.en' => 'required|string|max:255',
            'name.ar' => 'required|string|max:255',
            'service_category_id' => 'required|integer|exists:service_categories,id',
            'icon' => 'nullable|mimes:jpeg,png,jpg,gif|max:2048',
            'banner_image' => 'nullable|mimes:jpeg,png,jpg,gif|max:2048',
            'order_no' => 'required|integer',
            'status' => 'required|string|in:publish,draft',
            'banner_title.en' => 'required|string|max:255',
            'banner_title.ar' => 'required|string|max:255',
            'banner_subtitle.en' => 'required|string|max:255',
            'banner_subtitle.ar' => 'required|string|max:255',
            'description.en' => 'required',
            'description.ar' => 'required',
            'other_description.en' => 'nullable',
            'other_description.ar' => 'nullable',
            'features.*.en' => 'required|string|max:255',
            'features.*.ar' => 'required|string|max:255',
            'meta_title' => 'nullable',
            'meta_keywords' => 'nullable',
            'meta_description' => 'nullable',
            'meta_image' => 'nullable|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $service = Service::find($id);

        $newSlug = Str::slug($request->name['en']);

        if ($service->getTranslations('name')['en'] !== $request->name['en']) {
            $slug_unique = Service::where('slug', $newSlug)->count() === 0;

            if (!$slug_unique) {
                $notification = array(
                    'message' => 'Slug must be unique!',
                    'alert' => 'warning',
                );

                return redirect()->back()->with('notification', $notification);
            }

            $service->slug = $newSlug;
        }

        $service->name = $request->name;
        $service->service_category_id = $request->service_category_id;
        $service->order_no = $request->order_no;
        $service->status = $request->status;
        $service->banner_title = $request->banner_title;
        $service->banner_subtitle = $request->banner_subtitle;
        $service->description = $request->description;
        $service->other_description = $request->other_description;
        $service->meta_title = $request->meta_title;
        $service->meta_keywords = $request->meta_keywords;
        $service->meta_description = $request->meta_description;

        if ($request->hasFile('icon')) {

            @unlink('assets/admin/uploads/service/icon/' . $service->icon);

            $file = $request->file('icon');
            $extension = $file->getClientOriginalExtension();
            $icon = time() . rand() . '.' . $extension;
            $file->move('assets/admin/uploads/service/icon/thumb/', $icon);

            $imgManager = new ImageManager(new Driver());

            $thumb_icon = $imgManager->read('assets/admin/uploads/service/icon/thumb/' . $icon);
            $thumb_icon->cover(150, 150);
            $thumb_icon->save(public_path('assets/admin/uploads/service/icon/' . $icon));

            @unlink('assets/admin/uploads/service/icon/thumb/' . $icon);

            $service->icon = 'assets/admin/uploads/service/icon/' . $icon;
        }

        if ($request->hasFile('banner_image')) {

            @unlink('assets/admin/uploads/service/banner/' . $service->banner_image);

            $file = $request->file('banner_image');
            $extension = $file->getClientOriginalExtension();
            $banner_image = time() . rand() . '.' . $extension;
            $file->move('assets/admin/uploads/service/banner/thumb/', $banner_image);

            $imgManager = new ImageManager(new Driver());

            $thumb_icon = $imgManager->read('assets/admin/uploads/service/banner/thumb/' . $banner_image);
            $thumb_icon->cover(2202, 886);
            $thumb_icon->save(public_path('assets/admin/uploads/service/banner/' . $banner_image));

            @unlink('assets/admin/uploads/service/banner/thumb/' . $banner_image);

            $service->banner_image = 'assets/admin/uploads/service/banner/' . $banner_image;
        }

        if ($request->hasFile('meta_image')) {

            @unlink('assets/admin/uploads/service/meta/' . $service->meta_image);

            $file = $request->file('meta_image');
            $extension = $file->getClientOriginalExtension();
            $meta_image = time() . rand() . '.' . $extension;
            $file->move('assets/admin/uploads/service/meta/', $meta_image);

            $service->meta_image = 'assets/admin/uploads/service/meta/' . $meta_image;
        }

        // $service->fill($request->except('features'));
        $service->save();

        if ($request->has('features') && !empty($request->features)) {
            foreach ($request->features as $feature) {
                ServiceFeature::create([
                    'name' => $feature,
                    'service_id' => $service->id,
                ]);
            }
        }

        if ($request->has('added_features')) {
            foreach ($request->added_features as $featureId => $featureData) {
                $existingFeature = $service->serviceFeatures()->find($featureId);
                if ($existingFeature) {
                    $isModified = $existingFeature->getTranslations('name')['en'] !== $featureData['en'] ||
                        $existingFeature->getTranslations('name')['ar'] !== $featureData['ar'];

                    if ($isModified) {
                        $existingFeature->update([
                            'name' => $featureData,
                        ]);
                    }
                }
            }
        }

        if ($request->has('removed_features') && !empty($request->removed_features)) {

            $featuresToDelete = explode(',', $request->removed_features);

            foreach ($featuresToDelete as $featureToDelete) {
                $serviceFeature = $service->serviceFeatures()->where('id', $featureToDelete)->first();
                if ($serviceFeature) {
                    $serviceFeature->delete();
                }
            }
        }

        $notification = array(
            'message' => 'Service Updated Successfully!',
            'alert' => 'success',
        );

        return redirect()->route('admin.element.index')->with('notification', $notification);
    }

    public function delete($id)
    {
        $service = Service::find($id);

        if ($service->serviceSections->count() === 0) {

            $service_features = ServiceFeature::where('service_id', $id)->get();

            @unlink($service->icon);
            @unlink($service->banner_image);
            @unlink($service->meta_image);

            foreach ($service_features as $feature) {
                $feature->delete();
            }

            $service->delete();

            $notification = array(
                'message' => 'Service Deleted Successfully!',
                'alert' => 'success',
            );
        } else {
            $notification = array(
                'message' => 'First Delete Service Sections!',
                'alert' => 'warning',
            );
        }

        return back()->with('notification', $notification);
    }
}
