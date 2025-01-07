<?php

function getUsers(PDO $pdo): array
{
    $query = $pdo->prepare("SELECT * FROM user");
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);
}

function getUserById(PDO $pdo): array
{
    return [];
}
