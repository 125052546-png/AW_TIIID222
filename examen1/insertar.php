<?php
    include("conexionex.php");
    $con = conectar();

    $nombre = $_POST['nombre'];
    $marca = $_POST['marca'];
    $stock = $_POST['stock'];
    $precio = $_POST['precio'];

    $sql = "INSERT INTO productos (nombre, marca, stock, precio)
    VALUES ('$nombre', '$marca', '$stock', '$precio')";

    $query = mysqli_query($con, $sql);

    if($query){
        header("Location: vista.php");
    }else{
        echo "Error al insertar el producto";
    }
?>
