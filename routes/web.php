<?php

use App\Http\Controllers\ArticleController;
use App\Models\Article;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


//dd(Auth::user());


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function() {
    Auth::login(User::find(23));
    return redirect('/articles');
});
Route::get('/logout', function() {
    Auth::logout();
    return redirect('/articles');
});


Route::get('/home', function () {
    $username = 'Jean-Pierre';
    $greeting = 'Yo ';

    return view('home',[
        'nom_utilisateur'=>$username,
        'greeting'=>$greeting
    ]);
});


//Route::resource('articles',ArticleController::class);
Route::get('/articles', [ArticleController::class, 'index']);

Route::get('/articles/create', [ArticleController::class, 'create'])->middleware('isConnected');

Route::get('/articles/{article}', [ArticleController::class, 'show']);

Route::post('/articles', [ArticleController::class,'store'])->middleware('isConnected');

Route::get('/articles/{article}/edit', [ArticleController::class,'edit']);

Route::patch('/articles/{article}', [ArticleController::class, 'update'] );

Route::delete('/articles/{article}', [ArticleController::class,'destroy']);


Route::get('/test',function(){
    return view('neuralGlass');

});
