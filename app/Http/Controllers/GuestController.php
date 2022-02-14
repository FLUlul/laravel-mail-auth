<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Videogame;

class GuestController extends Controller
{
    public function home() {
        return view('pages.home');
    }

    public function gamesList() {

        $videogames = Videogame::all();

        return json_encode($videogames);
    }
}
