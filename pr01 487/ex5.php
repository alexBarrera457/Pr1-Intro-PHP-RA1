<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
 
<body>
    <?php
 
    $a = 0;
    $pares = 0;
    $impares = 0;
 
    do {
        $random_num = random_int(0, 20);
        echo $random_num . ",";
        $a += $random_num;
        if ($random_num % 2 == 0) {
            $pares++;
        } else {
            $impares++;
        }
    } while ($a <= 100);
    echo "<br>";
    echo $a . " ";
    echo "<br>";
    echo "There were $pares numbers pair";
    echo "<br>";
    echo "There were $impares numbers odd";
 
    ?>
</body>
 
</html>