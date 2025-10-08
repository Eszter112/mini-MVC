<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h2> <?= htmlentities($product->nom) ?></h2>
    <p> <?= htmlentities($product->prix) ?> €</p>
    <p>Description:</p>
    <?= htmlspecialchars($product->description) ?></p>
    <a href="index.php?page=product&action=showProduct">
        <<<< Retour a la page prècèdente</a>

</body>

</html>