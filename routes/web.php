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
    return view('welcome');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/contacts', function () {
    $data = [
        'messaggio' => 'ciao a tutti i contatti',
        'contatti' => [
            'trollollero',
            'trolol',
            'lol',
            'dehihoho',
            ':)'
        ]
    ];
    return view('contacts', $data);
});
