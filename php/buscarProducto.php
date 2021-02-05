<?php

require 'productos.php';

// Variables
$servername = "localhost";
$username = "php";
$password = "1234";
$database = "pruebas";


// Establecer conexión con la base de datos y verificar la conexión
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Datos del formulario
$op=$_GET["tipo"];
$busqueda=$_GET["busqueda"];

// Creación de nuevo objeto Producto
$productoExistente = new Producto("prueba","prueba","prueba","prueba");

// Búsqueda del Producto en la BBDD
$productoExistente->buscarProducto($busqueda,$op,$conn);

// Cierre de la conexión
$conn->close();

?>



$result = $conn->query($sql);


if($result->num_rows > 0){
	while ($row = $result->fetch_assoc()){
		echo " <br> Codigo Producto : " . $row["cod"] . " <br> Descripcion: " . $row["descripcion"] . " <br> Precio: " . $row["precio"] . "<br> Stock : " . $row["stock"];

	}
}

else {
	echo "Hay 0 resultados";
}

$conn->close();
?>
