<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Games;
use Illuminate\Http\Request;

class CampioniController extends Controller
{

    public function index()
    {
        $game = Games::all();
    }


    public function create() {}


    public function store(Request $request) {}

    public function show(Games $games) {}


    public function edit(string $id) {}


    public function update(Request $request, string $id) {}


    public function destroy(Games $games)
    {
        $games->delete();
    }
}
