<?php

// quando use e' scritto cosi' corrisponde ad una sorta di import
use Illuminate\Support\Facades\Route;
// rendo disponibile alla route l'indirizzo del controller lo "faccio notare a route"
use App\Http\Controllers\PageController;

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
// come dico alla rotta di eseguire le funzioni del controller?

// passo come argomento un array che dira'[di questa cosa se ne occupa [argomento 1], alla funzione [argomento 2] ]
// possiamo avere un controller per le pagine statiche e un controller che gestisce un modello che viene da DB o set di dati da gestire(best practice)
Route::get('/',[PageController::class, 'index'])->name('app');

// Route::get('details/{id}', [PageController::class, 'detail'])->name('details');
// questa parte la sposto nella funzione di PageController
    // function(){
// return view('welcome')};