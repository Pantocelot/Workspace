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
        $tableau[] = 0; $NbPositif = 0;$NbNegatif = 0; $tableaut[] = 0;
        
        for ($i = 0; $i < 10; $i++)
        {
            $tableau[$i] = rand(-100, 100);
        
            if ($tableau[$i] < 0)
            {
                $NbNegatif = $NbNegatif + 1;
            }

            else
            {
                $NbPositif = $NbPositif + 1;
            }
        }
        echo "TABLEAU D'ORIGINE : ",var_dump($tableau)," <br>";
        echo "LE NOMBRE ÉLÉMENTS POSITIFS $NbPositif<br>";
        echo "LE NOMBRE ÉLÉMENTS NÉGATIFS $NbNegatif<br>";
        asort($tableau);
        echo "TABLEAU TRIÉ : ", var_dump($tableau);
    ?>
</body>
</html>