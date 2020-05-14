
Обновление записи

<form action="{{ route('book-update-submit', $data->author_id) }}" method="post" >
    {{csrf_field()}}
    <div class="form-group">
        <label for="name">Автор</label>
        <input type="text" value="{{$data->name_author}}" name="name_author" placeholder="Автор" id="name_author" class="form-control">
    </div>

    <div class="form-group">
        <label for="count_book">Колличество книг</label>
        <input type="number" name="count_book" placeholder="Колличество книг" id="count_book" class="form-control">
    </div>
    <button type="submit" class="btn btn-success">Обновить</button>
</form>