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
    <div>
        <table border="2">
            <thead>
                <tr>
                    <th>Matricula</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>edad</th>
                    <th>acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($row=mysqli_fetch_array($query)){
                        
                        ?>
                        <tr>
                            <td><?php echo $row['Matricula']?></td>
                            <td><?php echo $row['nombre']?></td>
                            <td><?php echo $row['apellido_p']?></td>
                            <td><?php echo $row['apellido_m']?></td>
                            <td><?php echo $row['edad']?></td>
                            <td>
                                <a href="editar.php?id=<?php echo $row['Matricula'];?>">Editar</a>
                                <a href="delete.php?id=<?php echo $row['Matricula'];?>">Eliminar</a>
                            </td>
                        </tr>
                        <?php } ?>

            
                
            </tbody>
        </table>
        </div>
        <div>
            <h1>Formulario</h1>
            <form action="insertar.php" method="POST">
                <div style="display: flex; gap: 10px">

                <input type="text"
                class = "form-control"
                name ="Matricula"
                placeholder="Matricula">
                

                <input type="text"
                class = "form-control"
                name ="apellido_p"
                placeholder="Apellido paterno">
                

                <input type="text"
                class = "form-control"
                name ="apellido_m"
                placeholder="Apellido materno">
               

                <input type="text"
                class = "form-control"
                name ="nombre"
                placeholder="Nombre">
                

                <input type="text"
                class = "form-control"
                name ="edad"
                placeholder="Edad">


                <button type ="submit">Guardar </button>
                
                </div>
            </form>

        </div>
        </body>
</html>