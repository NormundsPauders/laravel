@extends('layouts/layout')
@section('title','Kontakti')
@section('asideLeft')
    @if(count($errors))
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
@stop
@section('content')
    <form method="POST" action="/contacts">
        <div class="form-group">
            {{ csrf_field()  }}
        </div>
        <div class="form-group">
            <label for="msg_text">Teksts</label>
            <input type="text" class="form-control" id="msg_text" name="msg_text" value="{{old('msg_text')}}">
        </div>
        <button type="submit" class="btn btn-success save" id="subjectSave">Sūtīt</button>
    </form>
@stop

