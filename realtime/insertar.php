<?php
include("clases/conect.php");
$mensaje = $_POST['mensaje'];

$timestamp = date("Y-m-d H:i:s");

$q = "INSERT INTO mensajes(mensaje, timestamp) values ('$mensaje','$timestamp')";
$res = mysqli_query($mysqli, $q);
if ($res) {
	echo "ok";
}

?>