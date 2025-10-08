<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilsateur</title>
</head>
<style>
    h1 {
        padding: 20px;

    }

    .btnDelete {
        background-color: lightcoral;
        border-radius: 10px;
        margin: 10px;

    }

    .btnDescription {
        background-color: lightskyblue;
        padding: 5px;
        border-radius: 10px;
        margin: 10px;
    }

    .btnUpdate {
        background-color: lightseagreen;
        padding: 5px;
        border-radius: 10px;
        margin: 0 10px;

    }

    .btnAddUser {
        background-color: lightpink;
        padding: 5px;
        border-radius: 10px;
        margin: 0 10px;
    }

    .userLink {
        background-color: #08446cff;
        color: white;
        padding: 5px;
        border-radius: 5px;
        padding: 10px;
        margin: 10px;
    }

    .productLink {
        background-color: #08446cff;
        color: white;
        padding: 5px;
        border-radius: 5px;
        padding: 10px;
        margin: 10px;
    }
</style>

<body>
    <h1>Welcome to MVC</h1>
    <a class="userLink " href="index.php?page=user&action=showUser">Users</a>
    <a class="productLink" href="index.php?page=product&action=showProduct">Products</a>


    <h2>Utilisateurs</h2>
    <br>
    <br>
    <!-- ajouter utilisateur -->
    <form method="post" action="index.php?page=user&action=addUser">

        Prenom: <input type="text" name="prenom">
        Nom: <input type=text name="nom">
        Description : <input type="text" name="description">

        <button class="btnAddUser" name="addUser" type="submit">Ajouter Utilisateur </button>
    </form>

    <?php
    foreach ($users as $user) : ?>

        <ul>
            <li><?= htmlspecialchars($user->id) ?> <?= htmlspecialchars($user->prenom) ?> <?= htmlspecialchars($user->nom) ?></li>
        </ul>

        <!-- description utilisateur -->
        <a class="btnDescription" href="index.php?page=user&action=detailUser&id=<?= htmlspecialchars($user->id) ?>">Description</a>

        <!-- supprimer utilisateur -->
        <form method="post" action="index.php?page=user&action=delete&id=">

            <input type="hidden" name="id" value="<?= htmlspecialchars($user->id) ?>">

            <input class="btnDelete" type="submit" name="supprimer" value="supprimer"></imput>
        </form>

        <!-- Update -->
        <form method="post" action="index.php?page=user&action=updateUser">
            <input type="hidden" name="id" value="<?= htmlspecialchars($user->id) ?>">
            <input type="text" name="prenom" placeholder="nouveau prenom">
            <input type="text" name="nom" placeholder="nouveau nom ">
            <input type="text" name="description" placeholder="nouveau description">

            <br>
            <br>
            <input class="btnUpdate" type="submit" name="updateUser" value="Mettre a jour"></input>
        </form>
    <?php endforeach ?>
    <br>
    <br>
    <br>




</body>


</html>