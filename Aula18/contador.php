<!DOCTYPE html>
<html>
<head>
	<title>Contador</title>
</head>
<body>
	<?php
		session_start();
		if(!isset($_SESSION["contador"])) {
	  		$_SESSION["contador"] = 0;
	  	}
	?>
	<h1>Aula 18 - Exercicio 1</h1>
	<form action="#" method="post"> 
		<input type="submit" value="Aumentar" name="Aumentar">
		<input type="submit" value="Reiniciar" name="Reiniciar">
	</form>
	<?php
		if(isset($_POST)){
			if(isset($_POST["Aumentar"])){
				$_SESSION["contador"]++; 
			}
			else if(isset($_POST["Reiniciar"])){
			 	$_SESSION["contador"] = 0;	 
			}			
		} 
		echo $_SESSION["contador"];
	?>
</body>
</html>