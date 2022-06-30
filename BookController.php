<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    /**
     * Show all books and return view
     */
    public function show()
    {
       $book = new Book();
       $books = $book->getAll();

       return view("books", ["books" => $books]);
    }

    /**
     * Find book and return view
     */
    public function search($id)
    {
        $book = new Book();
        $searchBook = $book->getBookById($id);

        return view("book", ["book" => $searchBook]);
    }

    /**
     * Add book by name
     */
    public function add(Request $request)
    {
        $nameBook = $request->name;
        $book = new Book();
        $book->add($nameBook);

        return true;
    }

    /**
     * Delete book by Id
     * If book by Id not exist - message Not found book by id
     */
    public function delete($id)
    {
        $book = new Book();

        if ($book->getBookById($id)) {
            $book->removeBookById($id);

            return true;
        } else {
           return "Not found book by id = {$id}";
        }
    }
}
