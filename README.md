PDO
c'est une interface en PHP qui permet de se connecter a une BDD et d'executer les requettes SQL

DAO 
C'est une modele de programmation qui organise le code pour acceder aux donner



Utilisateur tape l'URL
↓
index.php reçoit la requête
↓
Routeur (switch) oriente vers la page demandée
↓
Crée ProductController
↓
ProductController dit : "ProductDao, donne-moi les produits"
↓
ProductDao interroge MySQL : "SELECT * FROM product"
↓
MySQL renvoie les lignes brutes
↓
ProductDao transforme en objets Product
↓
ProductDao renvoie les objets au ProductController
↓
ProductController charge la vue productListView.php
↓
La vue affiche le HTML avec les données
↓
Le navigateur affiche la page à l'utilisateur