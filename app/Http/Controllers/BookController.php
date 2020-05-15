<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\book;
use App\author;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\BookRequest;

class BookController extends Controller
{

    // авторы и книги для публичной части
    public function getBookPublick() {
        return view('home', ['data' => DB::table('books')
            ->join('authors', 'books.book_id', '=', 'authors.author_id')
            ->get()]);
    }

    // получаем авторов и колличество книг в административной части
    public function getBookAdmin() {
        return view('contact', ['data' => DB::table('books')
            ->join('authors', 'books.book_id', '=', 'authors.author_id')
            ->get()]);
    }

    // добавить автора и колличество страниц
    public function addBook(BookRequest $req) {
        $author = new author();
        $author->name_author = $req->input('name_author');

        $book = new book();
        $book->count_book = $req->input('count_book');

        $book->save();
        $author->save();

        return redirect('/contact');
    }

    // обновление сообщения
    public function updateMessage($author_id) {
        $author = new author;
        $book = new book;
        return view('update-book', ['data' => $author->find($author_id)], ['data_count' => $book->find($author_id)]);
    }

    // удалить сообщение
    public function deleteMessage($author_id) {
        author::find($author_id)->delete();
        return redirect('/contact');
    }

    // обновление формы
    public function updateMessageSubmit($author_id, BookRequest $req) {
        $author = author::find($author_id);
        $author->name_author = $req->input('name_author');

        $book = book::find($author_id);
        $book->count_book = $req->input('count_book');

        $author->save();
        $book->save();

        return redirect('/contact');
    }
}