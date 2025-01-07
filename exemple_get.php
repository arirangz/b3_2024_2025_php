<?php

if (isset($_GET["nom"])) {

    echo htmlspecialchars($_GET["nom"]);
} else {
    echo "Il manque le nom en param d'url";
}
