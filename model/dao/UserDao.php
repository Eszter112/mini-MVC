<?php

class UserDao   // on cree une classe pour gerer les users dans BDD -> pour separer la logique de donnees du reste du code (modele DAO)
{
    private PDO $pdo; //variable private qui contient la connexion PDO -> pour proteger la connexion et eviter les modifs exterieurs

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAllUsers()  // methode pour recuperer tous les utilisateur -> Le cotroller ne doit pas faire les query SQL directement
    {
        $query = "SELECT * FROM `user`"; //Query SQL pr selectionner tous les users -> les donnees sont stocke dans la base, il faut les lire 
        $stmt = $this->pdo->prepare($query); //on prepare la query ->pour eviter les attaques SQL (plus securise)
        $stmt->execute(); //on execute -> c'est necessaire apres  prepare() pour obtenir les resultat
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);   // on recuperer les resultats sous forme tableau associatif -> c'est plus facile a manipuler avec les noms des colonnes 

        // var_dump($data); 

        $users = []; //on creeer un tableau vide pour stocker les objets -> pour objets Users
        foreach ($data as  $user) {
            $user = new User($user["id"], $user["Nom"], $user["Prenom"], $user["description"]); //on creer on objet user pour chaque ligne  
            $users[] = $user;
        }
        return $users; //on return tous les users -> le controller a besoin des donnees pour les afficher  
    }


    public function getUserById($id)
    {
        $query = "SELECT * FROM `user` WHERE `id`=:id";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([':id' => $id]);

        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($data) {
            return new User($data["id"], $data["Nom"], $data["Prenom"], $data["description"]);
        }
        return null;
    }

    public function deleteUserById($id)
    {
        $query = " DELETE FROM `user` WHERE `id` = :id";
        $stmt = $this->pdo->prepare($query);
        return $stmt->execute([":id" => $id]);
    }

    public function addUser($prenom, $nom, $description)
    {
        $query = "INSERT INTO user (prenom , nom ,description) VALUE (:prenom, :nom ,  :description)";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([":nom" => $nom, ":prenom" => $prenom, ":description" => $description]);
    }


    public function updateUser($id, $prenom, $nom, $description)
    {
        $query = "UPDATE user SET prenom= :prenom , nom =:nom , description = :description  WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([":id" => $id, ":prenom" => $prenom,  ":nom" => $nom, ":description" => $description]);
    }
}
