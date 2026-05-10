<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 6</title>
</head>

<body>
    <?php
    $number = cal_days_in_month(CAL_GREGORIAN, 2, 2016); 
    echo "Il y avait {$number} jours en février 2016";
    ?>
</body>

</html>