<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\Character;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {

        $characters = Character::all()->sortBy('level');

        return view('characters.index', compact('characters'));
    }

    public function show(Character $character)
    {
        return view('characters.show', compact('character'));
    }

    public function create() {

        return view('characters.create');
    }

    public function store(Request $request) {
        $data = $request->all(); 

        $newCharacter = Character::create($data);

        return redirect()->route('characters.index');
    }

    public function edit(Character $character) {

        return view('characters.edit', compact('character'));
    }
}
