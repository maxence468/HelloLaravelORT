@extends('layout')

@section('title', 'Modifier Article')

@section('main')
    <h1>Edit article {{$article->id}}</h1>
    <form method="post" action="/articles/{{$article->id}}">
        @csrf
        @method('patch')
        <input @error('title') style="border-color:red;" @enderror type="text" name="title" placeholder="Titre" value="{{old('title') ?? $article->title}} ">
        <br>
        @error('title')
        <p style="color:red;">{{$message}}</p>
        @enderror
        <br>
        <textarea @error('content') style="border-color:red;" @enderror name="content">{{old('content') ?? $article->content}}</textarea>
        <br>
        @error('content')
        <p style="color:red;">{{$message}}</p>
        @enderror
        <br>
        <input type="text" name="picture" placeholder="Photo" value="{{old('picture') ?? $article->picture}}">
        <br>
        <button name="btnUpdate">Mettre à jour</button>
    </form>

    <a href="/articles/{{$article->id}}">Revenir en arrière</a>
@endsection('main')
