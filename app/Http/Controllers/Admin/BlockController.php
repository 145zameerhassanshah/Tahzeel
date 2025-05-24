<?php

namespace App\Http\Controllers\admin;

use App\Models\Page;
use App\Models\Block;
use App\Models\BlockFeature;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlockController extends Controller
{
    public function index($slug)
    {
        $page = Page::where('slug', $slug)->first();
        $blocks = Block::where('page_id', $page->id)->get();
        return view('admin.page.partials.block_list', compact('blocks', 'slug'));
    }

    public function add($slug)
    {
        return view('admin.page.partials.block_add', compact('slug'));
    }

    public function store(Request $request, $slug)
    {
        $request->validate([
            'title.en' => 'required|string|max:255',
            'title.ar' => 'required|string|max:255',
            'subtitle.en' => 'nullable|string|max:255',
            'subtitle.ar' => 'nullable|string|max:255',
            'description.en' => 'nullable|string',
            'description.ar' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,svg,webp|max:2048',
            'features.*.en' => 'nullable|string',
            'features.*.ar' => 'nullable|string',
            'features.*.order_no' => 'nullable|integer',
        ]);
        // dd($request->all());

        // Create the element
        $page = Page::where('slug', $slug)->first();
        $block = new Block();
        $block->block_name = "test"; // You may want to make this dynamic or remove

        // Spatie translatable fields
        $block->setTranslations('title', $request->input('title'));
        $block->setTranslations('subtitle', $request->input('subtitle'));
        $block->setTranslations('description', $request->input('description'));
        $block->page_id = $page->id;

        // Handle Image Upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = time() . rand() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/admin/uploads/block/thumb/'), $imageName);
            $block->image = 'assets/admin/uploads/block/thumb/' . $imageName;
        }

        // Handle Icon Upload
        if ($request->hasFile('icon')) {
            $file = $request->file('icon');
            $iconName = time() . rand() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/admin/uploads/block/icons/'), $iconName);
            $block->icon = 'assets/admin/uploads/block/icons/' . $iconName;
        }

        $block->save();

        // Handle features
        if ($request->has('features')) {
            foreach ($request->input('features') as $feature) {
                $blockFeature = new BlockFeature();
                $blockFeature->block_id = $block->id;
                $blockFeature->setTranslations('title', [
                    'en' => $feature['en'] ?? '',
                    'ar' => $feature['ar'] ?? '',
                ]);

                $blockFeature->order_no = $feature['order_no'] ?? 0;
                $blockFeature->save();
            }
        }
        return redirect()->route('admin.block.index', $page->slug)->with('notification', [
            'message' => 'Page Block Added Successfully!',
            'alert' => 'success',
        ]);
    }

    public function edit($id)
    {
        $block = Block::with('features')->findOrFail($id);
        $slug = $block->page->slug;
        return view('admin.page.partials.block_edit', compact('block', 'slug'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title.en' => 'required|string|max:255',
            'title.ar' => 'required|string|max:255',
            'subtitle.en' => 'nullable|string|max:255',
            'subtitle.ar' => 'nullable|string|max:255',
            'description.en' => 'nullable|string',
            'description.ar' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,svg,webp|max:2048',
            'features.*.id' => 'nullable|integer|exists:element_features,id',
            'features.*.en' => 'nullable|string',
            'features.*.ar' => 'nullable|string',
            'features.*.order_no' => 'nullable|integer',
        ]);

        $block = Block::findOrFail($id);
        $block->setTranslations('title', $request->input('title'));
        $block->setTranslations('subtitle', $request->input('subtitle'));
        $block->setTranslations('description', $request->input('description'));

        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($block->image && file_exists(public_path($block->image))) {
                unlink(public_path($block->image));
            }

            // Upload new image
            $file = $request->file('image');
            $imageName = time() . rand() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/admin/uploads/block/thumb/'), $imageName);
            $block->image = 'assets/admin/uploads/block/thumb/' . $imageName;
        }

        if ($request->hasFile('icon')) {
            // Delete the old icon if it exists
            if ($block->icon && file_exists(public_path($block->icon))) {
                unlink(public_path($block->icon));
            }

            // Upload new icon
            $file = $request->file('icon');
            $iconName = time() . rand() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/admin/uploads/block/icons/'), $iconName);
            $block->icon = 'assets/admin/uploads/block/icons/' . $iconName;
        }
        $block->save();

        // Update or Add Features
            $block->features()->delete();
        if ($request->has('features')) {
            foreach ($request->input('features') as $featureData) {
                if (isset($featureData['id'])) {
                    $feature = BlockFeature::find($featureData['id']);
                } else {
                    $feature = new BlockFeature();
                    $feature->block_id = $block->id;
                }

                $feature->setTranslations('title', [
                    'en' => $featureData['en'] ?? '',
                    'ar' => $featureData['ar'] ?? '',
                ]);

                $feature->order_no = $featureData['order_no'] ?? 0;
                $feature->save();
            }
        }

        return redirect()->route('admin.block.index', $block->page->slug)->with('notification', [
            'message' => 'Page Block Updated Successfully!',
            'alert' => 'success',
        ]);
    }

    public function delete($id)
    {
        $block = Block::findOrFail($id);

        // Delete related features
        $block->features()->delete();

        // Delete element images if needed
        if ($block->image && file_exists(public_path($block->image))) {
            unlink(public_path($block->image));
        }

        if ($block->icon && file_exists(public_path($block->icon))) {
            unlink(public_path($block->icon));
        }

        // Delete element
        $block->delete();

        return redirect()->back()->with('notification', [
            'message' => 'Page Block Deleted Successfully!',
            'alert' => 'success',
        ]);
    }
}
