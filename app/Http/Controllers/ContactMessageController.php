<?php

namespace App\Http\Controllers;

use App\ContactMessge;
use Illuminate\Http\Request;
use App\Map;

class ContactMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.contact.contactmessage',[
            'contacts' => ContactMessge::latest()->paginate(12),
            'map' => Map::find(1),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Map::find(1)->update([
            'map' => $request->map
        ]);
        return back()->with('map_updeted', 'Map Updeted Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function messageviw($id){
        return view('admin.contact.messageview',[
            'contactmessage' => ContactMessge::find($id),
        ]);
    }
    public function messagedelete($id){
        ContactMessge::find($id)->delete();
        return back()->with('delete_succes', 'Message Deleted Successfully');
    }
    public function contactbanner(){
            return view('admin.contact.contactbanner');
    }



}
