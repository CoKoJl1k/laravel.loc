@extends('layouts.default')

@section('title', 'Posts')

@section('content')
    <div class="container">
        <h1>Создание поста</h1>
        <form method="POST" action="{{route('posts.store')}}" enctype="multipart/form-data">
            @method('POST')
            @csrf

            <div class="form-group">
                <label for="exampleFormControlTextarea">Заголовок</label>
                <input name="title"  class="form-control" id="title_id" rows="3"/>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea">Содержание</label>
                <textarea name="post"  class="form-control" id="post_id" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary my-1">Создать пост</button>
        </form>
        <div>
@endsection
