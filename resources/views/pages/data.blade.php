@extends('layouts.default')

@section('content')
    <h3>all data greeting</h3>
    <?php $count = 0; ?>
    <ul>
        @foreach( $greetings as $value)
            <li>{{$value->body}}</li>
            <?php $count++; ?>
        @endforeach
    </ul>
    <p>{{ $count }}</p>
@endsection



