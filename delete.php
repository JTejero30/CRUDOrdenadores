<?php
require_once ('Database.php');

Database::delete($_GET['id']);

header('Location: index.php') // esta funcion de php carga lo que se le ponga despues de Location

?>