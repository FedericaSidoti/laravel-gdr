<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\Character;
use App\Models\Type;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {

        $characters = Character::all()->sortBy('level');
        $types = Type::all();

        return view('characters.index', compact('characters', 'types'));
    }

    public function show(Character $character)
    {
        return view('characters.show', compact('character'));
    }

    public function create()
    {
        $types = Type::all();

        return view('characters.create', compact('types'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $newCharacter = Character::create($data);

        return redirect()->route('characters.show', $newCharacter->id);
    }

    public function edit(Character $character)
    {

        $types = Type::all();

        return view('characters.edit', compact('character', 'types'));
    }

    public function update(Request $request, Character $character)
    {
        $data = $request->all();
        $character->update($data);

        return redirect()->route('characters.show', $character->id);
    }

    public function destroy(Character $character)
    {

        $character->delete();

        return redirect()->route('characters.index');
    }
}
