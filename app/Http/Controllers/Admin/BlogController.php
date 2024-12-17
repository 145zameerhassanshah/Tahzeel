<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use App\Helpers\Helper;
use App\Models\Bcategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function blog(Request $request){

        $blogs = Blog::orderBy('serial_number', 'asc')->get();
      
        return view('admin.blog.index', compact('blogs'));
    }

    // Add Blog 
    public function add(){
        $bcategories = Bcategory::where('status', 1)->get();
        return view('admin.blog.add', compact('bcategories'));
    }

    // Store Blog 
    public function store(Request $request){

        $slug = Helper::make_slug($request->title);
        $blogs = Blog::select('slug')->get();

        $request->validate(rules: [
            'image' => 'required|mimes:jpeg,jpg,png',
            'title' => [
                'required',
                'unique:blogs,title',
                'max:255',
                function($attribute, $value, $fail) use ($slug, $blogs){
                    foreach($blogs as $blog){
                        if($blog->slug == $slug){
                            return $fail('Title already taken!');
                        }
                    }
                }
            ],
            'status' => 'required',
            'content' => 'required',
            'bcategory_id' => 'required',
        ]);


        $blog = new Blog();

        if($request->hasFile('image')){

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $image = time().rand().'.'.$extension;
            $file->move('assets/front/img/blog/', $image);

            $blog->image = $image;
        }


        $blog->title = $request->title;
        $blog->status = $request->status;
        $blog->content = $request->content;
        $blog->slug = $slug;
        $blog->bcategory_id = $request->bcategory_id;
        $blog->meta_keywords = $request->meta_keywords;
        $blog->meta_description = $request->meta_description;

        $blog->save();

        $notification = array(
            'message' => 'Blog Added successfully!',
            'alert' => 'success'
        );
        return redirect()->route('admin.blog.index')->with('notification', $notification);

    }

    // Blog  Delete
    public function delete($id){

        $blog = Blog::find($id);

        @unlink('assets/front/img/blog/'. $blog->main_image);
        
        $blog->delete();

        $notification = array(
            'message' => 'Blog  Deleted successfully!',
            'alert' => 'success'
        );
        return redirect()->back()->with('notification', $notification);
    }

    // Blog  Edit
    public function edit($id){
       
        $blog = Blog::findOrFail($id);
        $bcategories = Bcategory::where('status', 1)->get();

        return view('admin.blog.edit', compact('bcategories', 'blog'));

    }

    // Blog Update
    public function update(Request $request, $id){

        $slug = Helper::make_slug($request->title);
        $blogs = Blog::select('slug')->get();
        $blog = Blog::findOrFail($id);

        $request->validate([
            'image' => 'mimes:jpeg,jpg,png',
            'title' => [
                'required',
                'max:255',
                function($attribute, $value, $fail) use ($slug, $blogs, $blog){
                    foreach($blogs as $blg){
                        if($blog->slug != $slug){
                            if($blg->slug == $slug){
                                return $fail('Title already taken!');
                            }
                        }
                    }
                },
                'unique:blogs,title,'.$id
            ],
            'status' => 'required',
            'content' => 'required',
            'bcategory_id' => 'required',

        ]);

        if($request->hasFile('image')){
            @unlink('assets/front/img/blog/'. $blog->image);

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $image = time().rand().'.'.$extension;
            $file->move('assets/front/img/blog/', $image);

            $blog->image = $image;
            
        }

        $blog->title = $request->title;
        $blog->status = $request->status;
        $blog->content = $request->content;
        $blog->slug = $slug;
        $blog->bcategory_id = $request->bcategory_id;
        $blog->meta_keywords = $request->meta_keywords;
        $blog->meta_description = $request->meta_description;

        $blog->save();

        $notification = array(
            'message' => 'Blog Updated successfully!',
            'alert' => 'success'
        );

        return redirect(route('admin.blog.index'))->with('notification', $notification);

    }

}
