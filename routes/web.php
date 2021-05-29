<?php

use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


// frontend controller route start here
Route::get('/', 'FrontendController@home')->name('/');
Route::get('music', 'FrontendController@music')->name('music');
Route::get('about', 'FrontendController@about')->name('about');
Route::get('events', 'FrontendController@events')->name('events');
Route::get('blogs', 'FrontendController@blogs')->name('blogs');
Route::get('contact', 'FrontendController@contact')->name('contact');
Route::post('contact/message/store', 'FrontendController@contactmessagestore')->name('contact.messges.store');

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
Route::get('edit/profile', 'HomeController@editprofile')->name('editprofile');
Route::post('change/name', 'HomeController@changename')->name('changename');
Route::post('change/photo', 'HomeController@changephoto')->name('changephoto');
Route::post('change/password', 'HomeController@changepassword')->name('changepassword');
Route::get('logo', 'HomeController@logo')->name('logo');
Route::get('logo/update/{id}', 'HomeController@logoupdate')->name('logoupdate');
Route::post('logo/update/post/{id}', 'HomeController@logoupdatepost')->name('logoupdatepost');
Route::get('deshboard/about-and-event-photo', 'HomeController@abouteventphoto')->name('about.event.photo');
Route::post('deshboard/about/photo/update', 'HomeController@aboutphotoupdate')->name('about.photo.update');
Route::post('deshboard/event/photo/update', 'HomeController@eventphotoupdate')->name('event.photo.update');

// news controller route start
Route::get('deshboard/home/news/blog', 'NewsController@index')->name('news.index');
Route::post('deshboard/home/news/blog/store', 'NewsController@store')->name('news.store');
Route::get('deshboard/home/news/blog/delete/{id}', 'NewsController@delete')->name('news.delete');






//HomepageController
Route::resource('banner', 'BannerController');





//MusicGallaryController
Route::resource('music/gallery', 'MusicGallaryController');
Route::get('music/gallery/heading/update/{id}', 'MusicGallaryController@musicgalleryheadingupdate')->name('musicgalleryheadingupdate');
Route::post('music/gallery/heading/update/post/{id}', 'MusicGallaryController@musicgalleryheadingupdatepost')->name('musicgalleryheadingupdatepost');


// Contat Message controller route start
Route::resource('deshboard/contact/message', 'ContactMessageController');
Route::get('deshboard/contact/message/view/{id}', 'ContactMessageController@messageviw')->name('contact_message.view');
Route::get('deshboard/contact/message/delete/{id}', 'ContactMessageController@messagedelete')->name('contact_message.delete');
Route::get('deshboard/contact/map/update/{id}', 'ContactMessageController@contactmapupdate')->name('contact.map.update');


// event controller route
Route::get('dashboard/event', 'EventController@index')->name('event.index');
Route::get('dashboard/event/upcoming', 'EventController@upcoming')->name('event.upcoming');
Route::post('dashboard/event/store', 'EventController@store')->name('event.store');
Route::get('dashboard/event/update/{id}', 'EventController@update')->name('event.update');
Route::post('dashboard/event/update/post/{id}', 'EventController@updatepost')->name('event.update.post');
Route::get('dashboard/event/destroy/{id}', 'EventController@destroy')->name('event.delete');
Route::get('dashboard/event/move/{id}', 'EventController@move')->name('event.move');

// blog category controller route start
Route::get('dashboard/event/blog/category', 'BlogcategoryController@index')->name('blog.category.index');
Route::post('dashboard/event/blog/category/store', 'BlogcategoryController@store')->name('blog.category.store');
Route::get('dashboard/blog/category/delete/{id}', 'BlogcategoryController@delete')->name('blog.category.delete');
Route::get('dashboard/blog/category/show/{id}', 'BlogcategoryController@show')->name('blog.category.show');
Route::post('dashboard/blog/category/update', 'BlogcategoryController@update')->name('blog.category.update');

// blog controller route start
Route::get('dashboard/blog', 'BlogController@index')->name('blog.index');
Route::post('dashboard/blog/store', 'BlogController@store')->name('blog.store');
Route::get('dashboard/blog/delete/{id}', 'BlogController@delete')->name('blog.delete');
Route::get('dashboard/show/{id}', 'BlogController@show')->name('blog.show');
Route::get('dashboard/blog/update/{id}', 'BlogController@update')->name('blog.update');
Route::post('dashboard/blog/update/post/{id}', 'BlogController@updatepost')->name('blog.update.post');

// about controller route start
Route::get('dashboard/about', 'AboutController@index')->name('about.index');
Route::post('dashboard/about/store', 'AboutController@store')->name('about.store');
Route::post('dashboard/about/update', 'AboutController@update')->name('about.update');
Route::get('dashboard/about/show', 'AboutController@show')->name('about.detail.show');
Route::post('dashboard/about/details', 'AboutController@extra')->name('about.detail.extra');
Route::get('dashboard/about/details/delete/{id}', 'AboutController@extradelete')->name('about.detail.desctiption.delete');

// testimonial controller route start
Route::get('dashboard/testimonial', 'TestimonialController@index')->name('testimonial.index');
Route::post('dashboard/testimonial/store', 'TestimonialController@store')->name('testimonial.store');
Route::get('dashboard/testimonial/delete/{id}', 'TestimonialController@delete')->name('testimonial.delete');


// all banner controller route start
Route::get('dashboard/banner/background', 'BackgrondController@allbanner')->name('all.banner');
Route::post('dashboard/all/banner/background/store', 'BackgrondController@allbannerstore')->name('all.banner.store');
Route::get('dashboard/all/banner/background/show/{id}', 'BackgrondController@allbannershow')->name('all.banner.show');
Route::get('dashboard/all/banner/background/update/{id}', 'BackgrondController@allbannerupdate')->name('all.banner.update');


Route::get('dashboard/getintouch','GetinController@getintouch')->name('getintouch');
Route::post('dashboard/getintouch/store','GetinController@getintouchstore')->name('getintouch.store');
Route::get('dashboard/getintouch/show/{id}','GetinController@getintouchshow')->name('getintouch.show');
