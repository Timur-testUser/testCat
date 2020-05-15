<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model {

    // убираем с миграции дату
    public $timestamps = false;

    protected $table = 'books';

    // id по умолчанию для данной сущности
    protected $primaryKey = 'book_id';

}
