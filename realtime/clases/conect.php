<?php

    /*
     *MySQLi connection
     */
    $mysqli = new MySQLi('localhost', 'root', '', 'chat');
    if ($mysqli -> connect_errno) {
      die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno()
      . ") " . $mysqli -> mysqli_connect_error());
    }
    else
    //echo "Conexión exitosa!";

//	$link =mysqli_connect("localhost","root","");
//	if($link){
//		mysqli_select_db($link,"academ");
//	}
 ?>