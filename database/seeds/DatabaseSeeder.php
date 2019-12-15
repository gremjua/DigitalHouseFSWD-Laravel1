<?php

use Illuminate\Database\Seeder;
use App\Actor;
use App\Movie;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $actors = factory(Actor::class)->times(3)->create();
        $movies = factory(Movie::class)->times(3)->create();

        foreach($movies as $movie) {
            $movie->actors()->saveMany($actors->random(1));
        }
        foreach($actors as $actor) {
            $actor->favoriteMovie()->associate($movies->random(1)->first())->save();
        }
    }
}
