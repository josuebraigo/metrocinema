<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Actor;

class ActorController extends Controller
{
    //

    public function index() {
    	$actors = Actor::all();
    	return view('actores', compact('actors'));
    }

    public function create() {
    	return view('crear-actor');
    }

    public function store(Request $request) {


    	$actor = new Actor($request->all());
    	$actor->save(); 
    	dd('Actor guardado!');

    }
}
