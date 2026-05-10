<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5</title>
</head>

<body>
    <h2>le nombre de jour qui sépare la date du jour avec le 16 mai 2016</h2>
    <p>
        <?php
        $origin = new DateTimeImmutable('2026-05-10');
        $target = new DateTimeImmutable('2016-05-16');
        $interval = $origin->diff($target);
        echo $interval->format('%R%a days'); ?>
    </p>
</body>

</html>