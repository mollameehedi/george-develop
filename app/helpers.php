<?php

use Illuminate\Support\Facades\Auth;

function user(){
    return Auth::user();
}
function user_name($id){
    return App\User::find($id)->name;
}

