<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{    
    /**
     * index
     * 
     * Controller per la view 'home' (Pagina principale)
     *
     * @return void
     */
    public function index() {

        $movies = Movie::all();     //Recupero tutti i dati dalla tabella movies

        return view('home', compact('movies'));
    }
}
