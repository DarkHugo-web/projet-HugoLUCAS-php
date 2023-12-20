<?php 
require_once('./model/productModel.php');

class ProductController{
    protected $model;

    public function __construct(){
        $this->model = new ProductModel();
    }

    public function getProduct(){
        $products=$this->model->getProduct();
        require_once './view/product.php';
    }
}

