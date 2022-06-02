<?php

namespace App\Models;

use App\Utils\Database;

class Author extends CoreModel
{
    private $name;

    /**
     * Méthode permettant de récupérer le nom de l'auteur en fonction d'un id donné
     *@param int $authorId ID de la table author
     * @return Author
     */
    public static function find($authorId){

        $sql = "SELECT *
                FROM `author`
                WHERE id = $authorId;";

        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $author = $pdoStatement->fetchObject('App\Models\Author');
        return $author;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}