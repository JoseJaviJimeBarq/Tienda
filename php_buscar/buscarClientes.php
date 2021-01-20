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
$sql="SELECT * from clientes WHERE";

if ($_POST["tipo"]=="nom")
{

	$sql = $sql." nombre like '%$busqueda%'";


} elseif ($_POST["tipo"]=="apll") {
	$sql = $sql." apellidos like '%$busqueda'";

} elseif ($_POST["tipo"]=="dni") {
	$sql = $sql." dni like '%$busqueda%'";

} elseif ($_POST["tipo"]=="email") {
	$sql = $sql." email like '%$busqueda%'";
	
} elseif ($_POST["tipo"]=="fecha") {
	$sql = $sql." fecha_nacimiento like '%$busqueda%'";
 }



$result = $conn->query($sql);


if($result->num_rows > 0){
	while ($row = $result->fetch_assoc()){
		echo " <br> Nombre : " . $row["nombre"] . " <br> Apellido: " . $row["apellidos"] . " <br> DNI: " . $row["dni"] . " <br> EMAIL : " . $row["email"] . "<br> Fecha : " . $row["fecha_nacimiento"];

	}
}

else {
	echo "Hay 0 resultados";
}

$conn->close();
?>
