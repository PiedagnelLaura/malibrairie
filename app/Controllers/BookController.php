<?php

namespace App\Controllers;
use App\Models\Book;



class BookController extends CoreController
{
       // action détail
    public function detail($id)
    {
        $detailBook = Book::find($id);
        $this->show('book/detail', ["detail_book" => $detailBook]);
    }

}