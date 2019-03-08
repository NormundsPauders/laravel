@extends('layouts/layout')
@section('title','Jaunumi')
@section('asideLeft')
    <p>Jaunumi:</p>
@stop
@section('content')
    <h4>Atsauksmes</h4>
    @foreach($messages as $message => $item)
        <p>{{ $item['msg_text'] }}</p>
    @endforeach
@stop

