<?php

require_once "pdo.php";
require_once "libs/user.php";
session_start();
$errorMessage = "";
if (isset($_POST["email"]) && isset($_POST["password"])) {

    $validUser = getUserByEmail($pdo, $_POST["email"]);

    // Verifier si email et pwd sont ok
    if ($validUser && password_verify($_POST["password"], $validUser["password"])) {
        // stocker les infos dans la session
        session_regenerate_id(true);
        $_SESSION["email"] = $_POST["email"];
        // rediriger vers son profil
        header("Location: profile.php");
    } else {
        // erreur
        $errorMessage = "Email ou mot de passe invalides";
    }
}
require_once "templates/header.php";
?>
<h1>Login</h1>
<?= $errorMessage ?>
<form action="" method="post">
    <p>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
    </p>
    <p>
        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password">
    </p>
    <input type="submit" value="Se connecter">
</form>
<?php require_once "templates/footer.php" ?>