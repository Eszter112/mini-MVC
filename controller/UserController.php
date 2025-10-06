<?php
require_once __DIR__ . '/../model/User.php';
class UserController
{

    public function afficherName()
    {

        $user = new User("ME");
        require_once __DIR__ . '/../view/userView.php';
    }
}
