<?php

namespace App\Http\Controllers;

use App\Event;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Image;

class EventController extends Controller
{
   public function index(){
       return view('admin.event.index',[
           'events' => Event::where('event_status', 2)->latest()->paginate(12),
       ]);
   }
   public function store(Request $request){
    $request->validate([
        'event_name' => 'required',
        'start_from' => 'required',
        'door_open' => 'required',
        'show_start' => 'required',
        'event_location' => 'required',
        'event_desctiption' => 'required',
        'ticket_price' => 'required',
       ]);

      $slug_link = Str::slug($request->event_name)."-".Str::random(5);
      $event_id = Event::insertGetId($request->except('_token','event_photo')+[
          'slug_link' => $slug_link,
          'created_at' => Carbon::now()
      ]);
      if ($request->hasFile('event_photo')) {
      $uploaded_photo = $request->file('event_photo');
    $new_photo_name = $event_id.".".$uploaded_photo->getClientOriginalExtension();
     $new_photo_location = 'public/uploads/event_photo/'.$new_photo_name;
     Image::make($uploaded_photo)->resize(425,525)->save(base_path($new_photo_location));
     Event::find($event_id)->update([
      'event_photo' => $new_photo_name,
     ]);
//   //    upload photo of sigle photo ends

}
return back()->with('event_add_success', 'Event added successfully');
}
public function destroy($id){
    if (Event::find($id)->event_photo != 'default.jpg') {
        $old_photo_location = 'public/uploads/event_photo/'.Event::find($id)->event_photo;
        unlink(base_path($old_photo_location));
     }
     Event::find($id)->delete();
     return back()->with('delete_status', 'Event Deleted Successfully!');
}
public function upcoming(){
    return view('admin.event.upcoming',[
        'events' => Event::where('event_status',1)->latest()->paginate(12)
    ]);
}
 public function move($id){
   if (Event::find($id)->event_status == 1) {
    Event::find($id)->update([
        'event_status' => 2,
    ]);
    $mess = 'Event deactivate successfully';
   }
   else {
    Event::find($id)->update([
        'event_status' => 1,
    ]);
        $mess = 'Event activated successfully';

   }
   return back()->with('event_status_success', $mess);



 }
 public function update($id){
    return view('admin.event.update_event', [
        'info' => Event::find($id)
    ]);
 }
        public function updatepost(Request $request, $id){
            $request->validate([
                'event_name' => 'required',
                'start_from' => 'required',
                'door_open' => 'required',
                'show_start' => 'required',
                'event_location' => 'required',
                'event_desctiption' => 'required',
                'ticket_price' => 'required',
            ]);
            Event::find($id)->update($request->except('_token', 'event_photo'));
                if ($request->hasFile('event_photo')) {
                    if (Event::find($id)->event_photo != 'default.jpg') {
                        $old_photo_location = 'public/uploads/event_photo/' . Event::find($id)->event_photo;
                        unlink(base_path($old_photo_location));
                    }
                    $uploaded_photo = $request->file('event_photo');
                    $new_file_name = $id . "." . $uploaded_photo->getClientOriginalExtension();
                    $new_file_location = 'public/uploads/event_photo/' . $new_file_name;
                    Image::make($uploaded_photo)->resize(425, 525)->save(base_path($new_file_location));
                    Event::find($id)->update([
                        'event_photo' => $new_file_name,
                    ]);
                }
                return back()->with('update_event', 'Event updated successfully!!!');
        }

}
