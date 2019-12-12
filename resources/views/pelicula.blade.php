@extends('layouts.default')

@push('styles')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endpush

@section('title')
    @if (isset($pelicula))
        {{$pelicula->title}}
    @else
        Pelicula ID Invalido
    @endif

@endsection

@section('heading')
    <h1>@if (isset($pelicula))
        {{$pelicula->title}}
    @else
        Pelicula ID Invalido
    @endif</h1>
@endsection

@section('content')

    @if (isset($pelicula))
        <p>Rating: {{$pelicula->rating}}</p>
        <p>Premios: {{$pelicula->awards}}</p>
        <p>Fecha de estreno: {{$pelicula->release_date}}</p>
        <p>Duración: @if (isset($pelicula->length))
            {{$pelicula->length}}
        @endif</p>
        <p>Género: @if (isset($pelicula->genre))
            {{$pelicula->genre->name}}
        @endif</p>
        <p>Actores: </p>
        <ul>
            @forelse ($pelicula->actors as $actor)
                <li>{{$actor->getNombreCompleto()}}</li>
            @empty
                None
            @endforelse
        </ul>

    @endif
@endsection