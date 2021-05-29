<?php

namespace App\Http\Controllers;

use App\Map;
use App\Blog;
use App\Logo;
use App\Event;
use App\Getin;
use App\Ab_extra;
use App\Allbanner;
use Carbon\Carbon;
use App\About_photo;
use App\AboutDetail;
use App\Event_photo;
use App\Home_banner;
use App\Testimonial;
use App\ContactMessge;
use App\Music_gallary;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home(){
        return view('frontend.index',[
            'getinfo' => Getin::find(1),
            'address' => Getin::find(2),
            'first_number' => Getin::find(3),
            'second_number' => Getin::find(4),
            'first_email' => Getin::find(5),
            'second_email' => Getin::find(6),
            'twitter' => Getin::find(7),
            'facebook' => Getin::find(8),
            'youtube' => Getin::find(9),
            'instagram' => Getin::find(10),
            'soudcloud' => Getin::find(11),
            'spotify' => Getin::find(12),
            'testimonials' => Testimonial::latest()->get(),
            'upcoming_events' => Event::where('event_status', 1)->latest()->get(),
            'about_photo' => About_photo::find(1),
            'event_photo' => Event_photo::find(2),
            'about_detail' => AboutDetail::find(1),
            'galleries' => Music_gallary::latest()->get(),
            'banners' => Home_banner::latest()->get(),
            'blogs' => Blog::latest()->get(),
            'logo' => Logo::find(1)
        ]);
    }
    public function music(){
        return view('frontend.music',[
            'getinfo' => Getin::find(1),
            'address' => Getin::find(2),
            'first_number' => Getin::find(3),
            'second_number' => Getin::find(4),
            'first_email' => Getin::find(5),
            'second_email' => Getin::find(6),
            'twitter' => Getin::find(7),
            'facebook' => Getin::find(8),
            'youtube' => Getin::find(9),
            'instagram' => Getin::find(10),
            'soudcloud' => Getin::find(11),
            'spotify' => Getin::find(12),
            'galleries' => Music_gallary::latest()->get(),
            'banners' => Allbanner::find(1),
            'logo' => Logo::find(1)
        ]);
    }
    public function about(){
        return view('frontend.about',[
            'getinfo' => Getin::find(1),
            'address' => Getin::find(2),
            'first_number' => Getin::find(3),
            'second_number' => Getin::find(4),
            'first_email' => Getin::find(5),
            'second_email' => Getin::find(6),
            'twitter' => Getin::find(7),
            'facebook' => Getin::find(8),
            'youtube' => Getin::find(9),
            'instagram' => Getin::find(10),
            'soudcloud' => Getin::find(11),
            'spotify' => Getin::find(12),
            'about_detail' => AboutDetail::find(1),
            'testimonials' => Testimonial::latest()->get(),
            'banners' => Allbanner::find(2),
            'logo' => Logo::find(1),
            'ab_extras' => Ab_extra::latest()->get()
        ]);
    }
    public function events(){
        return view('frontend.events',[
            'getinfo' => Getin::find(1),
            'address' => Getin::find(2),
            'first_number' => Getin::find(3),
            'second_number' => Getin::find(4),
            'first_email' => Getin::find(5),
            'second_email' => Getin::find(6),
            'twitter' => Getin::find(7),
            'facebook' => Getin::find(8),
            'youtube' => Getin::find(9),
            'instagram' => Getin::find(10),
            'soudcloud' => Getin::find(11),
            'spotify' => Getin::find(12),
            'events' => Event::where('event_status', 2)->latest()->get(),
            'upcoming_events' => Event::where('event_status', 1)->latest()->get(),
            'banners' => Allbanner::find(3),
            'logo' => Logo::find(1)
        ]);
    }
    public function blogs(){
        return view('frontend.blogs',[
            'getinfo' => Getin::find(1),
            'address' => Getin::find(2),
            'first_number' => Getin::find(3),
            'second_number' => Getin::find(4),
            'first_email' => Getin::find(5),
            'second_email' => Getin::find(6),
            'twitter' => Getin::find(7),
            'facebook' => Getin::find(8),
            'youtube' => Getin::find(9),
            'instagram' => Getin::find(10),
            'soudcloud' => Getin::find(11),
            'spotify' => Getin::find(12),
            'blogs' => Blog::latest()->get(),
            'upcoming_events' => Event::where('event_status', 1)->latest()->get(),
            'banners' => Allbanner::find(4),
            'logo' => Logo::find(1)
        ]);
    }
    public function contact(){
        return view('frontend.contact',[
            'getinfo' => Getin::find(1),
            'address' => Getin::find(2),
            'first_number' => Getin::find(3),
            'second_number' => Getin::find(4),
            'first_email' => Getin::find(5),
            'second_email' => Getin::find(6),
            'twitter' => Getin::find(7),
            'facebook' => Getin::find(8),
            'youtube' => Getin::find(9),
            'instagram' => Getin::find(10),
            'soudcloud' => Getin::find(11),
            'spotify' => Getin::find(12),
            'map' => Map::find(1),
            'banners' => Allbanner::find(5),
            'logo' => Logo::find(1)

        ]);
    }
    public function contactmessagestore(Request $request){
        $request->validate([
            'name' => 'required',
            'email' =>  ['required','email'],
            'phone' => ['required','numeric'],
            'subject' => 'required',
            'message' => 'required',
           ]);
       ContactMessge::insert($request->except('_token') + [
           'created_at' => Carbon::now(),
       ]);
       return back()->with('message_succe', 'Message Sent Successfully!');
    }
}
