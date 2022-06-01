<?php

namespace App\Controllers;
use App\Models\Book;



class CategoryController extends CoreController
{
     
    public function list($id)
    {
       $bookCategory = Book::findByCategory($id);
        $this->show('category/list', ["bookCategory" => $bookCategory]);
    }

}