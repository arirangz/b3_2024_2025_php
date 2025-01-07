<?php
session_start();
// Uniquement pour la démo
$validUser = ["email" => "admin@test.com", "password" => "test"];
$errorMessage = "";
if (isset($_POST["email"]) && isset($_POST["password"])) {
    // Verifier si email et pwd sont ok
    if ($_POST["email"] === $validUser["email"] && $_POST["password"] === $validUser["password"]) {
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