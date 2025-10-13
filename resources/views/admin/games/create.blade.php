@extends('layouts.app')

@section('page-title', 'homepage')

@section('main-content')

    <form action="{{ route('admin.games.store') }}"method="POST">
        @csrf
        <select name="ruolo">
            <option value="top">Top</option>
            <option value="jungle">Jungle</option>
            <option value="mid">Mid</option>
            <option value="adc">Adc</option>
            <option value="support">Support</option>
        </select>
        <select name="Risultato">
            <option value="0">Lose</option>
            <option value="1">Win</option>
        </select>
        <input type="date" name="data">
        <input type="submit" value="invia">
    </form>
@endsection
