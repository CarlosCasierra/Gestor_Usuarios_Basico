<?php 
include "model/conexion.php";  
    if(!empty($_GET["id"])){
        $id=$_GET["id"];
        $sql=$conexion->query("DELETE FROM Personas WHERE idPersona=$id");
        if ($sql==1) {
            echo '<div class="alert alert-success" >Eliminado Exitoso</div>';
        }else{
            echo "<div class='alert alert-danger'>Error al eliminar</div>";
        }
    }
?>