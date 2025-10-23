@extends('neuralglass')

@section('title', 'Tous les articles')

@section('main')
    <h1 class="text-center text-5xl m-10">Tous les articles</h1>
    <br>
    <div class="flex justify-center">
        <table class=" border-5 border-solid text-center text-2xl bg-indigo-400/20 ">
            <tr class="border-2 border-solid"  >
                <td class="border-2 border-solid">ID</td>
                <td class="border-2 border-solid">Title</td>
                <td class="hidden md:block">Publication date</td>
                <td class="border-2 border-solid">Modifier l'article</td>
                <td class="border-2 border-solid">Supprimer l'article</td>
            </tr>

            @foreach($articles as $article)
                <tr class="border-2 border-solid hover:bg-indigo-500/30">
                    <td class="px-10 border-2 border-solid">{{$article->id}}</td>
                    <td class="border-2 border-solid"><a href="/articles/{{$article->id}}">{{$article->title}}</a></td>
                    <td class="hidden md:block  ">{{$article->published_at}}</td>
                    <td class="border-2 border-solid"><a href="/articles/{{$article->id}}/edit" class="text-black bg-emerald-500 hover:bg-emerald-600 px-6 py-4 m-2 rounded-lg hover:cursor-pointer">Modifier</a></td>
                    <td class="border-2 border-solid"> <form action="/articles/{{$article->id}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="bg-red-500 hover:bg-red-600 px-6 py-4 m-2 rounded-lg hover:cursor-pointer shadow-xl">Supprimer</button>
                        </form> </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection('main')
