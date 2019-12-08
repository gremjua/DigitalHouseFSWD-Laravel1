@extends('layouts.default')

@push('styles')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endpush

@section('title')
    Agregar Actores
@endsection

@section('heading')
    <h1>Agregar Actores</h1>
@endsection

@section('content')
    <form action="/actores/add" method="post">
        {{ csrf_field() }}
        <p>
            <label for="first_name">Nombre: </label>
            <input type="text" name="first_name">
        </p>
        <p>
            <label for="last_name">Apellido: </label>
            <input type="text" name="last_name">
        </p>
        <p>
            <label for="rating">Rating: </label>
            <input type="text" name="rating">
        </p>
        <p>        
            <button type="submit">Agregar</button>
            <button type="reset" value="reset">Limpiar</button>
        </p>
    </form>
@endsection