<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4</title>
</head>

<body>
    <h2>Timestamp du jour :</h2>
    <p>
        <?php
        echo time();
        ?>
    </p>

    <h2> le timestamp du mardi 2 août 2016 à 15h00 :</h2>
    <p>
        <?php
        echo mktime(15, 0, 0, 8, 02, 2016);
        ?>
    </p>
</body>

</html>