<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        return view('admin.news.news');
    }
    public function store(Request $request){
        print_r($request->except('_token'));
    }

    public function delete($id){
        echo $id;
    }
}
