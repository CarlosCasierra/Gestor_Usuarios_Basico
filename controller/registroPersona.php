<?php
include "model/conexion.php";
if (!empty($_POST['btnRegistrar'])) {
    if(!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['DNI']) && !empty($_POST['fecha']) && !empty($_POST['correo'])){
        
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido']; 
        $DNI = $_POST['DNI'];
        $fecha = $_POST['fecha'];
        $correo = $_POST['correo'];

        $sql = $conexion->query("INSERT INTO Personas (nombre,apellido,dni,fechaNacimiento,correo) VALUES ('$nombre','$apellido',$DNI,'$fecha','$correo')");
        if ($sql==1) {
        echo '<div class="alert alert-success" >Registro Exitoso</div>';
        }else{
        echo "<div class='alert alert-danger'>Error al registrar</div>";
        }
    }else{
        echo "<div class='alert alert-warning'>Todos los campos son obligatorios</div>";
    }

}
?>