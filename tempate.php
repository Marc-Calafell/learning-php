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
        <?php foreach ($noms2 AS $nom) : ?>
        <li><?= $nom ?></li>
        <?php endforeach; ?>
    </ul>


</body>
</html>