@extends('layouts.app')

@push('styles')
    {{-- <link href="{{ asset('css/peliculas.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endpush

@section('title')
    Peliculas
@endsection

@section('heading')
    <h1>Peliculas</h1>
@endsection

@section('content')
    <form action="/peliculas/add" method="get">
        <button type="submit">Agregar</button>
    </form>
    <ul>
        @forelse ($peliculas as $pelicula)
            <li><a href="/pelicula/{{$pelicula->id}}">{{$pelicula['title']}}</a>@if ($pelicula['rating']>8)
                <b>RECOMENDADA</b>
            @endif</li>
        @empty
            No hay peliculas!
        @endforelse
    </ul>
    @if(!empty($peliculas))
        {{ $peliculas->appends(request()->except('page'))->links() }}
    @endif
@endsection