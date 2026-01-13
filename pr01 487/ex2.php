<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php
 $a = random_int(1,8   );
 switch ($a) {
    case '1':
        echo'Today is Monday';
        # code...
        break;
    case '2':
        echo 'Today is Tuesday ';
        break;
    case '3':
        echo 'Today is Wednesday';
        break;
    case '4':
        echo 'Today is Thursday';
        break;
    case '5':
        echo 'Today is Friday';
        break;
    case '6':
        echo 'Today is Saturday';
        break;
    case '7':
        echo 'Today is Sunday';
    default: 
    echo "The value does not correspond";
        # code...
        break;
 }
 ?>


</body>
</html>