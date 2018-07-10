<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Condicional php</title>
  </head>
  <body>
    <h2>Exercício 1</h2>
      <?php
        $m = 10;
        $n = 11;
        if($n > $m){
          echo "$n é maior que $m";
        } else {
          echo "$m é maior que $n";
        }
      ?>
    <h2>Exercicio 2 e 3</h2>
     <?php
      $randomico1=rand(1,5);
      if($randomico1 == 3){
        echo "3";
      }
      else{
        echo "não é o número 3";
      }
     ?>
     <h2>Exercicio 4 e 5</h2>
      <?php
        $randomico2=rand(1,100);
        if($randomico2 > 50 && $randomico2%2==0 || $randomico2==0){
          echo "o número $randomico2 cumpre a condição";
        }
        else{
          echo "o número $randomico2 não cumpre a condição";
        }
      ?>
      <h2>Exercicio 6</h2>
      <?php
          $idade=22;
          $sexo="Outro";
          $casado=false;
          if(!$casado){
            echo "boas vindas";
          }
          else{
            echo "não casado";
          }
       ?>
       <h2>Exercicio 7 e 8</h2>
        <?php
          $quantidadeAlunos=rand(0,100);
          if($quantidadeAlunos){
            echo "true";
          }
          else {
            echo "false";
          }
        ?>
        <h2>Exercicio 9</h2>
          <?php
          $numero=rand(1,100);
          $imprimir = $numero % 2 == 0 ? "numero é par" : "numero é impar";
          echo $imprimir;
          ?>
          <h2>Exercicio 10, 11 e 12</h2>
            <?php
            $variavel = mt_rand();
            switch ($variavel) {
              case 1:
                echo "1";
                break;
              case 2:
                echo "2";
                break;
              case 2:
                echo "2";
                break;
                case 3:
                  echo "3";
                  break;
                default:
                  echo $variavel;
                break;
            }
            ?>
  </body>
</html>
