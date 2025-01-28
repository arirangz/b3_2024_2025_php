<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <?php if (isset($_SESSION["email"])): ?>
                    <li><a href="profile.php">Profil</a></li>
                    <li><a href="logout.php">Se déconnecter</a></li>
                <?php else: ?>
                    <li><a href="login.php">Se connecter</a></li>
                    <li><a href="signup.php">S'inscrire</a></li>
                <?php endif ?>
            </ul>
        </nav>
    </header>