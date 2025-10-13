@extends('layouts.app')

@section('page-title', 'homepage')

@section('main-content')
    <h1>
        Games
    </h1>
    @foreach ($games as $game)
        <li>
            @if ($game->Risultato === 0)
                Lose <a href="{{ route('admin.games.show', $game) }}">df</a>
                <a href="{{ route('admin.games.edit', $game) }}">df</a>
            @else
                Win <a href="{{ route('admin.games.show', $game) }}">df</a>
                <a href="{{ route('admin.games.edit', $game) }}">df</a>
            @endif


        </li>
    @endforeach
@endsection
