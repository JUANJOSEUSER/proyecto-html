<?php
session_start();
if (session_id()) {
$_SESSION['session_id'] =$_POST['usuario'];
$_SESSION['contraseña'] =$_POST['contra']; 
$_SESSION['secion'] =session_id();
$_SESSION['usuario'] =date("Y-m-dates");
header("Location:menu2.html");
}else{
	
}

foreach ($_SESSION as $key => $val) {
	echo $key."=".$val;
	echo "<br>";
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