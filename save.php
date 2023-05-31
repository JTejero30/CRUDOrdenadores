<?php

require_once('Database.php');

$datos=[$_POST['marca'],$_POST['modelo'],$_POST['precio'],$_POST['descripcion']];

Database::save($datos);

header('Location: index.php');

?>