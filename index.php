<?php
include("conexion.php");
$con = connection();
$query = "SELECT * FROM cliente";  // Reemplaza 'tu_tabla' con el nombre de tu tabla real
$result = mysqli_query($con, $query);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BASE DE DATOS</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        display:center;
        align-items: center;
        justify-content: center;
        height: 50vh;
        margin: 0;
    }

    .container {
        text-align: center;
    }

    .card {
        width: auto;
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
    }

    a {
        display: block;
        margin-bottom: 10px;
        text-decoration: none;
        color: #007bff; 
    }

    a:hover {
        text-decoration: underline;
    }
</style>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="card">
                <h4> FEREMATERIALES</h4>
                <div class="card body">
                    <table>
                        <thead class="table">
                            <a href="form_user.php" style="display:block; margin-bottom:10px;">Ir a formulario</a>
                            <tr>
                                <th>COD_CLIENTE</th>
                                <th>NIT</th>
                                <th>NOMBRE</th>
                                <th>TELEFONO</th>
                                <th>DIRECCION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = mysqli_fetch_array($result)): ?>
                                <tr>
                                    <td><?= $row['cod_cliente'] ?></td> 
                                    <td><?= $row['Nit'] ?></td>
                                    <td><?= $row['Nombre'] ?></td>
                                    <td><?= $row['Telefono'] ?></td>
                                    <td><?= $row['Direccion'] ?></td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
