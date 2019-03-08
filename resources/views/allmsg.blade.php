@extends('layouts/layout')
@section('title','Kontakti')
@section('asideLeft')
@stop
@section('content')
    <h3>Visas ziņas:</h3>
    <div class='table-responsive' id="groupTable">
        <table class='table'>
            <thead>
            <tr>
                <th>Nr.</th>
                <th>Ziņa</th>
                <th>Statuss</th>
                <th colspan="2" style="text-align: center">Opcijas</th>
            </tr>
            </thead>
            @foreach($messages as $message => $item)
                <tr>
                    <td>{{ $loop->iteration }}.</td>
                    <td class="group">{{ $item['msg_text'] }}</td>
                    <td class="group">{{ $item['statuss'] }}</td>
                    <td style="text-align:right">
                        <a href="/editmsg/{{ $item['id'] }}" style="color:#fff; text-decoration: none;">
                            <button type='button' class='btn btn-warning delete'>Labot</button>
                        </a>
                    </td>
                    <td><form method="POST" action="/allmsg">
                            {{ csrf_field()  }}
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" value = "{{ $item['id'] }}" name="id">
                            <button type='submit' class='btn btn-danger delete'>Dzēst</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
@stop

