
Список пользователей:


@foreach($data as $el)
  <p>{{$el->name_author}} - {{$el->count_book}}(шт)</p>
    @endforeach


<form action="/contact">
    <button type="submit" name="Стать админом">Стать админом </button>

</form>
