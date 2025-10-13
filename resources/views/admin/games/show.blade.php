@extends('layouts.app')

@section('page-title', 'homepage')

@section('main-content')
    <h1>
        Games
    </h1>
    @if ($game->Risultato === 0)
        Lose
    @else
        Win
    @endif
@endsection
