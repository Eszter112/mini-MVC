<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
</head>

<body>
    <h1>Nos Produits</h1>
    <?php
    // foreach ($products as $product) {
    //     echo "- " . htmlspecialchars($product->title, ENT_QUOTES, 'UTF-8') . " - " . htmlspecialchars($product->price, ENT_QUOTES, 'UTF-8') . " € " . "<br>";
    // }
    ?>
    <?php
    foreach ($products as $product) : ?>
        <p>Id : <?= htmlspecialchars($product->id) ?></p>
        <p>Titre : <?= htmlspecialchars($product->nom) ?></p>
        <p>Prix : <?= htmlspecialchars($product->prix) ?></p>

    <?php endforeach ?>
</body>

</html>