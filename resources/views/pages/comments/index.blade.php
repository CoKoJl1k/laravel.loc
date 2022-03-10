@extends('layouts.default')

@section('title', 'Comments')

@section('content')

        <table class="table">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">title</th>
                <th scope="col">comments</th>
                <th scope="col">created_at</th>
                <th scope="col">updated_at</th>
            </tr>
            </thead>
            <tbody>
            @foreach($comments as $key => $value)
                <tr>
                    <th>{{$value->id}}</th>
                    <td>{{$value->title}}</td>
                    <td>{{$value->comment}}</td>
                    <td>{{$value->created_at}}</td>
                    <td>{{$value->updated_at}}</td>

                {{--<td><a href="<?=url()->current();?>/{{$value->id}}"> Delete</a></td>--}}
                    <td>
                    {{ Form::open(['method' => 'DELETE', 'route' =>['comments.destroy', $value->id]]) }}
                    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                    {{ Form::close() }}
                    </td>

                </tr>
            @endforeach
</tbody>
</table>
@endsection



@section('footerAdd')
@parent
<p>Дополнительный контент and <b> parent </b> section</p>
    <p>Дополнительный контент footer</p>
    <p>Дополнительный контент footer footer</p>
    <p>Дополнительный контент footer footer footer</p>
@endsection

