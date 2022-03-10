@extends('layouts.default')

@section('content')
    <style>
        tr td {
            border: solid 1px black;
        }

    </style>
    <h3>Current user</h3>
    <table>
    @foreach( $user as $value)
    <tr>
        <td>
            {{$value->id}}
        </td>

        <td>
            {{$value->name}}
        </td>
        <td>
            {{$value->email}}
        </td>
        <td>
            {{$value->created_at}}
        </td>
        <td>
            {{$value->updated_at}}
        </td>

    </tr>
    @endforeach
    </table>


@endsection
