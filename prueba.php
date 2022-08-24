<?php
$usuario="admin@ini.com";
$contra=123;
if (isset($_POST["usuario"])) {
	if ($_POST["usuario"] == $usuario && $_POST["contra"] == $contra) {
	session_start();
	session_id();
	header("Location:index.php");
}else{
	echo "no";
}
}
if (isset($_POST["salir"])) {
	session_destroy();
	header("Location:menu.php");
}


/*$aux=0;
$num=0;
for ($i=0; $i <strlen($nombre) ; $i++) { 
	if ($nombre[$i]=='@'||$nombre[$i]=='.') {
		$aux++;
	}if ($aux==0) {
			$num= $i;
		}
}
echo substr($nombre,0,$num+1);
$_SESSION['nuevo']=$nombre;

echo $_SESSION["nuevo"];*/
?>