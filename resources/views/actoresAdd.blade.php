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
            <input type="text" name="first_name" value="{{old("first_name")}}">
        </p>
        <p>
            <label for="last_name">Apellido: </label>
            <input type="text" name="last_name" value="{{old("last_name")}}">
        </p>
        <p>
            <label for="rating">Rating: </label>
            <input type="text" name="rating" value="{{old("rating")}}">
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