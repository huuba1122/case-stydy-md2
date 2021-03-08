<?php

namespace App\Model;
use PDO;

class AuthorModel
{
    protected $database;

    public function __construct(){
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function getAllAuthors(){
        $sql = "SELECT*FROM author";
        $stml = $this->database->query($sql);
        return $stml->fetchAll();
    }
}
