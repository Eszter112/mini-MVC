<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>

<body>
    <h1><?= htmlspecialchars($product->title, ENT_QUOTES, 'UTF-8') ?>:<?= htmlspecialchars($product->price, ENT_QUOTES, 'UTF-8') ?></h1>
</body>


</html>