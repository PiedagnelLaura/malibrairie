<?php

namespace App\Models;

use App\Utils\Database;

class Book_category extends CoreModel
{
    private $category_id;
    private $book_id;

    /**
     * Get the value of category_id
     */ 
    public function getCategory_id()
    {
        return $this->category_id;
    }

    /**
     * Set the value of category_id
     *
     * @return  self
     */ 
    public function setCategory_id($category_id)
    {
        $this->category_id = $category_id;

        return $this;
    }

    /**
     * Get the value of book_id
     */ 
    public function getBook_id()
    {
        return $this->book_id;
    }

    /**
     * Set the value of book_id
     *
     * @return  self
     */ 
    public function setBook_id($book_id)
    {
        $this->book_id = $book_id;

        return $this;
    }
}