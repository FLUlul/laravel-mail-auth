@extends('layouts.main-layout')
@section('content')

    <h3>videogames:</h3>
    <videogame-component authorized = {{Auth::check()}}></videogame-component>

@endsection