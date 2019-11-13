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
    $peliculas = ['Toy Story', 'Grandes Hérores', 'Coco', 'Buscando a Nemo', 'Monsters Inc'];
    $vac = compact ('peliculas');
    return view('peliculas', $vac);
});
