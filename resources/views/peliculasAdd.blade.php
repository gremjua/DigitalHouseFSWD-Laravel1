@extends('layouts.app')

@push('styles')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endpush

@section('title')
    Agregar Peliculas
@endsection

@section('heading')
    <h1>Agregar Peliculas</h1>
@endsection

@section('content')
    <form action="/peliculas/add" method="post">
        {{ csrf_field() }}
        <p>
            <label for="title">Titulo: </label>
            <input type="text" name="title" value="{{old("title")}}">
        </p>
        <p>
            <label for="rating">Rating: </label>
            <input type="text" name="rating" value="{{old("rating")}}">
        </p>
        <p>
            <label for="awards">Numero de premios: </label>
            <input type="text" name="awards" value="{{old("awards")}}">
        </p>
        <p>
            <label for="release_date">Fecha de estreno: </label>
            <input type="date" name="release_date" value="{{old("release_date")}}">
        </p>
        <p>
            <label for="length">Duracion: </label>
            <input type="text" name="length" value="{{old("length")}}">
        </p>
        <p>
            <label for="genre_id">Genero: </label>
            <select name="genre_id" id="genre" value="{{old("genre_id")}}">
                @foreach ($generos as $genero)
                    <option value="{{$genero->id}}">{{$genero->name}}</option>
                @endforeach
            </select>
        </p>
        <p>        
            <button type="submit">Agregar</button>
            <button type="reset" value="reset">Limpiar</button>
        </p>
    </form>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <p>Error de datos</p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>

        </div>
        
    @endif
@endsection