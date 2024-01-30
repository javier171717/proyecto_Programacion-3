<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BD_FERREMATERIALES</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            text-align: center;
        }

        .card {
            width:100%;
            border: 1px solid #52cf12;
            padding: 30px;
            border-radius: 6px;
            box-shadow:  0 20px rgba(0, 0, 0, 0.1);
            background-color: blue;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
        }

        button {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <h2>FEREMATERIALES</h2>
            <form id="user_form" action="agregar_user.php" method="post">
                <label for="cod_cliente">Cod_cliente</label>
                <input type="text" name="cod_cliente" placeholder="cod_cliente">

                <label for="Nit">Nit</label>
                <input type="text" name="Nit" placeholder="Nit">

                <label for="Nombre">Nombre</label>
                <input type="text" name="Nombre" placeholder="Nombre">

                <label for="Telefono">Telefono</label>
                <input type="text" name="Telefono" placeholder="Telefono">
                
                <label for="Direccion">Direccion</label>
                <input type="text" name="Direccion" placeholder="Direccion">

                <button type="submit">GUARDAR</button>
                <button type="button" onclick="limpiarFormulario()">BORRAR</button>
            </form>
        </div>
    </div>

    <script>
        function limpiarFormulario() {
            document.getElementById("user_form").reset();
        }
    </script>
</body>
</html>