<?php
require_once __DIR__ . '/../model/User.php'; //on inclut la classe User ->le controller va utiliser des objets User , donc il faut charger la definition

class UserController //elle gere la logique liee aux users  (affichage, actions)
{
    public $userDao; //propriete public l'objet UserDao -> la controller a besoin du DAO pour acceder aux donnees

    public function __construct($userDao)
    {
        $this->userDao = $userDao;
    }


    public function displayAllUsers()   // methode public pour afficher tous les users -> la controller decide quand et comment affichier les donnees
    {

        //recuperer un  id avec _GET et cet id on le passe a GetUser
        // $id = $_GET["id"];
        $users =  $this->userDao->getAllUsers(); //on demande les users au DAO ->le controller ne fait pas les querys SQL , uniquement du DAO

        require_once __DIR__ . '/../view/userView.php'; // le controller connecte les donnees a l'affichage HTML
    }

    public function displayUserById()
    {
        $id = $_GET["id"];
        $user = $this->userDao->getUserById($id);
        require_once __DIR__ . '/../view/descriptionUser.php';
    }

    public function deleteUser()
    {
        $id = $_GET["id"];
        $deleteUser = $this->userDao->deleteUserById($id);
        header('location: index.php?page=user');
        exit;
    }
}
