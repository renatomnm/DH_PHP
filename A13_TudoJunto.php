<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Juntando os arquivos Funcoes.php e Superficie.php</title>
  </head>
  <body>
    <?php
      include("A13_Funcoes.php");
      include("A13_Superficie.php");

      echo "<br><br>";
      echo "a area do circulo com raio 5 é: " . circulo(5);

      echo "<br><br>";
      echo "<h2>Exercicio 5<h2>";
      echo strpos("Adoro php, Eu também adoro php!","php",8);
    ?>
  </body>
</html>
