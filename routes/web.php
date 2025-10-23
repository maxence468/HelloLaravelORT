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

Route::get('/articles', [ArticleController::class, 'index']);

Route::get('/articles/create', [ArticleController::class, 'create']);

Route::get('/articles/{article}', [ArticleController::class, 'show']);

Route::post('/articles', [ArticleController::class,'store']);

Route::get('/articles/{article}/edit', [ArticleController::class,'edit']);

Route::patch('/articles/{article}', [ArticleController::class, 'update'] );

Route::delete('/articles/{article}', [ArticleController::class,'destroy']);
