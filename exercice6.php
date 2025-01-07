<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <p>
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
        </p>
        <p>
            <label for="age">Age</label>
            <input type="number" name="age" id="age">
        </p>
        <input type="submit" value="Envoyer">
    </form>
    <?php if (isset($_POST["username"]) && isset($_POST["age"])): ?>
        <?php if ($_POST["age"] >= 18): ?>
            <p>Bienvenue <?= htmlspecialchars($_POST["username"]) ?></p>
        <?php else: ?>
            <p>Vous n'êtes pas autorisé à jouer à ce jeu</p>
        <?php endif; ?>
    <?php endif; ?>
</body>

</html>