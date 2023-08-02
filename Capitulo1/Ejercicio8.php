<?php
/*
Realiza un conversor de dólares a pesos colombianos. La cantidad en dólares que se quiere
convertir deberá estar almacenada en una variable.
*/

$valor = 3970.53; 
$peso = 0;

 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Dolares a Peso Colombiano</title>
</head>

<body>
    <fieldset>
        <legend>Conversor de Dolares a Peso Colombiano</legend>
        <form action="#" method="post">
            <p>Dolar<input type="number" step="0.01" name="cantidad"></p>
            <p><input type="submit" name="Calcular"></p>
        </form>
    </fieldset>
    <?php
    if ($_POST) {
        $cant = $_POST['cantidad'];
        $resultado = $cant * $valor;
        echo "<p>$cant Dólares son: $resultado Pesos</p>";
    }
    ?>
</body>

</html>
