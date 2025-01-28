<?php

require_once "pdo.php";
require_once "libs/user.php";
session_start();
$errorMessage = "";
if (isset($_POST["email"]) && isset($_POST["password"])) {
    //Appeler createUser
    $res = createUser($pdo, $_POST["nickname"], $_POST["email"], $_POST["password"]);
    if ($res === true) {
        header("Location: login.php");
    } else {
        if (is_array($res)) {
            $errors = $res;
        }
    }
}
require_once "templates/header.php";
?>
<h1>Inscription</h1>
<?= $errorMessage ?>
<form action="" method="post">
    <p>
        <label for="nickname">Nom d'utilisateur</label>
        <input type="nickname" name="nickname" id="nickname">
    </p>
    <?php if(isset($errors["nickname"])): ?>
        <p><?= $errors["nickname"]; ?></p>
    <?php endif; ?>
    <p>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
    </p>
    <?php if(isset($errors["email"])): ?>
        <p><?= $errors["email"]; ?></p>
    <?php endif; ?>
    <p>
        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password">
    </p>
    <?php if(isset($errors["password"])): ?>
        <p><?= $errors["password"]; ?></p>
    <?php endif; ?>
    <input type="submit" value="S'inscrire">
</form>
<?php require_once "templates/footer.php" ?>