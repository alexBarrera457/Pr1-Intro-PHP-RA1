<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$num1 = 4;
$num2 = 5;

$sum = $num1 + $num2;
echo"The numbers are $num1 and $num2"; echo"<br>";
echo"The sum of $num1 + $num2 = $sum"; echo"<br>";

$rest = $num1 - $num2;
echo "The substraction of $num1 - $num2 = $rest";echo"<br>";

$division = $num1/$num2;
echo "The division of $num1 / $num2 = $division";echo"<br>";

if ($num1>$num2) {

    echo "The number $num1 is the greather";echo"<br>";
} elseif ($num1<$num2) {

    echo "The number $num2 is the greather";echo"<br>";
}else {

    echo "The number are equals";echo"<br>";
}

$area = ($num1*$num2)/2;
if ($num1> 1 && $num2 > 1) {

    echo "The triangle area is $area";
}
    

?>
</body>
</html>