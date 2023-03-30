<?php
// ho utilizzato...
// php artisan make:controller PageController per creare il controller che di fatto e' una classe


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    // creo una public function che gestisca la logica dell'home page
    public function index(){

     $movies = Movie::all();
        return view('homepage', compact('movies'));
    }

    // public function detail(){
        
        //     $movies = Movie::FindOrFail();
        //        return view('movie-detail', compact('movies'));
        
}