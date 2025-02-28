<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e80adaed67.js" crossorigin="anonymous"></script>
</head>
<body>
    <script>
        function confirmar(){
            let respuesta = confirm("Estas seguro de eliminar?");
            return respuesta;
            
        }
        </script>
    <h1 class="text-center p-3">CRUD PHP</h1>
    <?php
    include "model/conexion.php";
    include "controller/eliminar.php";
    ?>
        <div class="container-flud row">
            <form class = "col-4 p-3" method="POST">
                <h3 class="text-center text secondary">Registrar Personas</h3>
                <?php
                include "controller/registroPersona.php";
                
                ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombres</label>
                <input type="text" class="form-control" name="nombre">
            
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellidos</label>
                <input type="text" class="form-control" name="apellido">
            
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">DNI</label>
                <input type="text" class="form-control" name="DNI">
            
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha de Nacimiento</label>
                <input type="date" class="form-control" name="fecha">
            
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo Electronico</label>
                <input type="email" class="form-control" name="correo">
            
            </div>
            <button type="submit" class="btn btn-primary col-12" name="btnRegistrar" value="OK">Registrar</button>
            </form>
            <div class="col-8 p-3">
                <table class="table">
                <thead class="bg-info">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">DNI</th>
                        <th scope="col">Fecha de Nacimiento</th>
                        <th scope="col">Correo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "model/conexion.php";
                    $sql = $conexion->query("SELECT * FROM Personas");
                    while($datos = $sql->fetch_object()){ ?>
                     <tr>
                        <td><?= $datos->idPersona ?></td>
                        <td><?= $datos->nombre ?></td>
                        <td><?= $datos->apellido ?></td>
                        <td><?= $datos->dni ?></td>
                        <td><?= $datos->fechaNacimiento ?></td>
                        <td><?= $datos->correo ?></td>

                        <td>
                            <a href="editPersona.php?id=<?= $datos->idPersona ?>" class ="btn btn-small btn-warning m-3"><i class="fa-solid fa-pencil"></i></a>
                            <a onclick="return confirm('Estas seguro de eliminar?')" href="index.php?id=<?= $datos->idPersona ?>" class="btn btn-small btn-danger " name="btnEliminar"><i class="fa-solid fa-trash"></i>
                        </a>
                        </td>
                    </tr>                        
                    <?php }

                    ?>                   
                </tbody>
</table>
            </div>  
        </div>
    

    <!--Javascript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>