<?php
function connection(){
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "Facturacion";

    $connect = mysqli_connect($host, $user, $pass, $db);
    
    if (!$connect) {
        die("Error de conexión: " . mysqli_connect_error());
    } else{
        echo "Conexion exitosa. Sus datos fueron enviados correctamente.";
    }

    return $connect;
}
?>
