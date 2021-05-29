<?php

namespace App\Http\Controllers;

use App\Music_gallary;
use App\Music_gallary_heading;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;

class MusicGallaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.Music_gallary.index', [
            'heading' => Music_gallary_heading::find(1),
            'galleries' => Music_gallary::latest()->get(),
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
        $request->validate([
            'youtube_link' => 'required',
            'video_thumbnail' => 'required',
           ]);
        $gallery_id =  Music_gallary::insertGetId($request->except('_token', 'video_thumbnail') + [
            'created_at' => Carbon::now(),
        ]);
        $uploaded_photo = $request->file('video_thumbnail');
        $new_file_name = $gallery_id . "." . $uploaded_photo->getClientOriginalExtension();
        $new_file_location = 'public/uploads/gallery_thumbnail/' . $new_file_name;
        Image::make($uploaded_photo)->resize(910,500)->save(base_path($new_file_location));
        Music_gallary::find($gallery_id)->update([
            'video_thumbnail' => $new_file_name,
        ]);
        return back()->with('add_video', 'Gallery video added Successfully!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Music_gallary $gallery)
    {
        return view('admin.Music_gallary.show', [
            'info' => Music_gallary::find($gallery->id)
        ]);
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
    public function update(Request $request, Music_gallary $gallery)
    {
        Music_gallary::find($gallery->id)->update($request->except('_token', 'video_thumbnail'));

        if ($request->hasFile('video_thumbnail')) {
            if (Music_gallary::find($gallery->id)->video_thumbnail != 'thumbnail.jpg') {
                $old_photo_location = 'public/uploads/gallery_thumbnail/' . Music_gallary::find($gallery->id)->video_thumbnail;
                unlink(base_path($old_photo_location));
            }
            $uploaded_photo = $request->file('video_thumbnail');
            $new_file_name = $gallery->id . "." . $uploaded_photo->getClientOriginalExtension();
            $new_file_location = 'public/uploads/gallery_thumbnail/' . $new_file_name;
            Image::make($uploaded_photo)->save(base_path($new_file_location));
            Music_gallary::find($gallery->id)->update([
                'video_thumbnail' => $new_file_name,
            ]);
        }
        return back()->with('update_gallery', 'Gallery updated Successfully!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Music_gallary $gallery)
    {
        if (Music_gallary::find($gallery->id)->video_thumbnail != 'thumbnail.jpg') {
            $old_photo_location = 'public/uploads/gallery_thumbnail/' . Music_gallary::find($gallery->id)->video_thumbnail;
            unlink(base_path($old_photo_location));
        }
        Music_gallary::find($gallery->id)->delete();
        return back()->with('delete_gallery', 'Gallery deleted successfully!!');
    }
    public function musicgalleryheadingupdate($id){
        return view('admin.Music_gallary.update_heading', [
            'info' => Music_gallary_heading::find(1),
        ]);
    }
    public function musicgalleryheadingupdatepost(Request $request, $id){
        Music_gallary_heading::find($id)->update($request->except('_token'));
        return back()->with('update_heading', 'Heading updated successfully!!');
    }
}
