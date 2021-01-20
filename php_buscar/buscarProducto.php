<?php
$servername = "localhost";
$username = "php";
$password = "1234";
$dbname = "pruebas";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Ha habido un fallo " . $conn->connect_error);
}

$op=$_POST["tipo"];
$busqueda=$_POST["busqueda"];
$sql="SELECT * from productos WHERE";

if ($_POST["tipo"]=="cod")
{

	$sql = $sql." cod=$busqueda";


} elseif ($_POST["tipo"]=="desc") {
	$sql = $sql." descripcion like '%$busqueda%'";


} elseif ($_POST["tipo"]=="pre") {
	$sql = "SELECT * from productos WHERE precio=$busqueda";

} elseif ($_POST["tipo"]=="stock") {
	$sql = $sql." stock like '%$busqueda%'";

 }



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
