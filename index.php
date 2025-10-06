<?php
require_once 'controller/UserController.php';

require_once 'controller/ProductController.php';

require_once 'DataBase.php';
require_once 'model/dao/UserDao.php';


$pdo = DataBase::getConnection();
$userDao = new UserDao($pdo);
$users = $userDao->getAllUsers();
echo "<br>";
echo "<br>";
// var_dump($users);

$user = new UserController($userDao);
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
        $user->displayAllUsers();
        break;
    case "product";
        $product->showProduct();
        break;
    case "products";
        $products->showProducts();
        break;
}


// localhost, nom de la BDD 
// $pdo = new PDO(       //l'instence
//     "mysql:host=localhost;dbname=mvc;",  //on defini le  BDD 
//     "root", //Username 
//     "" //password
// );


// $query = "SELECT * FROM `user`"; //requettes    :placeholder
// $stmt = $pdo->prepare($query);
// $stmt->execute();

// //on recouper 
// $data = $stmt->fetchAll(PDO::FETCH_OBJ);
// var_dump($data);  //il donne toute les data, pour debuger on utilise







// $pdo = new PDO(       //l'instence
//     "mysql:host=localhost;dbname=mvc;",  //on defini le BDD 
//     "root", //Username
//     "" //password
// );


// $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //si il ya un erreur dit moi qoui




// // try{    <= try= on essaie
// // code....
// // }
// // catch(PDOExeption $erreur){  <=si erreur, on affiche le message
// // echo "erreur : ". $erreur->getMessage();
// // }


// $id = 2;
// $query = "SELECT * FROM `user` WHERE id=:id"; // notre requettes sql   :placeholder 
// $stmt = $pdo->prepare($query); //variable stetment on preoare le requuette / prepare()elle prendre un requette sql
// $stmt->execute([":id" => $id]); //on execute /si on n'a le placeholder avec un vrei valeur on va mettre ex :id




// //a tester.....
// // $query = "SELECT id FROM `user` WHERE id=:id"; // notre requettes sql   :placeholder 
// // $stmt = $pdo->prepare($query); //variable stetment on preoare le requuette / prepare()elle prendre un requette sql
// // $stmt->execute([":id" => $id]); //on execute /si on n'a le placeholder avec un vrei valeur on va mettre ex :id

// //on recouper 
// $data = $stmt->fetch(PDO::FETCH_OBJ); //$data  ou $user ou n'importe .... est egal avec $stmt fetchAll ou Fatch   . on definier commont je veux recuoperer les donnees
// var_dump($data);  //il donne toute les data, =>pour debuger on utilise



// // ***** DAO **** DATA ACCES OBJET

// //il va utilser par le MODEL  :
// // models:
//     // =>user.php
//     // =>userDAO.php 

// //on va separer le contoller et le model et le DAO qui va intervenir 
// // on va mettre toues qui concern notre BDD  avec ses methodes 