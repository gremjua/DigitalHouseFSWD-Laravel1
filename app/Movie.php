<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //
    //public $table = 'movies';
    public function genre() {
        return $this->belongsTo(Genre::class,'genre_id');
    }

    public function actors()
    {
        return $this->belongsToMany('App\Actor', 'actor_movie', 'movie_id', 'actor_id')->orderBy('first_name');
    }

    public function isFavoriteForActors() {
        return $this->hasMany('App\Actor', 'favorite_movie_id');
    }
}
