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


//  HOME
Route::get('/', function () {

    // Passaggio titolo logo
    $data = [

        'titleHome' => 'HOME',

        'presentazione' => 'Ciao Sono marco'

    ];

    return view('home', $data);

})->name('homepage');



// ABOUT
Route::get('/about.blade.php', function () {
    
    // Passaggio titolo logo
    $data = [

        'titleAbout' => 'ABOUT',

        'descrizione' => 'questo è il mio primo sito con Laravel'


    ];
    
    return view('about', $data);

})->name('chi-siamo');



// CONTACT
Route::get('/contact.blade.php', function () {
    
    // Passaggio titolo logo
    $data = [

        'titleContact' => 'CONTACT',

        'titolo' => 'contatti',

        'contatti' => ['facebook', 'twitter', 'instagram', 'telefono', 'mail']

    ];
    
    return view('contact', $data);

})->name('contatti');