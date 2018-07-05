<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Aula 13 - Funções</h1>
    <h2>Exercicio 1</h2>
      <?php
        function maior($n1, $n2, $n3){
          $maior=$n1;
          if($n2 > $maior){
            $maior=$n2;
          }
          if($n3 > $maior){
            $maior=$n3;
          }
          return $maior;
        }

        function tabela($base,$limite){
          $sequencia = [];
          for($i = $base; i <= $limite; $i++){
            array_push($sequencia,$i);
          }
          return $sequencia;
        }
       ?>
  </body>
</html>
