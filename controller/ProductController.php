<?php

require_once __DIR__ . '/../model/Product.php';
class ProductController
{


    public $productDao;

    public function __construct($productDao)
    {
        $this->productDao = $productDao;
    }


    public function displayAllProducts()
    {
        $products = $this->productDao->getAllProducts();
        require_once __DIR__ . '/../view/productListView.php';
    }


    // public function showProducts()
    // {
    //     $products = [
    //         new Product("Produit 1", "prix"),
    //         new Product("Produit 2", "prix"),
    //         new Product("Produit 3", "prix")


    //     ];
    //     require_once __DIR__ . '/../view/productListView.php';
    // }

    // public function showProduct()
    // {
    //     $product = new Product("pomme", 5);
    //     require_once __DIR__ . '/../view/productView.php';
    // }
}
