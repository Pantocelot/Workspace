<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $prix = 25;
        $quantite = 62;
        $montant = $prix * $quantite;
        $fdp = 0.02 * $montant;
        $remise = 0.05 * $montant;
        $montantf = $montant + $fdp - $remise;
        echo "Montant : $montant<br>";
        echo "Frais de port : $fdp<br>";
        echo "Remise : $remise<br>";
        echo "Montant final : $montantf Euros";
    ?>    
</body>
</html>