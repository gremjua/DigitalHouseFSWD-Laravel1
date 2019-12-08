@extends('layouts.default')

@push('styles')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endpush

@section('title')
    Editar Actores
@endsection

@section('heading')
    <h1>Editar Actores</h1>
@endsection

@section('content')
    <form action="/actor/{{$actor->id}}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="id" value="{{$actor->id}}">

        <p>
            <label for="first_name">Nombre: </label>
            <input type="text" name="first_name" value="{{$actor->first_name}}">
        </p>
        <p>
            <label for="last_name">Apellido: </label>
            <input type="text" name="last_name" value="{{$actor->last_name}}">
        </p>
        <p>
            <label for="rating">Rating: </label>
            <input type="text" name="rating" value="{{$actor->rating}}">
        </p>
        <p>        
            <button type="submit">Editar</button>
            <button type="reset" value="reset">Limpiar</button>
        </p>
    </form>
@endsection