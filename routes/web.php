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

    $data = [

        'titleHome' => 'HOME'

    ];

    return view('home', $data);

})->name('homepage');



// ABOUT
Route::get('/about.blade.php', function () {
    
    $data = [

        'titleAbout' => 'ABOUT'

    ];
    
    return view('about', $data);
})->name('chi-siamo');



// CONTACT
Route::get('/contact.blade.php', function () {
    
    $data = [

        'titleContact' => 'CONTACT'

    ];
    
    return view('contact', $data);
})->name('contatti');