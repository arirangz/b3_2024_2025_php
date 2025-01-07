<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if (isset($_GET["prenom"])): ?>
        <p>Joyeux anniversaire <?= htmlspecialchars($_GET["prenom"]) ?></p>
    <?php else: ?>
        <p>le paramètre prénom n'est pas présent dans l'url</p>
    <?php endif; ?>
</body>

</html>