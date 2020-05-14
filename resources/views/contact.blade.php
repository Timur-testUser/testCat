@extends('layout.app')

@section('title-block')

@endsection

@section('content')
@endsection

Список книг:

@foreach($data as $el)
    <p>{{$el->name_author}} - {{$el->count_book}}(шт)</p>
        <a href="{{ route('book-data-one', $el->book_id)}}"><button type="submit" class="btn btn-success">Редактировать</button></a>
@endforeach




