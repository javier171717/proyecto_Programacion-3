<?php
include("conexion.php");
$con = connection();

// Asegúrate de validar que las claves existan en el array POST antes de usarlas
$Cod_cliente = isset($_POST['cod_cliente']) ? $_POST['cod_cliente'] : '';
$Nit = isset($_POST['Nit']) ? $_POST['Nit'] : '';
$Nombre = isset($_POST['Nombre']) ? $_POST['Nombre'] : '';
$Telefono = isset($_POST['Telefono']) ? $_POST['Telefono'] : '';
$Direccion = isset($_POST['Direccion']) ? $_POST['Direccion'] : '';


// Usar comillas simples alrededor de las variables en la consulta SQL
$sql = "INSERT INTO `cliente` (`cod_cliente`, `Nit`, `Nombre`, `Telefono`, `Direccion`) VALUES ('$cod_cliente', '$Nit', '$Nombre', '$Telefono', '$Direccion')";



$query = mysqli_query($con, $sql);

if ($query) {
    // Asegúrate de que no hay salida antes de la redirección
    ob_clean();
    header("location: ./index.php");
    exit(); // Asegúrate de detener la ejecución después de la redirección
} else {
    echo "Error: " . mysqli_error($con);
}
?>
