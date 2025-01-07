<?php
$pdo = new PDO('mysql:dbname=keyce_2024_movie;host=localhost;charset=utf8mb4', 'root', '');
$id = $_GET['id'];
$query = $pdo->query("SELECT * FROM user WHERE id = $id");
$user = $query->fetch(PDO::FETCH_ASSOC);


var_dump($user);
