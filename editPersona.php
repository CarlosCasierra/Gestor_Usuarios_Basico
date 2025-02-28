<?php

include "model/conexion.php";
$id=$_GET['id'];
$sql = $conexion->query("SELECT * FROM Personas WHERE idPersona=$id");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=   <form class = "col-4 p-3" method="POST">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form class = "col-4 p-3 m-auto" method="POST">
                    <h3 class="text-center text secondary">Modificar Personas</h3>
                    <input type="hidden" name="id" value="<?= $_GET['id']?>">
                    <?php
                    include "controller/modificarProducto.php";
                    while($datos=$sql->fetch_object()){?>

                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombres</label>
                <input type="text" class="form-control" name="nombre" value="<?=$datos->nombre ?>">
                
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" name="apellido" value="<?=$datos->apellido ?>">
                
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">DNI</label>
                    <input type="text" class="form-control" name="DNI" value="<?=$datos->dni ?>">
                
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Fecha de Nacimiento</label>
                    <input type="date" class="form-control" name="fecha" value="<?=$datos->fechaNacimiento ?>">
                
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Correo Electronico</label>
                    <input type="email" class="form-control" name="correo" value="<?=$datos->correo ?>">
                
                </div> 
                    <?php }
                    ?>
               
                <button type="submit" class="btn btn-primary col-12" name="btnRegistrar" value="OK">Modificar Registro</button>
    </form>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>