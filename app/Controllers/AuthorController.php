<?php

namespace App\Controllers;
use App\Models\Book;
use App\Models\Author;


class AuthorController extends CoreController
{
     
    public function list($id)
    {
       $bookAuthor = Book::findByAuthor($id);
       $authorName = Author::find($id);
        $this->show('author/list', ['bookAuthor' => $bookAuthor, "authorName" => $authorName]);
    }

}