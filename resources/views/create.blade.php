<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create article</title>
</head>
<body>
<h1>Create article</h1>
    <form action="/articles" method="post">
        @csrf
        <input @error('title') style="border-color:red;" @enderror type="text" name="title" placeholder="Titre" value="{{old('title')}}">
        <br>
        @error('title')
            <p style="color:red;">{{$message}}</p>
        @enderror
        <br>
        <textarea @error('content') style="border-color:red;" @enderror name="content">{{old('content')}}</textarea>
        <br>
        @error('content')
            <p style="color:red;">{{$message}}</p>
        @enderror
        <br>
        <input type="text" name="picture" placeholder="Photo" value="{{old('picture')}}">
        <button name="btnCreate">Créer</button>
    </form>
<a href="/articles">Afficher tous les articles</a>
</body>
</html>
