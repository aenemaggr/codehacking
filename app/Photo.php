<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //


    protected $uploads = '/images/';

    protected $fillable = ['file'];


//    for displaying photos route instead of static /images/ etc
    public function getFileAttribute($photo){


        return $this->uploads . $photo;

    }




}
