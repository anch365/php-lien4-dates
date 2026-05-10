<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 7</title>
</head>
<body>
    <!-- Dimanche 10/05/2026 -->
    <h2>Afficher la date du jour + 20 jours :</h2> 
    <?php 
    echo date('d-m-Y', strtotime('+20 days'));
    ?>
</body>
</html>