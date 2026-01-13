<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

$suma = 0;
$cantidad = 20;

for ($i = 1; $i <= $cantidad; $i++) {

    $nota = rand(0, 10);
    $suma += $nota;


    if ($nota >= 0 && $nota <= 4) {
        $texto = "Suspenso";
    } elseif ($nota <= 6) {
        $texto = "Aprobado";
    } elseif ($nota <= 8) {
        $texto = "Notable";
    } else {
        $texto = "Sobresaliente";
    }

    echo "Alumno $i: Nota = $nota ($texto)<br>";
}


$media = $suma / $cantidad;
echo "<br>Suma total de notas: $suma<br>";
echo "Media aritmética: " . number_format($media, 2);
?>

</body>
</html>