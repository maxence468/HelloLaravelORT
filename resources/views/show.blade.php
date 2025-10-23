@extends('neuralglass')

@section('title', 'Un Article')

@section('main')
    <div class="flex justify-center flex-col px-30 py-40">
        <h1 class="text-[40px]">Article {{$article->id}}</h1>
        <p>Titre : {{$article->title}}</p>
        <p>Date publication : {{$article->published_at}}</p>
        <p>Contenu : {{$article->content}}</p>
        <p>Photo : {{$article->picture}}</p>
        <p>Date Création : {{$article->created_at}}</p>
        <p>Date modification : {{$article->updated_at}}</p>
    </div>

    <div class="cta-buttons">
        <p><a href="/articles/{{$article->id}}/edit" class="cta-button">Modifier l'article</a></p>
        <form action="/articles/{{$article->id}}" method="post">
            @csrf
            @method('delete')
            <button class="cta-button secondary">Supprimer</button>
        </form>
    </div>
@endsection('main')






