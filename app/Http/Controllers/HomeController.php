<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Videogame;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

/*     public function gameDelete($id) {
        $videogame = Videogame::findOrFail($id);

        $videogame -> delete();

        return redirect() -> route('home');
    } */

    public function gameDelete($id) {
        $videogame = Videogame::findOrFail($id);

        $videogame -> delete();
    }

}
