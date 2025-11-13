<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller{
    public function index(){
        //recupere tous les articles
        $articles = Article::all();
        //envoie à une vue
        return view('index', compact('articles'));
    }

    public function create(){


        return view('create');
    }

    public function show(Article $article){
        return view('show', compact('article'));
    }

    public function store(){
        //valider les données (verifier qu'elles sont bien remplies)
        request()->validate([
            'title'=>'required|min:5|max:50',
            'content'=>'required'
        ]);

        //les données sont validés
        $a = new Article;
        $a->title = request('title');
        $a->content = request('content');
        $a->picture = request('picture');
        $a->published_at = date('Y-m-d h:i:s');

        $a->save();

        return redirect('/articles/'.$a->id);
    }

    public function edit(Article $article){
        //envoyer à une vue
        return view('edit', compact('article'));
    }

    public function update(Article $article){
        //valider les données (verifier qu'elles sont bien remplies)
        request()->validate([
            'title'=>'required|min:5|max:50',
            'content'=>'required'
        ]);

        //les données sont validés
        $article->title = request('title');
        $article->content = request('content');
        $article->picture = request('picture');

        $article->save();

        return redirect('/articles/'.$article->id);
    }

    public function destroy(Article $article){
        $article->delete();
        return redirect('/articles');
    }
}
