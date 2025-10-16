<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tous les articles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<header>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                <a class="navbar-brand" href="#">Articles</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="/articles">Tous les articles</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/articles/create">Créer article</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
</header>


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
</body>
</html>
