<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    //
    public function directory() {
        $peliculas = Movie::orderBy('title')
            ->paginate(10);
        return view('peliculas', compact('peliculas'));
    }
}
