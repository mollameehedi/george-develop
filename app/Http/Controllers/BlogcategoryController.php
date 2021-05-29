<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\BlogCategory;
use Illuminate\Http\Request;
use Auth;

class BlogcategoryController extends Controller
{
    public function index(){
        return view('admin.blog.category.index',[
            'categories' => BlogCategory::latest()->paginate(12),
        ]);
    }
    public function store(Request $request){
        $request->validate([
            'blog_category' => 'required',
           ]);
        BlogCategory::insert($request->except('_token') + [
            'user_id' => Auth::id(),
            'created_at' => Carbon::now(),
        ]);
        return back()->with('category_success', 'Category Added Successfully');
    }
    public function delete($id){
        BlogCategory::find($id)->delete();
        return back()->with('delete_status', 'Catgory Deleted Successfully!');
    }
    public function show($id){
        return view('admin.blog.category.show',[
            'blog_category' => BlogCategory::find($id),
        ]);
    }
    public function update(Request $request){
        $request->validate([
            'blog_category' => 'required',
           ]);
        BlogCategory::find($request->id)->update([
            'blog_category' => $request->blog_category,
        ]);
        return redirect('dashboard/event/blog/category')->with('update_status', 'Catgory Updated Successfully!');
    }
}
