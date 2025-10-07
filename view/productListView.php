<?php var_dump($products); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
</head>

<body>
    <h1>Nos Produits</h1>


    <a href="index.php?page=user&action=showUser">Users</a>
    <a href="indx.php?page=product&action=showProduct">Products</a>

    <br>
    <?php


    foreach ($products as $product) : ?>

        <p>Id : <?= htmlspecialchars($product->id) ?></p>
        <h3><?= htmlspecialchars($product->nom) ?></h3>
        <p>Prix : <?= htmlspecialchars($product->prix) ?></p>


        <p><?= htmlspecialchars($product->description) ?></p>


        <a href="index.php?page=product&action=detailProduct&id=<?= htmlspecialchars($product->id) ?>">Description</a>
        <a href="index.php?page=product&action=delete&id=<?= htmlspecialchars($product->id) ?>">Supprimer</a>
    <?php endforeach ?>


</body>

</html>