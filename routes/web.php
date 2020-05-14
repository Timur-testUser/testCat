<?php

Route::get('/','BookController@bookGet', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact','BookController@getBookAdmin', function () {
    return view('contact');
});

Route::post('/contact/submit','BookController@addBook' , function () {
    return 'size';
});


// нвовое
Route::get('/contact/{author_id}','BookController@showOneMessage')->name('book-data-one');
Route::get('/contact/{author_id}/update','BookController@updateMessage')->name('book-update');
Route::get('/contact/{author_id}/delete','BookController@deleteMessage')->name('book-delete');
Route::post('/contact/{author_id}/update','BookController@updateMessageSubmit')->name('book-update-submit');
//
//Route::get('/contact/{id}','BookController@deleteBook')->name('delete-form');








