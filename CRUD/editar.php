<?php
    include("conexion.php");
    $con = conectar();

    $Matricula = $_GET['id'];

    $sql = "SELECT * FROM alumnos WHERE Matricula = '$Matricula'";
    $query = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($query);

    if(!$row){
        echo "Alumno no encontrado";
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar alumno</title>
</head>
<body>
    <div>
        <h1>Editar alumno</h1>
        <form action="actualizar.php" method="POST">
            <div style="display: flex; gap: 10px">

            <input type="hidden" name="Matricula" value="<?php echo $row['Matricula']; ?>">

            <input type="text" disabled value="<?php echo $row['Matricula']; ?>">

            <input type="text"
            name="apellido_p"
            placeholder="Apellido paterno"
            value="<?php echo $row['apellido_p']; ?>">

            <input type="text"
            name="apellido_m"
            placeholder="Apellido materno"
            value="<?php echo $row['apellido_m']; ?>">

            <input type="text"
            name="nombre"
            placeholder="Nombre"
            value="<?php echo $row['nombre']; ?>">

            <input type="text"
            name="edad"
            placeholder="Edad"
            value="<?php echo $row['edad']; ?>">

            <button type="submit">Actualizar</button>
            <a href="alumnos.php">Cancelar</a>

            </div>
        </form>
    </div>
</body>
</html>
