<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    $username = 'Jean-Pierre';
    $greeting = 'Yo ';

    return view('home',[
        'nom_utilisateur'=>$username,
        'greeting'=>$greeting
    ]);
});

