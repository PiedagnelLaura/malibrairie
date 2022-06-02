<?php

namespace App\Models;

use App\Utils\Database;

class Book_category extends CoreModel
{
    private $category_id;
    private $book_id;

    /**
     * Méthode permettant de récupérer les catégories en fonction d'un id de livre donné
     *@param int $booId ID de la table book
     * @return Book
     */
    public static function findByBook($bookId){

        $sql = "SELECT *
                FROM book_category
                INNER JOIN category 
                ON book_category.category_id = category.id
                WHERE book_category.book_id= $bookId;";

        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $book = $pdoStatement->fetchAll(\PDO::FETCH_ASSOC);
        return $book;
    }
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