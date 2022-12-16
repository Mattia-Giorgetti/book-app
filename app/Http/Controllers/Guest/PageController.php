<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    //chiamare la route della home
    public function index()
    {
        $movies = Movie::all();
        return view('home', compact('movies'));
    }
    //Chiamare la route della pagina 'top rated"
    public function getTopRated()
    {
        $moviesTopRated = Movie::where('vote', '>', 9)->get();
        //dd($moviesTopRated);
        return view('pages.toprated', compact('moviesTopRated'));
    }
}
