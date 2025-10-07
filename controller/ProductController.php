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
    // public function showProduct()
    // {
    //     $product = new Product(1, "", 2, "");
    //     require_once __DIR__ . '/../view/productView.php';
    // }
    public function displayProductById()
    {
        $id = $_GET["id"];
        $product = $this->productDao->getProductById($id);


        // require_once __DIR__ . '/../view/productListView.php';
        require_once __DIR__ . '/../view/descriptionProduct.php';
    }


    public function deleteProduct()
    {
        $id = $_GET["id"];
        $deleteProduct = $this->productDao->deleteProductById($id);
        header('location: index.php?page=product');
        exit;
    }
}
