<?php

include("conexion.php");

$con = conectar();

$sql = "SELECT * FROM alumnos";

$query = mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud de alumnos</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>Matricula</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
            </tr>
        </thead>
        <tbody>
            
        </tbody>
    </table>
</body>
</html>