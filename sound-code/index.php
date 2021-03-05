<?php

ob_start();

use App\Controller\ProductController;

require __DIR__ . '/vendor/autoload.php';

$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : "";
$productController = new ProductController();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="search_name" placeholder="tim kiem ten sach">
        <button type="submit">search</button>
    </form>
    <a href="index.php?page=book-list">danh muc sach</a> <br>
    <a href="index.php?page=book-details">book-details</a> <br>
    <a href="index.php?page=hoa-don">danh sach hoa don</a> <br>
    <a href="index.php?page=publishers">danh sach nxb</a> <br>
    <a href="index.php?page=categories">danh sach nxb</a> <br>

<!--    <a href="index.php?page=add-book">them sach</a> <br>-->
    <?php
        switch ($page){
//            case 'book-list':
//                $productController->showBookList();
//                break;
            case 'book-details':
                $productController->showBookDetails();
                break;
            case 'hoa-don':
                echo 'chua co hoa don';
                break;
            case 'add-book':
                $productController->addBook();
                break;
            case 'update-book':
                $productController->updateBook();
                break;
            case 'delete-book':
                $productController->deleteBook();
                break;
            case 'publishers':
                $productController->showPublishers();
                break;
            case 'categories':
                $productController->showCategories();
                break;
            default:
                $productController->showBookList();
                break;
        }
    ob_end_flush();
    ?>
</body>
</html>
