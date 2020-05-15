<?php

// получение книг для публичной страницы
Route::get('/','BookController@getBookPublick', function () {
    return view('home');
});


Route::get('/about', function () {
    return view('about');
});

// получение данных для админки
Route::get('/contact','BookController@getBookAdmin', function () {
    return view('contact');
});

// добавление книги
Route::post('/contact/submit','BookController@addBook' , function () {
    return 'size';
});


// GRUD операции
Route::get('/contact/{author_id}','BookController@showOneMessage')->name('book-data-one');
Route::get('/contact/{author_id}/update','BookController@updateMessage')->name('book-update');
Route::get('/contact/{author_id}/delete','BookController@deleteMessage')->name('book-delete');
Route::post('/contact/{author_id}/update','BookController@updateMessageSubmit')->name('book-update-submit');








