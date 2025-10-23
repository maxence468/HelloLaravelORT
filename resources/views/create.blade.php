@extends('neuralglass')

@section('title', 'Create Article')

@section('main')

    <h1>Create article</h1>
    <div class="contact-form glass">
        <form action="/articles" method="post">
            @csrf
            <div class="form-group">
                <input @error('title') style="border-color:red;" @enderror type="text" name="title" placeholder="Titre" value="{{old('title')}}">
                <br>
                @error('title')
                <p style="color:red;">{{$message}}</p>
                @enderror
            </div>
            <br>
            <div class="form-group">
                <textarea @error('content') style="border-color:red;" @enderror name="content">{{old('content')}}</textarea>
                <br>
                @error('content')
                <p style="color:red;">{{$message}}</p>
                @enderror
            </div>
            <br>
            <div class="form-group">
                <input type="text" name="picture" placeholder="Photo" value="{{old('picture')}}">
            </div>
            <button type="submit" name="btnCreate" class="submit-btn">Créer</button>
        </form>
    </div>
@endsection('main')

