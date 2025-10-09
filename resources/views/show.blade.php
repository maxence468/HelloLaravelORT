<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Article {{$article->id}}</title>
</head>
<body>
<h1>Article {{$article->id}}</h1>
<p>Titre : {{$article->title}}</p>
<p>Date publication : {{$article->published_at}}</p>
<p>Contenu : {{$article->content}}</p>
<p>Photo : {{$article->picture}}</p>
<p>Date Création : {{$article->created_at}}</p>
<p>Date modification : {{$article->updated_at}}</p>





</body>
</html>
