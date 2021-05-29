<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogCategory;
use App\Blog;
use Auth;
use Illuminate\Support\Str;
use Image;
use Carbon\Carbon;

class BlogController extends Controller
{
    public function index(){
        return view('admin.blog.index',[
            'active_categories' => BlogCategory::all(),
            'blogs' => Blog::latest()->paginate(12),
        ]);
    }
    public function store(Request $request){
        $request->validate([
            'category_id' => 'required',
            'blog_name' => 'required',
            'blog_desctiption' => 'required',
            'quotes' => 'required',
            'quotes_by' => 'required',
            'quotes_desctiption' => 'required',
           ]);
        $slug_link = Str::slug($request->blog_name)."-".Str::random(5);
       $event_id = Blog::insertGetId($request->except('_token','blog_photo')+[
          'slug' => $slug_link,
          'created_at' => Carbon::now(),
            'user_id' => Auth::id(),
      ]);
      if ($request->hasFile('blog_photo')) {
      $uploaded_photo = $request->file('blog_photo');
    $new_photo_name = $event_id.".".$uploaded_photo->getClientOriginalExtension();
     $new_photo_location = 'public/uploads/blog_photo/'.$new_photo_name;
     Image::make($uploaded_photo)->resize(1040,590)->save(base_path($new_photo_location));
     Blog::find($event_id)->update([
      'blog_photo' => $new_photo_name,
     ]);

    }
    return back()->with('event_add_success', 'Blog added successfully');

    }
    public function show(){
        return view('admin.blog.show');
    }

    public function delete($id){
        if (Blog::find($id)->blog_photo != 'default.jpg') {
            $old_photo_location = 'public/uploads/blog_photo/'.Blog::find($id)->blog_photo;
            unlink(base_path($old_photo_location));
         }
        Blog::find($id)->delete();
        return back()->with('delete_status', 'Blog Deleted Successfully!');
    }
    public function update($id){
        return view('admin.blog.show', [
            'info' => Blog::find($id),
            'active_categories' => BlogCategory::all()
        ]);
    }
    public function updatepost(Request $request, $id)
    {
        $request->validate([
            'category_id' => 'required',
            'blog_name' => 'required',
            'blog_desctiption' => 'required',
            'quotes' => 'required',
            'quotes_by' => 'required',
            'quotes_desctiption' => 'required',
        ]);
        Blog::find($id)->update($request->except('_token', 'blog_photo'));
        if ($request->hasFile('blog_photo')) {
            if (Blog::find($id)->blog_photo != 'default.jpg') {
                $old_photo_location = 'public/uploads/blog_photo/' . Blog::find($id)->blog_photo;
                unlink(base_path($old_photo_location));
            }
            $uploaded_photo = $request->file('blog_photo');
            $new_file_name = $id . "." . $uploaded_photo->getClientOriginalExtension();
            $new_file_location = 'public/uploads/blog_photo/' . $new_file_name;
            Image::make($uploaded_photo)->resize(1040, 590)->save(base_path($new_file_location));
            Blog::find($id)->update([
                'blog_photo' => $new_file_name,
            ]);
        }
        return back()->with('update_blog', 'Blog updated successfully!!!');

    }
}
