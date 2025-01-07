<?php
session_start();
if (!isset($_SESSION["email"])) {
    header("Location: login.php");
}
require_once "templates/header.php" ?>
<h1>Profil</h1>
<h2>Email: <?= $_SESSION["email"]; ?></h2>
<?php require_once "templates/footer.php" ?>