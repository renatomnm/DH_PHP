<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercicio 2</title>
  </head>
  <body>
    <h1>Exercicio 2</h1>
      <?php
        function triangulo($b,$h){
          return ($b*$h)/2;
        }
        function retangulo($ladoA,$ladoB){
          return $ladoA * $ladoB;
        }
        function quadrado($lados){
          return retangulo($lados,$lados);
        }
        function circulo($raio){
          return pi() * $raio * $raio;
        }

        echo "Testando... <br>";
        echo "triangulo(base=3,altura=6); esperado:9 / realidade:". triangulo(3,6) ."<br>";
        echo "retangulo(ladoA=6,ladoB=4); esperado:24 / realidade:". retangulo(6,4) ."<br>";
        echo "quadrado(ladoA=8); esperado:64 / realidade:". quadrado(8) ."<br>";
        echo "circulo(raio=4); esperado:50,24 mais ou menos / realidade:". circulo(4);
       ?>
  </body>
</html>
