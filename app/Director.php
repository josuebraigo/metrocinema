<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    //
	protected $table = 'directors';

    protected $guarded = ['id'];

    public function movies() {

    	return $this->hasMany('App\Movie');

    }
}
