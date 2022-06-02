<?php

namespace App\Controllers;
use App\Models\Book;
use App\Models\Book_category;



class BookController extends CoreController
{
       // action détail
    public function detail($id)
    {
        $detailBook = Book::find($id);
        $categoriesList = Book_category::findByBook($id);
        $this->show('book/detail', ["detail_book" => $detailBook, "categoriesListByBook" => $categoriesList]);
    }

}