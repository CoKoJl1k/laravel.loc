@extends('layouts.default')

@section('content')
    <h3>i am the tasks page</h3>
    <div class="container">
        <h1>Создание задачи</h1>
        <form method="POST" action="{{route('tasks.store')}}" enctype="multipart/form-data">
            @method('POST')
            @csrf
            <div class="form-group">
                <label for="formGroupExampleInput">Название</label>
                <input name="title" type="text" class="form-control" id="formGroupExampleInput" placeholder="Название">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea">Содержание</label>
                <textarea name="description"  class="form-control" id="exampleFormControlTextarea" rows="3"></textarea>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea">Содержание</label>
                <textarea name="description2"  class="form-control" id="exampleFormControlTextarea2" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary my-1">Создать задачу</button>
        </form>
        <div>
@endsection
