<?php
// ho utilizzato...
// php artisan make:controller PageController per creare il controller che di fatto e' una classe


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // creo una public function che gestisca la logica dell'home page
    public function homepage(){
        return view('homepage');
    }
}