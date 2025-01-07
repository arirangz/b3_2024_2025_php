<?php
$movies = [
    ["title" => "Interstellar", "year" => 2014, "director" => "Christopher Nolan"],
    ["title" => "La Momie", "year" => 1999, "director" => "Stephen Sommers"],
    ["title" => "Matrix", "year" => 1999, "director" => "Lana et Lilly Wachowski"],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section>
        <h1>Films</h1>
        <?php foreach ($movies as $movie) { ?>
            <article class="movie">
                <h2>Titre: <?= $movie["title"]; ?></h2>
                <p>Réalisé par <?= $movie["director"]; ?> en <?= $movie["year"]; ?></p>
            </article>
        <?php } ?>

        <?php foreach ($movies as $movie): ?>
            <article class="movie">
                <h2>Titre: <?= $movie["title"]; ?></h2>
                <?php if ($movie["title"] === "Matrix"): ?>
                    <h3>Super film!</h3>
                <?php endif; ?>
                <p>Réalisé par <?= $movie["director"]; ?> en <?= $movie["year"]; ?></p>
            </article>
        <?php endforeach; ?>

    </section>


</body>

</html>