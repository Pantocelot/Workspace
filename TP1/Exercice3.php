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
        $note = 15;
        if ($note <0 || $note >20)
        {echo "Note non valide";}
        elseif ($note <10)
        {echo "Refusé";}
        elseif ($note >=10 && $note <12)
        {echo "Admis avec mention passable";}
        elseif ($note >=12 && $note <14)
        {echo "Admis avec mention assez bien";}
        elseif ($note >=14 && $note <16)
        {echo "Admis avec mention bien";}
        elseif ($note >=16 && $note <18)
        {echo "Admis avec mention très bien";}
        elseif ($note >=18)
        {echo "Admis avec félicitations du jury";}
    ?>    
</body>
</html>