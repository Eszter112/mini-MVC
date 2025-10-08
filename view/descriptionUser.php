<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Prenom: <?= htmlspecialchars($user->prenom) ?> Nom: <?= htmlspecialchars($user->nom) ?></h2>


    <p>ID: <?= htmlspecialchars($user->id) ?></p>
    <p>Description: </p>
    <p><?= htmlspecialchars($user->description) ?></p>

    <a href="index.php?page=user&action=showUser">
        <<<< Retour a la page prècèdente</a>

</body>

</html>