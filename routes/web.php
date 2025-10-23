<?php

use App\Http\Controllers\ArticleController;
use App\Models\Article;
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

Route::resource('articles',ArticleController::class);
