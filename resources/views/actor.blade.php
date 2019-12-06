@extends('layouts.default')

@push('styles')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endpush

@section('title')
    @if (isset($actor))
        {{$actor->getNombreCompleto()}}
    @else
        Actor ID Invalido
    @endif

@endsection

@section('heading')
    <h1>@if (isset($actor))
        {{$actor->getNombreCompleto()}}
    @else
        Actor ID Invalido
    @endif</h1>
@endsection

@section('content')

    @if (isset($actor))
        <p>Rating: {{$actor->rating}}</p>
        <p>Favorite movie: {{$actor->favorite_movie_id}}</p>
    @endif
@endsection