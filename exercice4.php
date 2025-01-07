<?php
function surface(float $longueur, float $largeur): float
{
    return $longueur * $largeur;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <li>Chambre: <?= surface(3, 3) ?>m²</li>
        <li>Salon: <?= surface(4, 4) ?>m²</li>
    </ul>
</body>

</html>