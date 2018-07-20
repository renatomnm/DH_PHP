<!DOCTYPE html>
<html>
<head>
	<?php
		$color = "";
	?>
	<title>Exercicio 2 - Aula 18</title>
	<style type="text/css">
		form {
			background: <?php echo $color?>;
		}		
	</style>
</head>
<body>
	<h2>Exercicio 2 - Aula 18</h2>
	<?php
		session_start();

	?>
	<form action="#" method="post">	
		<select name="cores" value="cores">
		  <option value="Verde">Verde</option>
		  <option value="Vermelho">Vermelho</option>
		<select>
		<input type="submit" name="aplicar">
	</form>
	<?php 

	?>
</body>
</html>