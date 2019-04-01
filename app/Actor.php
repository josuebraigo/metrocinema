<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Movie;

class Actor extends Model
{
    //
    protected $table = 'actors';

    protected $guarded = ['id'];

    public function actors() {

    	return $this->hasMany('App\Actor');
    	
    }
}
