<?php
require_once "pdo.php";
require_once "libs/user.php";

$users = getUsers($pdo);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php foreach ($users as $user): ?>
            <li><?= $user["nickname"] ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>