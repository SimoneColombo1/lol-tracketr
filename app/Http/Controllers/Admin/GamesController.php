<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Games;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games = Games::with('campioni', 'statistiche', 'errori')->get();
        return view('admin.games.index', compact("games"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.games.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $newGame = new Games();
        $newGame->Risultato = $data["Risultato"];
        $newGame->data = $data["data"];
        $newGame->ruolo = $data["ruolo"];
        $newGame->save();
        return redirect()->route('admin.games.show', $newGame->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Games $game)
    {

        return view('admin.games.show', compact("game"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Games $game)
    {
        return view('admin.games.edit', compact("game"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Games $game)
    {
        $data = $request->all();

        $game->update($data);

        return redirect()->route('admin.games.show', $game);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Games $game)
    {
        $game->delete();
        return redirect()->route('admin.games.index');
    }
}
