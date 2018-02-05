<?php
include("clases/conect.php");
$q = "SELECT * FROM mensajes";
$res = mysqli_query($mysqli, $q);
while($timi = mysqli_fetch_array($res))
{
	echo "<li>".$timi['mensaje']."</li>";
}
?>