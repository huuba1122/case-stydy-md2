<?php

ob_start();

use App\Controller\ProductController;
use App\Controller\AuthorController;
use App\Controller\CategoryController;

require __DIR__ . '/vendor/autoload.php';

$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : "";
$productController = new ProductController();
$authorController = new AuthorController();
$categoryController = new CategoryController();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="CSS/main.css">
    <title>Document</title>
</head>
<body>

<!--           bootstrap         -->
<div class="container container-fluid">
    <!--        menu               -->
<!--    <div class="menu sticky-top">-->
<!--        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">-->
<!--            <div class="container-fluid">-->
<!--                <a class="navbar-brand" href="index.php">Trang chủ</a>-->
<!--                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"-->
<!--                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"-->
<!--                        aria-expanded="false" aria-label="Toggle navigation">-->
<!--                    <span class="navbar-toggler-icon"></span>-->
<!--                </button>-->
<!--                <div class="collapse navbar-collapse" id="navbarSupportedContent">-->
<!--                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">-->
<!--                        <li class="nav-item dropdown">-->
<!--                            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button"-->
<!--                               data-bs-toggle="dropdown" aria-expanded="false">-->
<!--                               Quản lý sách-->
<!--                            </a>-->
<!--                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">-->
<!--                                <li><a href="index.php?page=book-list" class="list-group-item list-group-item-action list-group-item-primary">Danh mục sách</a></li>-->
<!--                                <li><a href="index.php?page=add-book" class="list-group-item list-group-item-action list-group-item-secondary">Thêm sách mới</a></li>-->
<!--                                <li><a href="index.php?page=publishers" class="list-group-item list-group-item-action list-group-item-info">Nhà xuất bản</a></li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                        <li class="nav-item">-->
<!--                            <a class="nav-link active" aria-current="page" href="index.php?page=authors">Tác giả</a>-->
<!--                        </li>-->
<!--                        <li class="nav-item">-->
<!--                            <a class="nav-link active" aria-current="page" href="index.php?page=categories">Thể loại</a>-->
<!--                        </li>-->
<!---->
<!--                        <li class="nav-item dropdown">-->
<!--                            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button"-->
<!--                               data-bs-toggle="dropdown" aria-expanded="false">-->
<!--                                Quản lý hóa đơn-->
<!--                            </a>-->
<!--                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">-->
<!--                                <li><a href="#" class="list-group-item list-group-item-action list-group-item-primary">Phiếu nhập</a></li>-->
<!--                                <li><a href="index.php?page=hoa-don" class="list-group-item list-group-item-action list-group-item-secondary">Hóa đơn bán hàng</a></li>-->
<!--                                <li><a href="#" class="list-group-item list-group-item-action list-group-item-success">Khách hàng</a></li>-->
<!--                                <li><a href="#" class="list-group-item list-group-item-action list-group-item-danger">Nhân viên</a></li>-->
<!--                                <li><a href="#" class="list-group-item list-group-item-action list-group-item-warning">Nhà cung cấp</a></li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                    <form class="d-flex" action="index.php" method="post">-->
<!--                        <input class="form-control me-2" type="search" placeholder="ten sach hoac ten tac gia" aria-label="Search" name="search_name">-->
<!--                        <button class="btn btn-outline-success text-light" type="submit">Search</button>-->
<!--                    </form>-->
<!--                </div>-->
<!--            </div>-->
<!--        </nav>-->
<!--    </div>-->

    <!--            content            -->
<!--    <div class="content">-->

        <!--        side bar           -->
<!--        <div class="row sidebar col-lg-3">-->
<!--            <div class="col ">-->
<!--                <div class="categories">-->
<!--                    <div class="list-group">-->
<!--                        <button  class=" btn btn-dark">A simple default list group item</button>-->
<!--                        <a href="#" class="list-group-item list-group-item-action list-group-item-primary">A simple primary</a>-->
<!--                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">A simple secondary</a>-->
<!--                        <a href="#" class="list-group-item list-group-item-action list-group-item-success">A simple success</a>-->
<!--                        <a href="#" class="list-group-item list-group-item-action list-group-item-danger">A simple danger</a>-->
<!--                        <a href="#" class="list-group-item list-group-item-action list-group-item-warning">A simple warning</a>-->
<!--                        <a href="#" class="list-group-item list-group-item-action list-group-item-info">A simple info</a>-->
<!--                        <a href="#" class="list-group-item list-group-item-action list-group-item-light">A simple light</a>-->
<!--                        <a href="#" class="list-group-item list-group-item-action list-group-item-dark">A simple dark</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->

        <!--      my-content      -->
<!--        <div class="row my-content col" >-->
            <?php
            switch ($page){
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
                case 'authors':
                    $authorController->showAuthors();
                    break;
                case 'add-author':
                    $authorController->addAuthor();
                    break;
                case 'author-details':
                    $authorController->showAuthorDetail();
                    break;
                case 'delete-author':
                    $authorController->deleteAuthor();
                    break;
                case 'update-author':
                    $authorController->updateAuthor();
                    break;
                case 'publishers':
                    $productController->showPublishers();
                    break;
                case 'categories':
                    $categoryController->showCategories();
                    break;
                default:
                    $productController->showBookList();
                    break;
            }
            ob_end_flush();
            ?>

<!--        </div>-->
<!--    </div>-->

    <!--        pagination        -->
<!--    <div class="">-->
<!--        <nav aria-label="Page navigation example">-->
<!--            <ul class="pagination justify-content-end">-->
<!--                <li class="page-item disabled">-->
<!--                    <a class="page-link" href="#" tabindex="-1">Previous</a>-->
<!--                </li>-->
<!--                <li class="page-item"><a class="page-link" href="#">1</a></li>-->
<!--                <li class="page-item"><a class="page-link" href="#">2</a></li>-->
<!--                <li class="page-item"><a class="page-link" href="#">3</a></li>-->
<!--                <li class="page-item">-->
<!--                    <a class="page-link" href="#">Next</a>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </nav>-->
<!--    </div>-->

    <!--            footer          -->
<!--    <div class="footer">-->
        <!-- Footer -->
<!--        <footer class="bg-dark text-left text-white">-->
            <!-- Grid container -->
<!--            <div class="container p-4 pb-0">-->
                <!-- Section: Social media -->
<!--                <section class="mb-4">-->
                    <!-- Facebook -->
<!--                    <a-->
<!--                            class="btn btn-primary btn-floating m-1"-->
<!--                            style="background-color: #3b5998;"-->
<!--                            href="#!"-->
<!--                            role="button"-->
<!--                    ><i class="fab fa-facebook-f"></i-->
<!--                        ></a>-->
<!---->
                    <!-- Twitter -->
<!--                    <a-->
<!--                            class="btn btn-primary btn-floating m-1"-->
<!--                            style="background-color: #55acee;"-->
<!--                            href="#!"-->
<!--                            role="button"-->
<!--                    ><i class="fab fa-twitter"></i-->
<!--                        ></a>-->
<!---->
                    <!-- Google -->
<!--                    <a-->
<!--                            class="btn btn-primary btn-floating m-1"-->
<!--                            style="background-color: #dd4b39;"-->
<!--                            href="#!"-->
<!--                            role="button"-->
<!--                    ><i class="fab fa-google"></i-->
<!--                        ></a>-->
<!---->
                    <!-- Instagram -->
<!--                    <a-->
<!--                            class="btn btn-primary btn-floating m-1"-->
<!--                            style="background-color: #ac2bac;"-->
<!--                            href="#!"-->
<!--                            role="button"-->
<!--                    ><i class="fab fa-instagram"></i-->
<!--                        ></a>-->
<!--            </div>-->
            <!-- Grid container -->
<!---->
            <!-- Copyright -->
<!--            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">-->
<!--                © 2020 Copyright:-->
<!--                <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>-->
<!--            </div>-->
            <!-- Copyright -->
<!--        </footer>-->
        <!-- Footer -->
<!--    </div>-->

</div>





<!--            code cu                     -->
<!--    <form action="index.php" method="post">-->
<!--        <input type="text" name="search_name" placeholder="tim kiem ten sach">-->
<!--        <button type="submit">search</button>-->
<!--    </form>-->
<!--    <a href="index.php?page=book-list">danh muc sach</a> <br>-->
<!--    <a href="index.php?page=book-details">book-details</a> <br>-->
<!--    <a href="index.php?page=hoa-don">danh sach hoa don</a> <br>-->
<!--    <a href="index.php?page=authors">danh sach tac gia</a><br>-->
<!--    <a href="index.php?page=publishers">danh sach nxb</a> <br>-->
<!--    <a href="index.php?page=categories">the loai</a> <br>-->

<!--    --><?php
//        switch ($page){
////            case 'book-list':
////                $productController->showBookList();
////                break;
//            case 'book-details':
//                $productController->showBookDetails();
//                break;
//            case 'hoa-don':
//                echo 'chua co hoa don';
//                break;
//            case 'add-book':
//                $productController->addBook();
//                break;
//            case 'update-book':
//                $productController->updateBook();
//                break;
//            case 'delete-book':
//                $productController->deleteBook();
//                break;
//            case 'authors':
//                $productController->showAuthors();
//                break;
//            case 'publishers':
//                $productController->showPublishers();
//                break;
//            case 'categories':
//                $productController->showCategories();
//                break;
//            default:
//                $productController->showBookList();
//                break;
//        }
//    ob_end_flush();
//    ?>


    <!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
            crossorigin="anonymous"></script>

</body>
</html>
