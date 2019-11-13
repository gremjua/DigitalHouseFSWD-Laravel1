<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
    return view('home', ['name' => 'Samantha']);
});

Route::get('peliculas', function () {
    $peliculas = [  ['titulo' => 'Toy Story',
                    'rating' => 9.5],
                    ['titulo' => 'Monsters Inc',
                    'rating' => 9],
                    ['titulo' => 'Grandes Héroes',
                    'rating' => 10],
                    ['titulo' => 'Coco',
                    'rating' => 8.2],
                    ['titulo' => 'Cars',
                    'rating' => 7]];
    $vac = compact ('peliculas');
    return view('peliculas', $vac);
});
