<?php

namespace App\Model;
use PDO;

class CategoryModel
{
    protected $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function getAllCategories(){
        $sql = "SELECT * FROM categories";
        $stml = $this->database->query($sql);
        return $stml->fetchAll(PDO::FETCH_ASSOC);
    }
}