 <?php
    // on inclut les controllers -> ils gerent la logique pour afficher les users ou les produits
    require_once 'controller/UserController.php';
    require_once 'controller/ProductController.php';
    //on inclut les classes de connexion et la DAO -> 
    require_once 'DataBase.php'; //DataBase cree la connexion PDO
    require_once 'model/dao/UserDao.php'; // et UserDao utilse cette connexion pour acceder aux donnees 
    require_once 'model/dao/ProductDao.php';


    $pdo = DataBase::getConnection(); //on creer une connexion PDO -> c'est necessaire pour faire des querys SQL vers de  BDD
    // $userDao = new UserDao($pdo); // on creer un objet UserDao avec la connexion PDO -> La DAO peut maintenant interagir avec la table user

    // $users = $userDao->getAllUsers(); // on recuperer tous les users 

    // $user = new UserController($userDao); //on creer un controler user avec la DAO  ->le controller peut afficher les users avec les donnees du DAO
    // $user->afficherName();

    // $productDao = new ProductDao($pdo);
    // $product = new ProductController($productDao);
    // $products = $productDao->getAllProducts();

    //URLs
    // http://localhost/MINI-MVC/index.php?page=user
    // http://localhost/MINI-MVC/index.php?page=product
    // http://localhost/MINI-MVC/index.php?page=products


    $page = $_GET["page"] ?? "user";
    $action = $_GET["action"] ?? "showUser";



    switch ($page) {
        case "user":
            $userDao = new UserDao($pdo);
            $users = $userDao->getAllUsers();
            $user = new UserController($userDao);
            switch ($action) {
                case 'showUser':
                    $user->displayAllUsers();
                    break;
                case 'detailUser':
                    $user->displayUserById();
                    break;
                case "delete":
                    $user->deleteUser();
                    break;
            }
            break;
        case "product":
            $productDao = new ProductDao($pdo);
            $products = $productDao->getAllProducts();
            $product = new ProductController($productDao);
            switch ($action) {
                case 'showProduct':
                    $product->displayAllProducts();
                    break;
                case 'detailProduct':
                    $product->displayProductById();
                    break;
                case 'delete':
                    $product->deleteProduct();
                    break;
            }
            // default:
            //     echo "ERROR 404 ";
            //     break;
    }
   





           

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
            // on va mettre toues qui concern notre BDD  avec ses methodes
