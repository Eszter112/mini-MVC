<?php

// PDO-> PHP Data Object
// c'est une interface en PHP qui permet de se connecter a une BDD et d'executer les requettes SQL
class DataBase    //la classe DataBase pour gerer la connexion a la base de donnees
{
    private static  ?PDO $pdo = null; //?PDO <= la variable peut etre un objet PDO (connexion active a la base de donnees) ou null(aucun connexion encore) , type nullable
    // PDO ->PHP Data Object

    public static function getConnection() //elle retourne une connexion PDO
    {     //self:: -> pour acceder aux variables ou methodes statiqueq dans une classe
        if (self::$pdo === null) { //si la connexion n'existe pas encore, on la creer maintenant
            self::$pdo = new PDO("mysql:host=localhost;dbname=mvc;", "root", ""); //On cree la connexion et on la stocke dans la variable static/ vers mvc, "user","mtp:vide"
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // on configure PDO 
        }

        return self::$pdo;  //return la connexion PDO 
    }
}


//   ********** Connexion PDO **********

//  -Securite contre les attaques
//    ->PDO permet d'utiliser des requetes (query) preparees ( prepare() ), qui protegant contre les attaques SQL (injecion)
//  -Compatible avec pluseuirs bases 
//    ->MySql, SQLite , PostgreSql, etc
//  -Inteface propre et orientee objet 
//   -> On utilise des methodes comme  $pdo->query()  ou  $stmt->fetchAll() pour ecrire du code clair et structure
//  -Gestion des erreurs
//   -> On peut configurer PDO pour lancer une exeption en cas d'erreur 
//         ex: (PDO::ERRMODE_EXCEPTION), ce qui aide a trouver les bugs
//  - Parfait pour le modele DAO 
//   -> La modele DAO utilise PDO pour separer la logique de BDD du reste du code
