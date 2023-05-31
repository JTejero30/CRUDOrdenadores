<?php
$id= $_GET['id'];
require_once('Database.php');
$ordenador=Database::findById($id)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form-styles.css">
    <title>Document</title>
</head>
<body>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $ordenador['id']  ?>">
        <input type="text" name="marca" value='<?php echo $ordenador['marca'] ?>'>
        <input type="text" name="modelo" value="<?php echo $ordenador['modelo']  ?>">
        <input type="text" name="precio" value="<?php echo $ordenador['precio']  ?>">
        <input type="text" name="descripcion" value='<?php echo $ordenador['descripcion'] ?>'>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>