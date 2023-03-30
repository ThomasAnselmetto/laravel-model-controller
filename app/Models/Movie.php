<?php

// usato questo per crearlo
// php artisan make:model Movie

// la magia di laravel (se si seguono gli standard questo model andra' a cercare una tabella che si chiama movie e andra' a leggersi tutte le colonne e se li prende)ora bisogna creare il DB,collegarlo,di tabella movie e di alcune righe nella tabella!!!

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    // questo e' un trait(dentro la classe)
    // use HasFactory;
}