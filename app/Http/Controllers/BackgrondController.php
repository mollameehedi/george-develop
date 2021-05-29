<?php

namespace App\Http\Controllers;

use App\Allbanner;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Image;

class BackgrondController extends Controller
{
    public function allbanner(){
        return view('admin.allbanner.allbanner',[
            'banners' => Allbanner::all(),
        ]);
    }
    public function allbannerstore(Request $request){

        $request->validate([
            'banner_bg' => 'required',
           ]);
        $banner_id = $request->id;
        $page_name = Allbanner::find($banner_id)->page_name;
        $old_photo_location = 'public/uploads/allbannerbg/'.Allbanner::find($banner_id)->banner_bg;
        unlink(base_path($old_photo_location));
            $uploaded_photo = $request->file('banner_bg');
            $new_file_name = $banner_id . "." . $uploaded_photo->getClientOriginalExtension();
            $new_file_location = 'public/uploads/allbannerbg/' . $new_file_name;
            Image::make($uploaded_photo)->save(base_path($new_file_location));
            Allbanner::find($banner_id)->update([
                'banner_bg' => $new_file_name,
            ]);
            return redirect('dashboard/banner/background')->with('add_banner', $page_name.' photo Updated Successfully!!!');
    }

    public function allbannershow($id){
        return view('admin.allbanner.allbannershow',[
            'banner' => Allbanner::find($id),
        ]);
    }
}
