<?php

namespace App\Http\Controllers;

use App\Ab_extra;
use Image;
use Carbon\Carbon;
use App\AboutDetail;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AboutController extends Controller
{
    public function index(){
        return view('admin.about.index',[
            'about_detail' => AboutDetail::find(1),
            'ab_extras' => Ab_extra::latest()->get()
        ]);
    }
    public function show(){
        return view('admin.about.show',[
            'about_detail' => AboutDetail::find(1),
        ]);
    }
    public function store(Request $request){
        $request->validate([
            'about_title' => 'required',
            'about_subtitle' => 'required',
            'about_desctiption' => 'required',
            // 'quotes' => 'required',
            // 'quotes_by' => 'required',
            'quotes_desctiption' => 'required',
           ]);
        $about_id = 1;

        if ($request->hasFile('about_photo')) {

        //     $old_photo_location = 'public/uploads/about_photo/'.AboutDetail::find(1)->about_photo;
        // unlink(base_path($old_photo_location));


        $uploaded_photo = $request->file('about_photo');
      $new_photo_name = $about_id.".".$uploaded_photo->getClientOriginalExtension();
       $new_photo_location = 'public/uploads/about_photo/'.$new_photo_name;
       Image::make($uploaded_photo)->resize(1130,760)->save(base_path($new_photo_location));
       AboutDetail::find($about_id)->update([
        'about_photo' => $new_photo_name,
       ]);
    }
    AboutDetail::find($about_id)->update([
        'about_title' => $request->about_title,
        'about_subtitle' => $request->about_subtitle,
        'about_desctiption' => $request->about_desctiption,
        // 'quotes' => $request->quotes,
        // 'quotes_by' => $request->quotes_by,
        'quotes_desctiption' => $request->quotes_desctiption,
       ]);
    return redirect('dashboard/about')->with('about_update_success', 'About Details Updated successfully');
}
    public function delte($id){
        //
    }

    public function extra(Request $request){
        $request->validate([
            'desctiption' => 'required'
        ]);
        Ab_extra::insert($request->except('_token'));
        return back()->with('extra_added', 'Added Successfully!');
    }
    public function extradelete($id){
        Ab_extra::find($id)->delete();
        return back()->with('extra_delete', 'Deleted successfully!');
    }
}
