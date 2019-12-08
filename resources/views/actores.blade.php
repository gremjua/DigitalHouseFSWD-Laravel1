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
    <form @unless(strpos(url()->current(),'buscar'))action="/actores/buscar"@endunless method="get">
        {{-- @csrf --}}
        <label for="actorContiene">Buscar actor: </label>
        <input type="text" name="actorContiene" id="buscadorActores" @if(isset($_GET['actorContiene']))value="{{$_GET['actorContiene']}}"@endif>
        <p>        
            <button type="reset" value="reset">Limpiar</button>
        </p>
    </form>

    <ul>
        @forelse ($actores as $actor)
            <li><a href="/actor/{{$actor->id}}">{{$actor->getNombreCompleto()}}</a></li>
        @empty
            No hay actores!
        @endforelse
        @if(!empty($actores))
            {{ $actores->appends(request()->except('page'))->links() }}
        @endif
    </ul>
@endsection