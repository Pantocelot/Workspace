<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Des histoires de dates et heures</h1>      
    
    <p>
        <h2>La date du jour simple :</h2>
    <?php
        echo 'Nous sommes le '. date ('d/m/Y').' - Il est exactement : '.date ('H\hi');
    ?>
    <br>
        <h2>La date en toutes lettres & majuscule :</h2>
    <?php
        setLocale(LC_ALL, 'fr_FR.utf8', 'fr', 'FR', 'fr_FR', 'utf8');
        echo 'Nous sommes : '.strftime('%A').', le '.strftime('%d %B %Y');
    ?>
    <br>
        <h2>Calculs sur les dates :</h2>
    <?php
        $hier = strftime('%A %d %B %Y', strtotime('-1 day'));
        echo 'Hier, nous étions le : ' .$hier;
    ?>
        <p>
    <?php
        $demain = strftime ('%A %d %B %Y', strtotime('+1 day'));   
        echo 'Demain, nous serons le : ' .$demain;
    ?>
        <p>
    <?php
        $moisp = strftime('%B', strtotime('+1 month'));
        echo 'Le mois prochain nous serons en : ' .$moisp;
    ?>
</body>
</html>