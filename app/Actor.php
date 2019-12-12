<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    //
    //public $table = 'actors';

    public function getNombreCompleto() {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function favoriteMovie(){
        return $this->belongsTo('App\Movie','favorite_movie_id');
    }

    public function movies()
    {
        return $this->belongsToMany('App\Movie', 'actor_movie', 'actor_id', 'movie_id');
    }


}
