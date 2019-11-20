@extends('layouts.default')

@push('styles')
    <link href="{{ asset('css/detallePelicula.css') }}" rel="stylesheet">
@endpush

@section('title')
    @if (isset($peliculas[$id]))
        {{$peliculas[$id]['titulo']}}
    @else
        Pelicula invalida
    @endif
@endsection

@section('heading')
    @if (isset($peliculas[$id]))
        <h1>{{$peliculas[$id]['titulo']}}</h1>
    @else
        <h1 class="error">Pelicula invalida</h1>
    @endif
@endsection

@section('content')
    @if (isset($peliculas[$id]['rating']))
        <h2>Rating: {{$peliculas[$id]['rating']}}</h2>
    @endif
@endsection