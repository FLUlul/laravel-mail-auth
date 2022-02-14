<?php

namespace App\Http\Controllers;

use App\Mail\VideogameDeleteMail;
use Illuminate\Http\Request;
use App\Videogame;
use App\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

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
        $user = Auth::user();
        $videogame = Videogame::findOrFail($id);
        $videogame -> delete();

        Mail::to(Auth::user() -> email)->send(new VideogameDeleteMail($videogame, $user));
        Mail::to('admin@flu.com')->send(new VideogameDeleteMail($videogame, $user));
    }

}
