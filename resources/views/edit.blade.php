@extends('neuralglass')

@section('title', 'Modifier Article')

@section('main')
    <h1>Edit article {{$article->id}}</h1>
    <div class="contact-form glass">

    <form method="post" action="/articles/{{$article->id}}">
        @csrf
        @method('patch')
        <div class="form-group">

        <input @error('title') style="border-color:red;" @enderror type="text" name="title" placeholder="Titre" value="{{old('title') ?? $article->title}} ">
        <br>
        @error('title')
        <p style="color:red;">{{$message}}</p>
        @enderror
        </div>
        <br>
        <div class="form-group">

        <textarea @error('content') style="border-color:red;" @enderror name="content">{{old('content') ?? $article->content}}</textarea>
        <br>
        @error('content')
        <p style="color:red;">{{$message}}</p>
        @enderror
        </div>
        <br>
        <div class="form-group">

        <input type="text" name="picture" placeholder="Photo" value="{{old('picture') ?? $article->picture}}">
        </div>
        <br>
        <button name="btnUpdate" class="submit-btn">Mettre à jour</button>
    </form>
    </div>

    <a href="/articles/{{$article->id}}" class="hover:cursor-pointer form-group flex justify-center">Revenir en arrière</a>
@endsection('main')
