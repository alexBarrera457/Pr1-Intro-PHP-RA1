<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Def 2 var > 10
$var1 = 15;
$var2 = 20;

    //2. 
 for ($i=0; $i <= $var1 ; $i+= 2) { 
      echo $i . ", ";
 } echo"<br>";

     //3.
while ($var2 >= 0) {
    echo $var2 .", ";
    $var2--;
} echo"<br>";

    //4.
    do {
        echo $var1 ." ";
        if ($var1 < $var2) {
            $var1++;
        } else {
            break;
        }
        
    } while ($var1 <= $var2);
    
    ?>
</body>
</html>