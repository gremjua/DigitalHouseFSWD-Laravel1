<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Movie;

class Genre extends Model
{
    //
    //public $table = 'genres';
    public function movies() {
        return $this->hasMany(Movie::class,'genre_id');
    }
}
