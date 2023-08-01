<?php

/*
Escribe un programa que muestre por pantalla 10 palabras en inglés junto a su correspondiente
traducción al castellano. Las palabras deben estar distribuidas en dos columnas. Utiliza la etiqueta
<table> de HTML.
*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <table border="1px">

            <tr>
                <td><?php echo "Ingles"; ?></td>
                <td><?php echo "Español"; ?></td>               
            </tr>

            <tr>
                <td><?php echo "Bird"; ?></td>
                <td><?php echo "Pajaro";  ?></td>
            </tr>

            <tr>
                <td><?php echo "Elephant"; ?></td>
                <td><?php echo "Elefante";?></td>
            </tr>

            <tr>
                <td><?php echo "Spidder"; ?></td>
                <td><?php echo "Araña";  ?></td>
           </tr>

            <tr>
            <td><?php echo "pig"; ?></td>
            <td><?php echo "Cerdo"; ?></td>
           </tr>

            <tr>
                <td><?php echo "Delphin";?></td>
                <td><?php echo  "Delfin";?></td>
            </tr>

            <tr>
                <td><?php echo "Cat"; ?></td>
                <td><?php echo "Gato";?></td>
            </tr>

            <tr>
                <td><?php echo "Dog";?></td>
                <td><?php echo "Perro"?></td>
            </tr>

            <tr>
               <td> <?php echo "Cow";?></td>
                <td><?php echo "Vaca;"?></td>
            </td>

            <tr>
                <td><?php echo "Horse";?></td>
                <td><?php  echo "Caballo";?></td>
            </tr>

            <tr>
                <td><?php echo "Fox";?></td>
                <td><?php echo "Zorro"; ?></td>
            </tr>
     </table>
    
</body>
</html>