<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Exercicio 3 - Requisição POST</h1>
    <?php
      foreach($_POST as $parameter){
        echo $parameter  . "<br>";
      }
      echo "<h2>Imprimindo Headers</h2>";
      foreach (getAllHeaders() as $key => $value) {
        echo $value . "<br>";
      }
     ?>
  </body>
</html>
