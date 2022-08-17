<?php
$nombre=$_GET['nombre'];
$name="juanjose";
setcookie("nueva",$name,time()+365);
echo $_COOKIE['nueva'];
/*if (strcmp($nombre,$cadena)==0) {
	echo "hola usuario";
}else{
	echo "adios";
}*/

?>