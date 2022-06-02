<?php

namespace App\Controllers;
use App\Models\Book;
use App\Models\Category;


class CategoryController extends CoreController
{
     
    public function list($id)
    {
       $bookCategory = Book::findByCategory($id);
       $categoryName = Category::find($id);
        $this->show('category/list', ["bookCategory" => $bookCategory, "categoryName" => $categoryName]);
    }

}