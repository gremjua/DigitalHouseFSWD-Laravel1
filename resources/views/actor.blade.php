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
        <p>Favorite movie: @if (isset($actor->favoriteMovie))
            {{$actor->favoriteMovie->title}}
        @endif</p>
        <p>Appears in movies: </p>
        <ul>
            @forelse ($actor->movies as $movie)
                <li>{{$movie->title}}</li>
            @empty
                None
            @endforelse
        </ul>

        <form action="/actor/{{$actor->id}}/edit" method="get">
            <button type="submit">Editar</button>
        </form>
        <form action="/actor" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="id" value="{{$actor->id}}">
            <button type="submit">Eliminar</button>
        </form> 
        

    @endif
@endsection