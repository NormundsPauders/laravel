<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="/category">
        <div class="form-group">
            {{ csrf_field()  }}
        </div>
        <div class="form-group">
            <label for="title">Kategorija</label>
            <input type="text" class="form-control" id="c_name" name="c_name" value="{{old('c_name')}}"/>
        </div>
        <button type="submit" class="btn btn-success save" id="subjectSave">Saglabāt</button>
    </form>
    <table>
    @foreach($categories as $category => $item)
        <tr>
            <td>{{$item + 1}}.</td>
            <td class="group">{{ $item['c_name'] }}</td>
        </tr>
    @endforeach
    </table>
</body>
</html>