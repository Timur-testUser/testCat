<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class author extends Model {

    // убираем с миграции дату
    public $timestamps = false;

    // id по умолчанию для данной сущности
    protected $primaryKey = 'author_id';
}
