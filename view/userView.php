<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilsateur</title>
</head>

<body>
    <?php
    foreach ($users as $user) : ?>
        <p>Id : <?= htmlspecialchars($user->id) ?></p>
        <p>Prenom : <?= htmlspecialchars($user->prenom) ?></p>
        <p>Nom : <?= htmlspecialchars($user->nom) ?></p>
    <?php endforeach ?>
</body>


</html>