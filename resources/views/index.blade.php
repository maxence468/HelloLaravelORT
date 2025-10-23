@extends('layout')

@section('title', 'Tous les articles')

@section('main')
    <h1 class="text-center">Tous les articles</h1>

    <table class="table table-striped table-hover text-center">
        <tr>
            <td>ID</td>
            <td>Title</td>
            <td>Publication date</td>
            <td>Modifier l'article</td>
            <td>Supprimer l'article</td>
        </tr>

        @foreach($articles as $article)
            <tr>
                <td>{{$article->id}}</td>
                <td><a href="/articles/{{$article->id}}">{{$article->title}}</a></td>
                <td>{{$article->published_at}}</td>
                <td><a href="/articles/{{$article->id}}/edit" class="btn btn-primary">Modifier</a></td>
                <td> <form action="/articles/{{$article->id}}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">Supprimer</button>
                    </form> </td>
            </tr>
        @endforeach
    </table>
@endsection('main')
