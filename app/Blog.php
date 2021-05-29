<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $guarded = ['_token'];

    function blog_category(){
        return $this->hasOne('App\BlogCategory','id', 'category_id');
     }
}
