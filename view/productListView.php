<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
</head>

<body>
    <h1>Welcome to MVC</h1>
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

        .btnAddProduct {
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
    <a class="userLink " href="index.php?page=user&action=showUser">Users</a>
    <a class="productLink" href="index.php?page=product&action=showProduct">Products</a>

    <h2>Produits</h2>

    <br>
    <!-- Ajouter produit -->
    <br>
    <form method="post" action="index.php?page=product&action=addProduct">
        <input type="text" name="nom" placeholder="nom de produit">

        <input type="text" name="description" placeholder="description">
        <input type="number" step="0.01" name="prix" placeholder="prix">
        <br>
        <br>
        <input class="btnAddProduct" type="submit" name="addProduct" value="Ajouter Article">
    </form>
    <?php

    foreach ($products as $product) : ?>

        <h3><?= htmlspecialchars($product->nom) ?></h3>
        <p>Prix : <?= htmlspecialchars($product->prix) ?> €</p>

        <!-- lien description -->
        <a class="btnDescription" href="index.php?page=product&action=detailProduct&id=<?= htmlspecialchars($product->id) ?>">Afficher les details</a>

        <!-- Supprimer article -->
        <form method="post" action="index.php?page=product&action=delete&id=">
            <input type="hidden" name="id" value="<?= htmlspecialchars($product->id) ?>">

            <input class="btnDelete" type="submit" name="supprimer" value="supprimer"></input>
        </form>

        <br>
        <!-- Update -->

        <form method="post" action="index.php?page=product&action=updateProduct">
            <input type="hidden" name="id" value="<?= htmlspecialchars($product->id) ?>">
            <input type="text" name="nom" placeholder="nouveau nom de produit">
            <input type="text" name="description" placeholder="nouveau description">
            <input type="number" name="prix" step="0.01" placeholder="nouveau prix">
            <br>
            <br>
            <input class="btnUpdate" type="submit" name="updateProduct" value="Mettre a jour"></input>
        </form>

    <?php endforeach ?>





</body>

</html>