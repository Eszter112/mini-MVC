<?php
require_once __DIR__ . '/../model/User.php';
class UserController
{
    public $userDao;

    public function __construct($userDao)
    {
        $this->userDao = $userDao;
    }


    public function displayAllUsers()
    {


        $users =  $this->userDao->getAllUsers();



        require_once __DIR__ . '/../view/userView.php';
    }
}
