@extends('layouts.app')

@section('page-title', 'homepage')

@section('main-content')
    <h1>
        Games
    </h1>
    @foreach ($games as $game)
        <li>
            @if ($game->Risultato === 0)
                Lose <a href="{{ route('admin.games.show', $game) }}">show</a>
                <a href="{{ route('admin.games.edit', $game) }}">edit</a>
                <form action="{{ route('admin.games.destroy', $game) }}" method="POST">
                    @method('DELETE')
                    <input type="submit">
                </form>
            @else
                Win <a href="{{ route('admin.games.show', $game) }}">show</a>
                <a href="{{ route('admin.games.edit', $game) }}">edit</a>
                <form action="{{ route('admin.games.destroy', $game) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="delete">
                </form>
            @endif

            {{ $game->statistiche->kill }}
            {{ $game->campioni->nome ?? 'Nessun campione' }}
        </li>
    @endforeach
@endsection
