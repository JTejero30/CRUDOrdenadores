<?php

class Database
{

    public static function conectarBD($driver, $db, $host, $port, $user, $password)
    {

        $dsn = "$driver:dbname=$db;host=$host;port=$port";

        try {
            // La variable $gbd tiene toda la configuracion de la conexion
            $gbd = new PDO($dsn, $user, $password);
        } catch (PDOException $e) {
            echo 'Falló la conexión: ' . $e->getMessage();
        }
        return $gbd;
    }

    public static function construirTabla($gbd, $query)
    {

        $resulset = $gbd->query($query);;

        foreach ($resulset as $row) {
            echo '<tr>';
            echo '<td>' . $row['marca'] . '</td>';
            echo '<td>' . $row['modelo'] . '</td>';
            echo '<td>' . $row['precio'] . '</td>';
            echo '<td>' . $row['descripcion'] . '</td>';
            echo '<td><a href="delete.php?id='.$row['id'].'"><button>DELETE</button></a></td>';
            echo '<td><a href="edit.php?id='.$row['id'].'"><button>UPDATE</button></a></td>';
            echo '</tr>';
            
        }
    }

    public static function delete($id){
        $sql= 'DELETE FROM ordenadores WHERE id='.$id.'';
        self::conectarBD('mysql', 'practicaordenadores', 'localhost', '3306', 'root', '')->exec($sql);
    }

    public static function save($datos){

        $sql= "INSERT INTO ordenadores (marca, modelo, precio, descripcion) values ('$datos[0]','$datos[1]',$datos[2],'$datos[3]');";
        self::conectarBD('mysql', 'practicaordenadores', 'localhost', '3306', 'root', '')->exec($sql);

    }
    public static function findById($id){

        $sql="SELECT * from ordenadores where id= $id";
        $ordenador =self::conectarBD('mysql', 'practicaordenadores', 'localhost', '3306', 'root', '')->query($sql);

        return $ordenador->fetch(PDO::FETCH_ASSOC);
    }

    public static function update($ordenador){

        $sql="UPDATE ordenadores SET marca='$ordenador[1]', modelo='$ordenador[2]', precio=$ordenador[3], descripcion='$ordenador[4]' WHERE id= $ordenador[0]";
        $ordenador=self::conectarBD('mysql', 'practicaordenadores', 'localhost', '3306', 'root', '')->exec($sql);
    }
}
