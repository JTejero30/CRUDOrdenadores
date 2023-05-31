<?php

require_once('Database.php');


Database::conectarBD('mysql', 'practicaordenadores', 'localhost', '3306', 'root', '');


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>

<body>
    <main>
        <a href="create.php"><button>CREAR</button></a>
        <table>
            <thead>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Precio</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </thead>
            <tbody>
                <?php
                Database::construirTabla(Database::conectarBD('mysql', 'practicaordenadores', 'localhost', '3306', 'root', ''), 'SELECT * FROM ordenadores')
                ?>
                <td></td>
            </tbody>
        </table>
    </main>
</body>

</html>