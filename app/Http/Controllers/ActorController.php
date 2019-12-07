<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;

class ActorController extends Controller
{
    //
    public function directory() {
        $actores = Actor::orderBy('first_name')->get();
        return view('actores', compact('actores'));
    }

    public function show($id) {
        $actor = Actor::find($id);
        return view('actor', compact('actor'));
    }

    public function search() {
        $text = $_GET['actorContiene'];
        $actores = Actor::where('first_name', 'like',"%$text%")
                    ->orWhere('last_name', 'like', "%$text%")
                    ->orderBy('first_name')
                    ->get();
        return view('actores', compact('actores'));
    }
}
