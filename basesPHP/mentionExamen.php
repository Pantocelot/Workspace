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
        $note = rand(0,20);
        if ($note <0 || $note >20)
        {echo "non valide";}
        elseif ($note >0 && $note <=10)
        {echo "c'est nul";}
        elseif ($note >=10 && $note <12)
        {echo "pas de mention";}
        elseif ($note >=12 && $note <14)
        {echo "mention assez bien";}
        elseif ($note >=14 && $note <16)
        {echo "mention bien";}
        elseif ($note >=16 && $note <20)
        {echo "mention très bien";}
    ?>
</body>
</html>