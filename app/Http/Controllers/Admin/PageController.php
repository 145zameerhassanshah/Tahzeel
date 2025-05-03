namespace App\Http\Controllers\Admin;

use App\Models\Element;
use App\Models\ElementFeature;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;  // Add this import

class ElementController extends Controller
{
    public function index()
    {
        // Get all elements with their features
        $elements = Element::with('features')->get();

        return view('admin.element.index', compact('elements'));
    }

    public function create()
    {
        return view('admin.element.create');
    }

    public function store(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'name.en' => 'required|string|max:255',
            'name.ar' => 'required|string|max:255',
            'description.en' => 'nullable|string',
            'description.ar' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
            'features.*.en' => 'nullable|string',
            'features.*.ar' => 'nullable|string',
        ]);

        // Create the element
        $element = new Element();
        
        // Handle image upload if provided
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $imagePath = public_path('assets/admin/img');
            
            // Ensure the directory exists
            if (!File::exists($imagePath)) {
                File::makeDirectory($imagePath, 0755, true);
            }

            // Move the image to the desired location
            $image->move($imagePath, $imageName);

            // Save the image path to the database (relative to the public folder)
            $element->image = 'assets/admin/img/' . $imageName;
        }

        // Set translations for 'name' and 'description'
        $element->setTranslations('name', [
            'en' => $request->input('name.en'),
            'ar' => $request->input('name.ar')
        ]);

        $element->setTranslations('description', [
            'en' => $request->input('description.en'),
            'ar' => $request->input('description.ar')
        ]);

        // Save other fields
        $element->status = true;  // Assuming active by default
        $element->save();

        // Store element features
        foreach ($request->features as $feature) {
            ElementFeature::create([
                'element_id' => $element->id,
                'feature_name' => $feature,
            ]);
        }

        return redirect()->route('admin.element.index')->with('success', 'Element created successfully');
    }

    public function edit(Element $element)
    {
        return view('admin.element.edit', compact('element'));
    }

    public function update(Request $request, Element $element)
    {
        // Validate the form data
        $validated = $request->validate([
            'name.en' => 'required|string|max:255',
            'name.ar' => 'required|string|max:255',
            'description.en' => 'nullable|string',
            'description.ar' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
            'features.*.en' => 'nullable|string',
            'features.*.ar' => 'nullable|string',
        ]);

        // Update the element
        $element->update([
            'status' => true,  // Assuming active by default
        ]);

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($element->image && File::exists(public_path($element->image))) {
                File::delete(public_path($element->image));
            }

            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $imagePath = public_path('assets/admin/img');

            // Ensure the directory exists
            if (!File::exists($imagePath)) {
                File::makeDirectory($imagePath, 0755, true);
            }

            // Move the image to the desired location
            $image->move($imagePath, $imageName);

            // Save the new image path to the database (relative to the public folder)
            $element->image = 'assets/admin/img/' . $imageName;
        }

        // Set translations for 'name' and 'description'
        $element->setTranslations('name', [
            'en' => $request->input('name.en'),
            'ar' => $request->input('name.ar')
        ]);

        $element->setTranslations('description', [
            'en' => $request->input('description.en'),
            'ar' => $request->input('description.ar')
        ]);

        // Update element features
        $element->features()->delete(); // Delete existing features
        foreach ($request->features as $feature) {
            ElementFeature::create([
                'element_id' => $element->id,
                'feature_name' => $feature,
            ]);
        }

        return redirect()->route('admin.element.index')->with('success', 'Element updated successfully');
    }

    public function destroy(Element $element)
    {
        // Delete associated features
        $element->features()->delete();

        // Delete the image file if it exists
        if ($element->image && File::exists(public_path($element->image))) {
            File::delete(public_path($element->image));
        }

        // Delete the element itself
        $element->delete();

        return redirect()->route('admin.element.index')->with('success', 'Element deleted successfully');
    }
}
