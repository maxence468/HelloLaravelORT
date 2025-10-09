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
            </tr>

        @foreach($articles as $article)
            <tr>
                <td>{{$article->id}}</td>
                <td><a href="/articles/{{$article->id}}">{{$article->title}}</a></td>
                <td>{{$article->published_at}}</td>
            </tr>
        @endforeach
        </table>
</body>
</html>
