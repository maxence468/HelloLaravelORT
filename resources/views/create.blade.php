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
        <input type="text" name="title" placeholder="Titre">
        <textarea name="content"></textarea>
        <input type="text" name="picture" placeholder="Photo">
        <button name="btnCreate">Créer</button>
    </form>
</body>
</html>
