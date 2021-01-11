<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    // prendo lista comics
    $comics = config('comics');
    
    // stampa di prova, che sarebbe come fare le seguenti operazioni:
    // var_dump($comics);
    // die(); a fine stampa termina il tutto
    // dd($comics);

    // la scritta del secondo parametro è come se lo scrivessi così: ['comics'] => $comics
    return view('home', compact('comics'));
});
