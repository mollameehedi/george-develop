<?php

namespace App\Http\Controllers;

use Image;
use Carbon\Carbon;
use App\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
   public function index(){
       return view('admin.testimonial.index',[
           'testimonials' => Testimonial::latest()->paginate(12),
       ]);
   }
   public function store(Request $request){
    $request->validate([
        'client_name' => 'required',
        'service_name' => 'required',
        'ster' => 'required',
        'what_client_say' => 'required',
       ]);
    $event_id = Testimonial::insertGetId($request->except('_token','client_photo')+[
        'created_at' => Carbon::now()
    ]);

    if ($request->hasFile('client_photo')) {
    $uploaded_photo = $request->file('client_photo');
  $new_photo_name = $event_id.".".$uploaded_photo->getClientOriginalExtension();
   $new_photo_location = 'public/uploads/client_photo/'.$new_photo_name;
   Image::make($uploaded_photo)->resize(100,100)->save(base_path($new_photo_location));
   Testimonial::find($event_id)->update([
    'client_photo' => $new_photo_name,
   ]);
   }
   return back()->with('testi_added', 'Testimonial Added Successfully!');
}
public function delete($id){
    if (Testimonial::find($id)->client_photo != 'default.jpg') {
        $old_photo_location = 'public/uploads/client_photo/'.Testimonial::find($id)->client_photo;
        unlink(base_path($old_photo_location));
     }
     Testimonial::find($id)->delete();
     return back()->with('delete_status', 'Testimonial Deleted Successfully!');
}

}
