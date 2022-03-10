@extends('layouts.default')

@section('title', 'Comments')

@section('content')
    <div class="container">
        <h1>Создание комментария</h1>
        <form method="POST" action="{{route('comments.store')}}" enctype="multipart/form-data">
            @method('POST')
            @csrf

            <div class="form-group">
                <label for="exampleFormControlTextarea">Заголовок</label>
                <input name="title"  class="form-control" id="title_id" rows="3"/>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea">Содержание</label>
                <textarea name="comment"  class="form-control" id="text_id" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary my-1">Добавить комментарий </button>
        </form>
        <div>
@endsection
