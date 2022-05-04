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


    public function findAllFavorite(){
        $sql = "SELECT * FROM `book` 
                INNER JOIN `author` ON book.author_id = author.id
                WHERE `home_order` > 0 
                ORDER BY `home_order`;";

        
        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(\PDO::FETCH_ASSOC);

        return $results;
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