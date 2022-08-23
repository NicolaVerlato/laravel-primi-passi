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

Route::get('/home', function () {

    $data = [
        'name' => 'Olimpia Milano',
        'city' => 'Milano',
        'coach' => 'Ettore Messina',
        'players' => ['Malcolm Delaney', 'Jerian Grant', 'Shavon Shields', 'Nicolò Melli', 'Kyle Hines']
    ];

    return view('home', $data);
})->name('home');

Route::get('/contatti', function () {

    $data = [
        'mail' => 'olimpiamilano@mail.com'
    ];

    return view('contatti', $data);
})->name('contatti');

Route::get('/calendario', function () {
    return view('calendario');
})->name('calendario');

Route::get('/biglietti', function () {
    return view('biglietti');
})->name('biglietti');