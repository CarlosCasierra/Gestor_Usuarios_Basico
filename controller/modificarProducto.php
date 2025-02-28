<?php
include "model/conexion.php";
if (!empty($_POST['btnRegistrar'])) {
    if(!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['DNI']) && !empty($_POST['fecha']) && !empty($_POST['correo'])){
        
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $dni = $_POST['DNI'];
        $fecha = $_POST['fecha'];
        $correo = $_POST['correo'];

        $sql = $conexion->query("UPDATE Personas SET nombre='$nombre',apellido='$apellido',dni=$dni,fechaNacimiento='$fecha',correo='$correo' WHERE idPersona=$id");
        
        if ($sql==1) {
         header("Location: index.php");
        }else{
        echo "<div class='alert alert-danger'>Error al registrar</div>";
        }
    }else{
        echo "<div class='alert alert-warning'>Todos los campos son obligatorios</div>";
    }
}
?>