<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;

class ActorController extends Controller
{
    //
    public function directory() {
        $actores = Actor::orderBy('first_name')
            ->paginate(10);
        return view('actores', compact('actores'));
    }

    public function show($id) {
        $actor = Actor::find($id);
        return view('actor', compact('actor'));
    }

    public function search() {
        $text = isset($_GET['actorContiene'])?$_GET['actorContiene']:'';
        $actores = Actor::where('first_name', 'like',"%$text%")
                    ->orWhere('last_name', 'like', "%$text%")
                    ->orderBy('first_name')
                    ->paginate(10);
        return view('actores', compact('actores'));
    }

    public function add() {
        return view('actoresAdd');
    }

    public function store(Request $req) {

        $rules = ['first_name' => 'required',
                    'last_name' => 'required',
                    'rating' => 'required'];
        $errors = ['required' => 'El campo :attribute es requerido'];
        $this->validate($req, $rules, $errors);

        $actor = new Actor();

        $actor->first_name = $req->first_name;
        $actor->last_name = $req->last_name;
        $actor->rating = $req->rating;
        $path = $req->file('photo')->store('public');
        $nombreArchivo = basename($path);
        $actor->photo = $nombreArchivo;
        // $actor->favorite_movie_id = $req->favorite_movie_id;

        $actor->save();
        return redirect('actores');
    }

    public function edit($id) {
        $actor = Actor::find($id);

        return view('actorEdit', compact('actor'));
    }

    public function update(Request $req, $id) {
        $actor = Actor::find($req->id);

        $actor->first_name = $req->first_name;
        $actor->last_name = $req->last_name;
        $actor->rating = $req->rating;
        // $actor->favorite_movie_id = $req->favorite_movie_id;

        $actor->save();
        return redirect('actores');
    }

    public function destroy(Request $req) {
        $actor = Actor::find($req->id);
        $actor->delete();
        return redirect('/actores');
    }
}
