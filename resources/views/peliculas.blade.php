@extends('layouts.default')

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
    <ul>
        @forelse ($peliculas as $pelicula)
            <li>{{$pelicula['title']}}@if ($pelicula['rating']>8)
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