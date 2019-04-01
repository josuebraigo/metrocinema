<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Actor;
use Director;

class Movie extends Model
{
    //
    protected $table = 'movies';

    protected $guarded = ['id'];

    /*public function movies() {

    	return $this->belongsToMany('App\Actor');

    }*/

    public function director() {

    	return $this->belongsTo('App\Director');

    }
}
