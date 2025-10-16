<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tous les articles</title>
</head>
<body>
        <h1>Tous les articles</h1>

        <table>
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
                <td><a href="/articles/{{$article->id}}/edit">Modifier</a></td>
                <td> <form action="/articles/{{$article->id}}" method="post">
                        @csrf
                        @method('delete')
                        <button>Supprimer</button>
                    </form> </td>
            </tr>
        @endforeach
        </table>
<a href="/articles/create">Créer un nouvel article</a>
</body>
</html>
