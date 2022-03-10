@extends('layouts.default')

@section('content')
    <h3>i am the tasks page</h3>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">title</th>
                <th scope="col">description</th>
                <th scope="col">created_at</th>

                <th scope="col">Accessor </th>

            </tr>
            </thead>
            <tbody>
            @foreach($tasks as $key => $value)
                <tr>
                    <th>{{$value->id}}</th>
                    <td>{{$value->title}}</td>
                    <td>{{$value->description}}</td>
                    <td>{{$value->created_at}}</td>

                    <td>{{$value->full_name}}</td>
                    {{-- <td><a href="<?=url()->current();?>/{{$value->id}}"> Delete</a></td>-->--}}
                    <td>
                    {{ Form::open(['method' => 'DELETE', 'route' =>['tasks.destroy', $value->id]]) }}
                    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                    {{ Form::close() }}
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>

@endsection
