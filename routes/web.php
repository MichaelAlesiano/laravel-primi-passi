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
    $data = [
        'nome' => 'Michael',
        'cognome' => 'Alesiano',
        'dischi' => [
            'Playlist',
            'Fenice'
        ]
    ];
    return view('home',$data);
});

Route::get('contact', function () {
    $data = [
        'nome' => 'Michael',
        'cognome' => 'Alesiano',
        'telefono' => '12382713298713'
    ];
    return view('contatti',$data);
});
