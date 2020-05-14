<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\book;
use App\author;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\BookRequest;

class BookController extends Controller
{
    public function bookGet()
    {
        return view('home', ['data' => DB::table('books')
            ->join('authors', 'books.book_id', '=', 'authors.author_id')
            ->get()]);
    }

    public function getBookAdmin()
    {
        return view('contact', ['data' => DB::table('books')
            ->join('authors', 'books.book_id', '=', 'authors.author_id')
            ->get()]);

    }


    public function addBook(BookRequest $req) {
        $author = new author();
        $author->name_author = $req->input('name_author');

        $book = new book();
        $book->count_book = $req->input('count_book');

        $book->save();
        $author->save();

        return redirect('/contact');
    }
    public function showOneMessage($author_id){
        $author = new author;

        return view('book', ['data' => $author->find($author_id)]);
    }

    public function updateMessage($author_id){
        $author = new author;

        return view('update-book', ['data' => $author->find($author_id)]);
    }

    public function updateMessageSubmit($author_id, BookRequest $req) {
        $author = author::find($author_id);
        $author->name_author = $req->input('name_author');

        $author->save();

        return redirect('/contact');
    }

//    public function deleteBook(BookRequest $req, $id)
//    {
//        $meta = DB::table('books')->where('book_id', $id);
//        $meta->delete();
//        return redirect('/contact');
//    }
}
