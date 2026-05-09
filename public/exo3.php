<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
</head>

<body>
    <?php
    // Date en français
    $semaine = array(
        " Dimanche ",
        " Lundi ",
        " Mardi ",
        " Mercredi ",
        " Jeudi ",
        " Vendredi ",
        " Samedi "
    );
    $mois = array(
        1 => " janvier ",
        " février ",
        " mars ",
        " avril ",
        " mai ",
        " juin ",
        " juillet ",
        " août ",
        " septembre ",
        " octobre ",
        " novembre ",
        " décembre "
    );

    // Avec date()
    echo "La date FR : <br>",
    $semaine[date('w')], date('j'), " ", $mois[date('n')], date('Y');
    ?>
</body>

</html>