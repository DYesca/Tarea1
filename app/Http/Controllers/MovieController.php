<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    //

    public function index()
    {
        $movies = Movie::all();
        return view('movies.index' , [ 'movies' => $movies]);
    }

    public function showmoviesbygenero($genero)
    {
        $movies = Movie::where('genero', $genero)->get();
        return view('movies.index' , [ 'movies' => $movies]);
    }
}
