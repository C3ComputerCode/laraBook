<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    public function photos(){
        return $this->hasMany('App\Models\Photo');
    }

    public function bookCategory(){
        return $this->belongsTo('App\Models\BookCategory');
    }


}
