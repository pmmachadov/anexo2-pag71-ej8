<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Crea una función tiempo() con dos parámetros de entrada; $hora y $minuto. La
función debe incrementar en uno el valor del parámetro $minuto. Si $minuto alcanza
entonces el valor 60, debe asignársele el valor 0 e incrementar en uno el valor del
parámetro $hora.  -->

<?php
    include 'funlib.php';
    echo "<table border = 1>";
    echo "<tr>";
    echo "  <td> Pablo  </td>";
    echo "  <td> Machado </td>";
    echo "</tr>";
    echo "<td> " . "Ejercicio" . "</td>";
    echo "<td> " . "anexo2-pag71-ej8" . "</td>";
    echo "</tr>";
    echo "<td> " . "Resultado" . "</td>";
    echo "<td> " . "La hora es: 24:0" . "</td>";
    echo "</tr>";
    echo "</table>";
?>

    <?php

    require_once 'funlib.php';
    tiempo(23, 59);
    ?>


</body>

</html>