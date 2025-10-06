<?php
require_once 'controller/UserController.php';

require_once 'controller/ProductController.php';


$user = new UserController();
// $user->afficherName();

$product = new ProductController();
// $product->showProduct();

$products = new ProductController();

$page = htmlspecialchars($_GET['page']);


//URLs
// http://localhost/MINI-MVC/index.php?page=user
// http://localhost/MINI-MVC/index.php?page=product
// http://localhost/MINI-MVC/index.php?page=products


switch ($page) {
    case "user":
        $user->afficherName();
        break;
    case "product";
        $product->showProduct();
        break;
    case "products";
        $products->showProducts();
        break;
}
