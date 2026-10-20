<?php
    include("conexion.php");
    $con = conectar();

    $Matricula = $_GET['id'];


    $sql = "DELETE FROM alumnos WHERE Matricula = '$Matricula'";

    $query = mysqli_query($con, $sql);

    if($query){
        header("Location: alumnos.php");
    }else{
        echo "Error al eliminar alumno";
    }
?>