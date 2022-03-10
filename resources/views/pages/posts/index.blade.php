@extends('layouts.default')

@section('title', 'Posts')


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

            @foreach($posts as $key => $value)
                <tr>
                    <th>{{$value->id}}</th>
                    <td>{{$value->title}}</td>
                    <td>{{$value->post}}</td>
                    <td>{{$value->created_at}}</td>
                    <td>{{$value->updated_at}}</td>
                    <!--<td><a href="<?=url()->current();?>/{{$value->id}}"> Delete</a></td>-->
                    <td>
                    {{ Form::open(['method' => 'DELETE', 'route' =>['posts.destroy', $value->id]]) }}
                    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                    {{ Form::close() }}
                    </td>

                   {{-- <td>{{$value->comments->title}}</td>--}}

                </tr>
                    @foreach($value->comments as $comment)
                    <tr>
                        <th></th>
                        <td>{{$comment->title}}</td>
                        <td>{{$comment->comment}}</td>
                        <td>{{$comment->created_at}}</td>
                        <td>{{$comment->updated_at}}</td>
                    <tr>
                    @endforeach
            @endforeach
            </tbody>
        </table>
@endsection
