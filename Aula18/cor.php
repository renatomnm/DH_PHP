<!DOCTYPE html>
<html>
	<head>
		<?php
			$color = "";
			session_start();
			if(isset($_POST["Verde"])){
				$color = "green";
			} else if(isset($_POST["Vermelho"])) {
				$color = "red";
			}
		?>
		<title>Exercicio 2 - Aula 18</title>
	</head>
	<body style='background:<?php echo $color ?>'>
		<h2>Exercicio 2 - Aula 18</h2>

		<form action="#" method="post">	
			<select name="cores" value="cores">
			  <option value="Verde">Verde</option>
			  <option value="Vermelho">Vermelho</option>
			<select>
			<input type="submit" name="aplicar">
		</form>
	</body>
</html>