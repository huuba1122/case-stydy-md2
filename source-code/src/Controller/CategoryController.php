<?php

namespace App\Controller;

use App\Model\ProductModel;
use App\Model\CategoryModel;


class CategoryController
{
    protected $productModel;
    protected $categoryModel;

    public function __construct(){
        $this->categoryModel = new CategoryModel();
        $this->productModel = new ProductModel();
    }

    public function showCategories(){
        $categories = $this->categoryModel->getAllCategories();
    }
}