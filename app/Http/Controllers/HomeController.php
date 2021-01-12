<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller{
    public function index(){

        // prendo lista comics
         $comics = config('comics');

        // stampa di prova, che sarebbe come fare le seguenti operazioni:
        // var_dump($comics);
        // die(); a fine stampa termina il tutto
        // dd($comics);


        // la scritta del secondo parametro è come se lo scrivessi così: ['comics'] => $comics
        return view('home', compact('comics'));
    }
}
