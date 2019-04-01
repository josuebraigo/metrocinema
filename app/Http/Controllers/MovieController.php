<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Movie;
use App\Actor;
use App\Director;

class MovieController extends Controller
{
    //

    public function index() {
    	$movies = Movie::orderBy('id', 'ASC')->paginate(4);
    	return view('index', compact('movies'));
    }

    public function show($id) {
    	$movie = Movie::find($id);
    	return view('show', compact('movie'));

    }

    public function create() {
    	$actors = Actor::all();
    	$directors = Director::all();
    	return view('create', compact('actors', 'directors'));
    }

    public function edit($id) {
    	$movie = Movie::find($id);
    	$actors = Actor::all();
    	$directors = Director::all();
    	return view('edit', compact('movie', 'actors', 'directors'));
    }

    public function store(Request $request) {
    	$movie = new Movie($request->all());
    	$movie->slug = Str::slug($request->name, '-');
    	$movie->save();

    	dd('Película agregada');
    }

    public function update(Request $request, $id) {
    	$movie = Movie::find($id);
    	$movie->name = $request->name;
    	$movie->duration = $request->duration;
    	$movie->year = $request->year;
    	$movie->country = $request->country;
    	$movie->sinopsys = $request->sinopsys;
    	$movie->trailer = $request->trailer;
    	$movie->poster = $request->poster;
    	$movie->actor_id = $request->actor_id;
    	$movie->director_id = $request->director_id;

    	$movie->slug = Str::slug($request->name, '-');
    	$movie->save();

    	dd('Pelicula modificada');
    }

    public function destroy($id) {
    	$movie = Movie::find($id);
    	dd('$movie');
    }
}
