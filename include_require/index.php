<?php
$products = [
    ["name" => "Dell laptop", "price" => 1100],
    ["name" => "Microsoft mouse", "price" => 25],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php require "menu.php"; ?>
    <h1>Home</h1>
    <?php foreach ($products as $product): ?>
        <?php require "product_template.php" ?>
    <?php endforeach ?>
</body>

</html>