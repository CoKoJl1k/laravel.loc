@extends('layouts.default')

@section('title', 'DogsResource')


@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">title</th>
            <th scope="col">posts</th>
            <th scope="col">created_at</th>
            <th scope="col">updated_at</th>
        </tr>
        </thead>
        <tbody>

        @foreach($dogs as $key => $value)
            <tr>
                <th> <a href="{{route('dogs.show', $value->id )}}">{{$value->id}}</a></th>
                <td>{{$value->name}}</td>
                <td>{{$value->breed}}</td>
                <td>{{$value->created_at}}</td>
                <td>{{$value->updated_at}}</td>

                <td>
                    {{ Form::open(['method' => 'DELETE', 'route' =>['dogs.destroy', $value->id]]) }}
                    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                    {{ Form::close() }}
                </td>


            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
