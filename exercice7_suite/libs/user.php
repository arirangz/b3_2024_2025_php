
<?php

function getUserByEmail(PDO $pdo, string $email): array|bool
{
    $query = $pdo->prepare("SELECT * FROM user WHERE email = :email");
    $query->bindValue(":email", $email, PDO::PARAM_STR);
    $query->execute();
    return $query->fetch(PDO::FETCH_ASSOC);
}

function createUser(PDO $pdo, string $nickname, string $email, string $password):bool|array
{
    $errors = [];
    if (empty($nickname)) {
        $errors["nickname"] = "Le nom d'utilisateur est requis";
    }
    if (count($errors)) {
        return $errors;
    }
    $query = $pdo->prepare("INSERT INTO user (nickname, email, password)
    VALUES (:email, :password, :nickname)");
    $query->bindValue(':email', $email, PDO::PARAM_STR);
    $query->bindValue(':nickname', $nickname, PDO::PARAM_STR);
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $query->bindValue(':password', $hash, PDO::PARAM_STR);
    
    return $query->execute();
}

