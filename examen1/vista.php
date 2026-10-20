<?php
include("conexionex.php");
$con = conectar();
$query = mysqli_query($con, "SELECT * FROM productos");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen</title>

    <style>
        .card1 {
            text-align: center;
        }
        .foto{
            width: 100px;
            height: 100px;
        }
        .horizontal {
            display: flex;
  align-items: center; /* Centra los elementos verticalmente */
  gap: 16px; /* Espacio entre cada elemento */
  background-color: #ffffff;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  padding: 16px;
        }
    </style>
</head>
<body>
    <header class = "encabezado" style = "display: flex; background-color: lightblue;">
        
        <div>
            
            <h1> EXAMEN 1ER PARCIAL - APLICACIONES WEB</h1>
    
        </div>
    </header>

    <main class = "contenido" style = "display: grid ; grid-template-columns: 50% 50%; padding: 20px;">

        <div class ="izq" style = "background-color: red;">
            <h1 style = "padding : 10px;">Formulario</h1>
            <form action="insertar.php" method="POST">
                <div style = "padding : 5px;">
                    <input type = "text"
                    class = "form-control"
                    name = "nombre"
                    placeholder = "nombre"
                    >
                </div>
                
                <div style = "padding : 5px;">
                    <input type = "text"
                    class = "form-control"
                    name = "marca"
                    placeholder = "marca"
                    >
                </div>

                <div style = "padding : 5px;">
                    <input type = "text"
                    class = "form-control"
                    name = "stock"
                    placeholder = "stock"
                    >
                </div>

                <div style = "padding : 5px;">
                    <input type = "text"
                    class = "form-control"
                    name = "precio"
                    placeholder = "precio"
                    >
                </div>

                <button type = "submit">Guardar</button>

            </form>
        </div>


    <div class ="der" style = "background-color: orange;">
    <div style = "padding: 50px;">
        <table border = "2">
            <thead>
                <tr>
                    <th>NOMBRE</th>
                    <th>MARCA</th>
                    <th>STOCK</th>
                    <th>PRECIO</th>

                </tr>
            </thead>  
            <tbody>
                <?php while($row = mysqli_fetch_array($query)){ ?>
                <tr>
                    <td><?php echo $row['nombre'] ?></td>
                    <td><?php echo $row['marca'] ?></td>
                    <td><?php echo $row['stock'] ?></td>
                    <td><?php echo $row['precio'] ?></td>

                    <td>
                                <a href="delete.php?id=<?php echo $row['Matricula'];?>">Eliminar</a>
                            </td>
                </tr>
                <?php } ?>
            </tbody>
            </table>
        </div>
    </div>
    </main>
    <main class = "card1" style = "display: grid ; grid-template-columns: 33% 33% 33%; padding: 20px;">
    <div style = "background-color: cyan;" >
        <h1>R1 introduccion a git y a github</h1>
        <a href="../documentos/introduccion git y github.pdf">DOC</a>
</div>

    <div style = "background-color: antiquewhite;">
    <h1>R2 - HTML + CSS + BOX MODEL</h1>
    <a href="">DOC</a>
</div>

    <div style = "background-color: lightblue;">
        <h1>R3 FLEX Y GRID</h1>
    <a href="">DOC</a>
</div>

    
    </main>

    <header class = "horizontal" style = "display: flex; background-color: lightgreen; text-align: justify">
    
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRlTgPgW6zLSi22M4_s-xX7dqRDz68Q7vLW0mbs8vh36w&s=10" alt="foto1" class = "foto">

        
        <div>
            
            <h1 style = "text-align: justify;">JORGE ANDRES HIDALGO BARRERA</h1>
            <p>me han gustado estos 4 meses de universidad ya que he estado aprendiendo </p>
    
        </div>

        <div class = "foto2" style = "width: 100px;">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmZuSDYCohTb1KkYqziJmAYupWQwWVpySeyyIvKGk-kQ&s=10" alt="foto2" class = "foto">

    </div>
    </header>

    
</body>
</html>