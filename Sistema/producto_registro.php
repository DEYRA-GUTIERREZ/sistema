<?php

include("conexion_bd.php");
$conexion = conectar_bd();

// Verifica si el formulario fue enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    // Obtén los datos del formulario
    $modelo = $_POST['modelo'];
    $descripcion = $_POST['descripcion'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];
    $estado = $_POST['estado'];
    $imagen = $_POST['imagen'];

   
      // Guardar la información del producto en la base de datos
      $sql = "INSERT INTO `producto` ( `descripcion_producto`, `precio_producto`, `cantidad_producto`, `imagen_producto`, `modelo_producto`, `estado_producto`) VALUES ( '$descripcion', '$precio', '$cantidad', '$imagen', '$modelo', '$estado')";

    // ejecutamos despues de agregar la conexion
        
    $ejecutar = mysqli_query($conexion, $sql);
        
    if(!$ejecutar){
        echo "cargar datos";
    } else{
        echo "Datos Guardados Correctamente<br><a href= '/sistema/producto_inicio.php'>Inicio</a>";
    }
}
?>
