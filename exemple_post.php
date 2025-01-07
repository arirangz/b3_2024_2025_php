<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>
    <?php if (isset($_POST["prenom"])): ?>
        <p><?= $_POST["prenom"] ?></p>
    <?php endif; ?>
    <form action="" method="post">
        <p>
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" id="prenom">
        </p>
        <input type="submit" value="Envoyer">
    </form>
</body>

</html>