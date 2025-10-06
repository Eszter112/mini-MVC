<?php

class UserDao
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAllUsers()
    {
        $query = "SELECT * FROM `user`";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // var_dump($data);
        $users = [];
        foreach ($data as  $user) {
            $user = new User($user["id"], $user["Nom"], $user["Prenom"]);
            $users[] = $user;
        }
        return $users;
    }
}
