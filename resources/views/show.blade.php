@extends('layout')

@section('title', 'Un Article')

@section('main')
    <h1>Article {{$article->id}}</h1>
    <p>Titre : {{$article->title}}</p>
    <p>Date publication : {{$article->published_at}}</p>
    <p>Contenu : {{$article->content}}</p>
    <p>Photo : {{$article->picture}}</p>
    <p>Date Création : {{$article->created_at}}</p>
    <p>Date modification : {{$article->updated_at}}</p>
    <p><a href="/articles/{{$article->id}}/edit">Modifier l'article</a></p>
    <form action="/articles/{{$article->id}}" method="post">
        @csrf
        @method('delete')
        <button>Supprimer</button>
    </form>
@endsection('main')



