<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>botones</title>
</head>
<style>
	#table,tr,th{
		border: black 2px solid;
		font-size: 20px;
		letter-spacing: 10px;
		width: 250px;
		position: relative;
	}
	.inicio{
		padding-left: 43%;
		padding-top: 200px;
	}
	input[type=image]{
	margin-left: 100px;
	}
</style>
<body></body>

	<div class="inicio">
	<form action="prueba.php" method="post">
	<table>
		<tr>
			<th>usuario e email</th>
			</tr>
			<tr>
			<th><input type="email" name="usuario" placeholder="email"></th>
			</tr>
			<tr>
				<th>contraseña</th>
			</tr>
			<tr><th><input type="password" name="contra" placeholder="contraseña"></th></tr>
	</table>
	<input type="image" src="envio.png" width="100px" height="50px" alt="submit" name="envio">

</form></div>

</body>
</html>
