<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\Character;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){

        $characters = Character::all();

        return view('index', compact('characters'));
    }
}
