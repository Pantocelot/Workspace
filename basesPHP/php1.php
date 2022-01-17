<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-1</title>
</head>
<body>
    <?php
        $PlusHabitant=0;
        $plusHabitantTempo=0;
        $PlusHabitantPays;
       $tabl=array(
            "Autriche"    => 8618243,
            "Allemagne"   => 81343289,
            "Royaume-Uni" => 63181775,
            "Belgique"    => 11413203,
            "Danemark"    => 5724456,
            "Espagne"     => 47265321,
            "France"      => 65129730,
            "Italie"      => 60360000,        
       );
       
       
       echo "AFFICHAGE DES POPULATIONS PAR PAYS EN 2019<br>";
       foreach($tabl as $clef=>$values){
           echo $clef," = ",$values,"<br>";
       }

       echo "<br>AFFICHAGE DES POPULATIONS PAR PAYS EN 2019 PAR ORDRE ALPHABETIQUE<br>";
       foreach($tabl as $clef=>$values){
            echo $clef, " = ", $values, "<br>";
       }

       echo "<br>AFFICHAGE DU PAYS AYANT PLUS DE 15 000 000 D'HABITANTS<br>";
       foreach($tabl as $clef=>$values){
            if($values>15000000)
            {
                echo $clef," = ",$values,"<br>";
            }
       }

       echo "<br>AFFICHAGE DU PAYS AYANT LE PLUS D'HABITANTS<br>";
       foreach($tabl as $clef=>$values){
            $plusHabitantTempo=$values;
           if($plusHabitantTempo>$PlusHabitant)
           {
                $PlusHabitant=$values;
                $PlusHabitantPays=$clef;
           }
           
       }
       echo $PlusHabitantPays," = ",$PlusHabitant, "<br>";
    ?>
    
    
</body>
</html>