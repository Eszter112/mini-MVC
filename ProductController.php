<?php

require_once __DIR__ . '/../model/Product.php';
class ProductController
{



    public function showProducts()
    {
        $products = [
            new Product("Produit 1", "prix"),
            new Product("Produit 2", "prix"),
            new Product("Produit 3", "prix")


        ];
        require_once __DIR__ . '/../view/productListView.php';
    }

    public function showProduct()
    {
        $product = new Product("pomme", 5);
        require_once __DIR__ . '/../view/productView.php';
    }
}
