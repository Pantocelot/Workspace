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
        $moyenne;
        $sommenote=0;
        $lesEtudiants=array("Belial","Behemoth","Beelzebub","Asmodeus","Satanas","Lucifer");
        $lesNotes=array(12.00,10.00,15.00,10.00,15.00,20.00);

        echo "AFFICHAGE DES ETUDIANTS AVEC LEUR NOTE<br>";

        foreach($lesEtudiants as $values){
            echo $values," =";
            
            
        }

        foreach($lesNotes as $values){
            $sommenote=$sommenote+$values;
        }
        $moyenne=$sommenote/6;
        $moyenne=number_format($moyenne, 2, ',', ' ');
        echo "LA MOYENNE DE LA CLASSE EST DE ",$moyenne;
    ?>
</body>
</html>