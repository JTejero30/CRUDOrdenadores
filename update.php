<?php
$ordenador=[$_POST['id'],$_POST['marca'],$_POST['modelo'],$_POST['precio'],$_POST['descripcion']];

require_once('Database.php');

Database::update($ordenador);

header('Location: index.php');
?>