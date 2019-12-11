<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Genre;

class MovieController extends Controller
{
    //
    public function directory() {
        $peliculas = Movie::orderBy('title')
            ->paginate(10);
        return view('peliculas', compact('peliculas'));
    }

    public function add() {
        $generos = Genre::all();
        return view('peliculasAdd', compact('generos'));
    }

    public function store(Request $req) {

        $rules = ['title' => 'required|string|unique:movies,title|max:255',
                    'rating' => 'required|numeric|min:0|max:10',
                    'awards' => 'required|integer|min:0',
                    'release_date' => 'required|date',
                    'length' => 'required|integer|min:0',
                    'genre_id' => 'required'];
        $errors = ['required' => 'El campo :attribute es requerido'];
        $this->validate($req, $rules, $errors);

        $movie = new Movie();

        $movie->title = $req->title;
        $movie->rating = $req->rating;
        $movie->awards = $req->awards;
        $movie->release_date = $req->release_date;
        $movie->length = $req->length;
        $movie->genre_id = $req->genre_id;

        $movie->save();
        return redirect('peliculas');
    }
}
