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
        $a = 2;
        $a = $a - 1;
        $a++;

        $b = 8;
        $b += 2;

        $c = $a + $b * $b;
        $d = $a * $b + $b;
        $e = $a * ($b + $b);
        $f = $a * $b / $a;
        $g = $b / $a * $a;

        echo "$a, $b, $c, $d, $e, $f, $g"
    ?>    
</body>
</html>