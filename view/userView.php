<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilsateur</title>
</head>

<body>
    <a href="index.php?page=user&action=showUser">Users</a>
    <a href="index.php?page=product&action=showProduct">Products</a>


    <h1>Utilisateurs</h1>

    <?php
    foreach ($users as $user) : ?>

        <ul>
            <li><?= htmlspecialchars($user->id) ?> <?= htmlspecialchars($user->prenom) ?> <?= htmlspecialchars($user->nom) ?></li>
        </ul>
        <a href="index.php?page=user&action=detailUser&id=<?= htmlspecialchars($user->id) ?>">Description</a>
        <a href="index.php?page=user&action=delete&id=<?= htmlspecialchars($user->id) ?>">Supprimer</a>


    <?php endforeach ?>

    <!-- <a href="index.php?page=product&action=showProductsList">Products</a> -->

    </a>

</body>


</html>