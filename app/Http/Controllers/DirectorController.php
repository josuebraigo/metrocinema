<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Director;

class DirectorController extends Controller
{
    //

    public function index() {
    	$directors = Director::all();
    	return view('directores', compact('directors')); 
    }

    public function create() {
    	return view('crear-director');
    }

    public function store(Request $request) {
    	$director = new Director($request->all());
    	$director->save();
    	dd('Director guardado');
    }
}
