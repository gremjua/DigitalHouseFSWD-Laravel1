@extends('layouts.default')

@push('styles')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endpush

@section('title')
    Actores
@endsection

@section('heading')
    <h1>Actores</h1>
@endsection

@section('content')
    {{-- <ul>
        @forelse ($peliculas as $pelicula)
            <li>{{$pelicula['titulo']}}@if ($pelicula['rating']>8)
                RECOMENDADA
            @endif</li>
        @empty
            No hay peliculas!
        @endforelse
    </ul> --}}
@endsection