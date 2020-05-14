<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    public $timestamps = false;
    protected $table = 'books';
    protected $fillable = [
        'book_id', 'name_book','count_book'
    ];
    //
}
