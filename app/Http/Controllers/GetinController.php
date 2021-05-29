<?php

namespace App\Http\Controllers;

use App\Getin;
use Illuminate\Http\Request;

class GetinController extends Controller
{
    public function getintouch(){
        return view('admin.getin.getintouch',[
            'getins' => Getin::all(),
        ]);
    }
    public function getintouchshow($id){
        return view('admin.getin.getintouchshow',[
            'getin' => Getin::find($id),
        ]);
    }
    public function getintouchstore(Request $request){
        $request->validate([
            'details' => 'required',
           ]);
       $heading_name = Getin::find($request->id)->heading_name;
        Getin::find($request->id)->update([
            'details' => $request->details,
        ]);
       return redirect('dashboard/getintouch')->with('getintouth_status', $heading_name.' Updated Successfully!!!');
    }
}
