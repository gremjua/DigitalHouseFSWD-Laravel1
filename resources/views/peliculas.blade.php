@extends('layouts.default')

@push('styles')
    <link href="{{ asset('css/peliculas.css') }}" rel="stylesheet">
    {{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
@endpush

@section('title')
    Peliculas
@endsection

@section('heading')
    <h1>Peliculas</h1>
@endsection

@section('content')
    <ul>
        @forelse ($peliculas as $pelicula)
            <li>{{$pelicula['titulo']}}@if ($pelicula['rating']>8)
                RECOMENDADA
            @endif</li>
        @empty
            No hay peliculas!
        @endforelse
    </ul>
@endsection