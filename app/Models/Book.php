<?php

namespace App\Models;

use App\Utils\Database;

class Book extends CoreModel
{
    private $title;
    private $description;
    private $picture;
    private $price;
    private $status;
    private $home_order;

    private $author_id;
    private $edition_id;

    /**
     * Méthode permettant de récupérer les livres mis en avant sur la home 
     *
     * 
     */
    public function findAllFavorite(){
        $sql = "SELECT `book`.`id` AS book_id, 
                `book`.`picture`,
                `book`.`title`,
                `author`.`name`
                FROM `book` 
                INNER JOIN `author` ON book.author_id = author.id
                WHERE `home_order` > 0 
                ORDER BY `home_order`;";

        
        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(\PDO::FETCH_ASSOC);

        return $results;
    }

    /**
     * Méthode permettant de récupérer un enregistrement de la table Book en fonction d'un id donné
     *@param int $bookId ID de la table book
     * @return Book
     */
    public static function find($bookId){

        $sql = "SELECT book.*, `edition`.name AS edition_name , author.name AS author_name  FROM `book`
                INNER JOIN `author` ON book.author_id = author.id
                INNER JOIN `edition` ON book.edition_id = `edition`.id
                WHERE book.id = $bookId;";

        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $book = $pdoStatement->fetch(\PDO::FETCH_ASSOC);
        return $book;
    }

    /**
     * Méthode permettant de récupérer un enregistrement de la table Book en fonction d'un id donné
     *@param int $editionId ID de la table book
     * @return Book
     */
    public static function findByEdition($editionId){

        $sql = "SELECT book.*, `edition`.name AS edition_name , author.name AS author_name  FROM `book`
                INNER JOIN `author` ON book.author_id = author.id
                INNER JOIN `edition` ON book.edition_id = `edition`.id
                WHERE book.edition_id = $editionId;";

        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $book = $pdoStatement->fetchAll(\PDO::FETCH_ASSOC);
        return $book;
    }

    /**
     * Méthode permettant de récupérer un enregistrement de la table Book en fonction d'un id de catégorie donné
     *
     * @param int $categoryId ID de la category
     * @return Book
     */
    public static function findByCategory($categoryId)
    {
   
        $pdo = Database::getPDO();
        $sql = "
            SELECT book.*, author.name
            FROM book
            INNER JOIN author
            ON author.id = book.author_id
            WHERE book.id IN (
                SELECT book_id
                FROM book_category
                WHERE category_id = $categoryId
            );";

        $pdoStatement = $pdo->query($sql);

        $result = $pdoStatement->fetchAll(\PDO::FETCH_ASSOC);

        return $result;
    }

    /**
     * Méthode permettant de récupérer un enregistrement de la table Book en fonction d'un id d'auteur donné
     *@param int $authorId ID de la table book
     * @return Book
     */
    public static function findByAuthor($authorId){

        $sql = "SELECT book.*, author.name AS author_name  FROM `book`
                INNER JOIN `author` ON book.author_id = author.id
                WHERE book.author_id = $authorId;";

        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $book = $pdoStatement->fetchAll(\PDO::FETCH_ASSOC);
        return $book;
    }




    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of picture
     */ 
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set the value of picture
     *
     * @return  self
     */ 
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of status
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */ 
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of home_order
     */ 
    public function getHome_order()
    {
        return $this->home_order;
    }

    /**
     * Set the value of home_order
     *
     * @return  self
     */ 
    public function setHome_order($home_order)
    {
        $this->home_order = $home_order;

        return $this;
    }

    /**
     * Get the value of author_id
     */ 
    public function getAuthor_id()
    {
        return $this->author_id;
    }

    /**
     * Set the value of author_id
     *
     * @return  self
     */ 
    public function setAuthor_id($author_id)
    {
        $this->author_id = $author_id;

        return $this;
    }

    /**
     * Get the value of edition_id
     */ 
    public function getEdition_id()
    {
        return $this->edition_id;
    }

    /**
     * Set the value of edition_id
     *
     * @return  self
     */ 
    public function setEdition_id($edition_id)
    {
        $this->edition_id = $edition_id;

        return $this;
    }
}