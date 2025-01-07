<?php

session_start();

// @todo gérer l'auth
$authOk = true;

if ($authOk) {
    $_SESSION["user"] = "john";
}

if (isset($_SESSION["user"])) {
    echo "utilisateur connecté";
} else {
    echo "utilisateur déconnecté";
}
