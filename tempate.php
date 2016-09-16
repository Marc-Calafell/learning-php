<!doctype html>
<html lang="en">
<head>
    <title>asd</title>
</head>
<body>
    <h1>
        <ul>
        <?php

        foreach ($noms AS $nom){
            echo "<li>".$nom."</li>";

        };
        ?>
        </ul>
    </h1>

    <ul>
        <?php foreach ($noms AS $nom) : ?>
        <li><?= $nom ?></li>
        <?php endforeach; ?>
    </ul>

    <ul>
        <?php foreach ($persona AS $dades => $dada) : ?>
            <li><b><?= $dades ?></b>: <?= $dada ?> </li>
        <?php endforeach; ?>
    </ul>
    <ul>
        <li><b><?= $persona['married'] ? "casat" : "solter" ?> </li>
    </ul>


</body>
</html>