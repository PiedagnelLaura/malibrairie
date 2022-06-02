<?php

namespace App\Models;

use App\Utils\Database;
use PDO;

class Category extends CoreModel
{
    private $name;

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

    /**
     * Méthode permettant de récupérer tous les enregistrements de la table category
     *
     * @return Category[]
     */
    public static function findAll()
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * FROM `category`';
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'App\Models\Category');

        return $results;
    }

    /**
     * Méthode permettant de récupérer le nom de la catégorie en fonction d'un id donné
     *@param int $categId ID de la table category
     * @return Category
     */
    public static function find($categoryId){

        $sql = "SELECT *
                FROM `category`
                WHERE id = $categoryId;";

        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $category = $pdoStatement->fetchObject('App\Models\Category');
        return $category;
    }
}