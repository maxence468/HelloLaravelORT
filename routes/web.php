<?php

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

Route::get('/articles',function(){
    //recupere tous les articles
    $articles = Article::all();

    //envoie à une vue
    return view('index', compact('articles'));
});

Route::get('/articles/create', function(){

       return view('create');
});

Route::get('/articles/{id}', function($id){
    //recuperer 1 seul article
    $article = Article::findOrFail($id);

    //envoyer à une vue
    return view('show', compact('article'));
});

Route::post('/articles', function(){
    $a = new Article;
    $a->title = request('title');
    $a->content = request('content');
    $a->picture = request('picture');
    $a->published_at = date('Y-m-d h:i:s');

    $a->save();

    return redirect('/articles/'.$a->id);
});

