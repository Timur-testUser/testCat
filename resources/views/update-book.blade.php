<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>@yield('title-block')</title>
</head>
<body>
Обновление записи
<br>

<form action="{{ route('book-update-submit', $data->author_id) }}" method="post" >
    {{csrf_field()}}
    <div class="form-group">
        <label for="name">Автор</label>
        <input type="text" value="{{$data->name_author}}" name="name_author" placeholder="Автор" id="name_author" class="form-control">
    </div>

    <div class="form-group">
        <label for="count_book">Колличество книг</label>
        <input type="number" value="{{$data_count->count_book}}"  name="count_book" placeholder="Колличество книг" id="count_book" class="form-control">
    </div>
    <button type="submit" class="btn btn-success">Обновить</button>
</form>
</body>
</html>