<?php
try {
    $pdo = new PDO("mysql:dbname=keyce_2025_b3_exercice7;host=localhost;charset=utf8mb4", "root", "");
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
