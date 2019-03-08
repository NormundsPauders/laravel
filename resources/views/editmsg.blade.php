@extends('layouts/layout')
@section('title','Kontakti')
@section('asideLeft')
    <p>Saziņa:</p>
@stop
@section('content')
    @if($msg)
        <form method="post" action="/allmsg">
            <input type="hidden" name="_method" value="PUT">
            <div class="form-group">
                {{ csrf_field()  }}
            </div>
            <input type="hidden" class="form-control" id="id" name="id" value="{{ $msg->id }}">
            <div class="form-group">
                <label for="msg_text">Teksts</label>
                <input type="text" class="form-control" id="msg_text" name="msg_text" value="{{  $msg->msg_text }}" disabled="disabled">
            </div>
            <div class="form-group">
                <label for="statuss">Statuss</label>
                <input type="text" class="form-control" id="statuss" name="statuss" value="{{  $msg->statuss }}">
            </div>
            <button type="submit" class="btn btn-success save" id="subjectSave">Saglabāt</button>
        </form>
    @else
        Nav atrasts
    @endif
@stop


