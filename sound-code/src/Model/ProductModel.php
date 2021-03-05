<?php

namespace App\Model;
use PDO;
class ProductModel
{
    protected $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function productList(){
        $sql = "SELECT*FROM v_books_details ORDER BY v_books_details.update_date DESC";
        $stml = $this->database->query($sql);
        return $stml->fetchAll();
//        $sql = "SELECT*FROM books ORDER BY price_sale ASC";
//        $stml = $this->database->query($sql);
//        return $stml->fetchAll();
    }

    public function productDetails($id){
        $sql = "SELECT*FROM v_books_details WHERE book_id=:id";
        $stml = $this->database->prepare($sql);
        $stml->bindParam(':id',$id);
        $stml->execute();
        return $stml->fetchAll();
    }

    public function addBook($isbn, $bookName, $authorId, $categoryId, $publisherId, $quantity, $publicationDate,$priceSale,$imageName){
        $sql = "INSERT INTO books(isbn,book_name,author_id,category_id,publisher_id,quantity,year_of_publication,price_sale,image) VALUES(:isbn,:book_name,:author_id,:category_id,:publisher_id,:quantity,:year_of_publication,:price_sale,:image)";
        $stml = $this->database->prepare($sql);
        $stml->bindValue(":isbn",$isbn);
        $stml->bindValue(":book_name",$bookName);
        $stml->bindValue(":author_id",$authorId);
        $stml->bindValue(":category_id",$categoryId);
        $stml->bindValue(":publisher_id",$publisherId);
        $stml->bindValue(":quantity",$quantity);
        $stml->bindValue(":year_of_publication",$publicationDate);
        $stml->bindValue(":price_sale",$priceSale);
        $stml->bindValue(":image",$imageName);
        $stml->execute();
        return $stml->fetchAll();
    }

    public function updateBook( $bookId,$isbn, $bookName, $description, $pageNumber, $authorId, $categoryId, $publisherId, $quantity, $publicationDate, $updateDate,$priceSale,$imageName){
        $sql = "UPDATE books SET isbn=:isbn,book_name=:book_name,description=:description,page_number=:page_number,author_id=:author_id,category_id=:category_id,publisher_id=:publisher_id,quantity=:quantity,year_of_publication=:year_of_publication,update_date=:update_date,price_sale=:price_sale,image=:image WHERE book_id=:book_id";
        $stml = $this->database->prepare($sql);
        $stml->bindValue(":book_id",$bookId);
        $stml->bindValue(":isbn",$isbn);
        $stml->bindValue(":book_name",$bookName);
        $stml->bindValue(":description",$description);
        $stml->bindValue(":page_number",$pageNumber);
        $stml->bindValue(":author_id",$authorId);
        $stml->bindValue(":category_id",$categoryId);
        $stml->bindValue(":publisher_id",$publisherId);
        $stml->bindValue(":quantity",$quantity);
        $stml->bindValue(":year_of_publication",$publicationDate);
        $stml->bindValue(":update_date",$updateDate);
        $stml->bindValue(":price_sale",$priceSale);
        $stml->bindValue(":image",$imageName);
        $stml->execute();
        var_dump($stml->execute());
//        return $stml->fetchAll();
    }

    public function deleteBook($id)
    {
        $sql = "DELETE FROM books WHERE book_id=:id";
        $stml = $this->database->prepare($sql);
        $stml->bindParam(':id', $id);
        $stml->execute();
    }

    public function searchBooks($searchBook){
        $sql ="SELECT * FROM v_books_details WHERE book_name LIKE '%$searchBook%' OR author_name LIKE '%$searchBook%'";
        $stml = $this->database->query($sql);
        return $stml->fetchAll();
    }
}