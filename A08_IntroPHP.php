<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Aula 08 - Introdução ao PHP</title>
  </head>
  <body>
    <h2>exercicio 1</h2>
    <?php
      $numero_inteiro = 1;
      $numero_decimal = 1.2;
      $caractere_aspasDupla = "a";
      $caractere_aspasSimples = 'b';
      $cadeia_aspasDupla = "cadeia";
      $cadeia_aspasSimples = 'simples';

      echo "<strong>A: Número Inteiro:</strong> $numero_inteiro <br>";
      echo "<strong>var_dump: </strong>";
      var_dump($numero_inteiro);
      echo "<br><br>";

      echo "<strong>B: Número decimal</strong>: $numero_decimal <br>";
      echo "<strong>var_dump: </strong>";
      var_dump($numero_decimal);
      echo "<br><br>";

      echo "<strong>C: Caractere com aspas duplas:</strong> $caractere_aspasDupla <br>";
      echo "<strong>var_dump: </strong>";
      var_dump($caractere_aspasDupla);
      echo "<br><br>";

      echo "<strong>D: Caractere com aspas simples:</strong> $caractere_aspasSimples <br>";
      echo "<strong>var_dump: </strong>";
      var_dump($caractere_aspasSimples);
      echo "<br><br>";

      echo "<strong>E: Cadeia com aspas duplas:</strong> $cadeia_aspasDupla <br>";
      echo "<strong>var_dump: </strong>";
      var_dump($cadeia_aspasDupla);
      echo "<br><br>";

      echo "<strong>F: Cadeia com aspas duplas:</strong> $cadeia_aspasSimples <br>";
      echo "<strong>var_dump: </strong>";
      var_dump($cadeia_aspasSimples);
      echo "<br><br>";

      echo "<strong>G:</strong> ele é interpretado como uma string pelo PHP";
    ?>
    <h2>exercicio 2</h2>
    <?php
      $variavel01 = true;
      $variavel02 = false;
      $variavel03 = 0;
      $variavel04 = 1;
      $variavel05 = 6;
      $variavel06 = '';
      $variavel07 = "3";
      $variavel08 = "true";
      $variavel09 = 'false';
      $variavel10 = null;
      
      function tipoDado($varN)
      {
        if ( $varN == true )
        {
          echo 'o valor ' . $varN . ' é verdadeiro. <br>';
        }
        else
        {
          echo 'o valor ' . $varN . ' é falso. <br>';
        }
      }
      tipoDado($variavel01);
      tipoDado($variavel02);
      tipoDado($variavel03);
      tipoDado($variavel04);
      tipoDado($variavel05);
      tipoDado($variavel06);
      tipoDado($variavel07);
      tipoDado($variavel08);
      tipoDado($variavel09);
      tipoDado($variavel10);
    ?>
    <h2>exercicio 3</h2>
    <?php
      $meuArray=[
        0 => "Elefante",
        1 => "Leão",
        2 => "Antilope",
        3 => "Hipopotamo",
        4 => "Garça"
      ];
      var_dump($meuArray);
      $meuArray[] = "Guepardo";
      $meuArray[] = "Rinoceronte";
      echo "<br><br>";
      var_dump($meuArray);
      $meuArray[0] = "Gorila";
      echo "<br><br>";
      var_dump($meuArray);
      $meuArray[100] = "Giraffa";
      echo "<br><br>";
      var_dump($meuArray);
      $meuArray[16] = "Gordo";
      echo "<br><br>";
      var_dump($meuArray);
    ?>
    <h2>exercicio 4</h2>
      <?php
        $car=[];
        $car["marca"]="ford";
        $car["modelo"]="fiesta";
        $car["cor"]="prata";
        $car["ano"]="2012";
        $car["placa"]="ABC1234";
        var_dump($car["marca"]);
        echo "<br>";
        $car[14]="tokio marine";
        var_dump($car[14]);
        echo "<br>";
        $car["placa"] = "EFG5678";
        var_dump($car["placa"]);
        echo "<br>";
        $car["nome"] = "Antonio";
        $car["nome"] = "Claudio";
        var_dump($car["nome"]);
        echo "<br>";
       ?>
       <h2>exercicio 5</h2>
        <?php
          $inteiro = 5;
          $decimal = 7.2;
          echo $inteiro + $decimal;
          echo "<br>";
          echo $inteiro - $decimal;
          echo "<br>";
          echo $inteiro / $decimal;
          echo "<br>";
          echo $inteiro * $decimal;
          echo "<br>";
          echo $inteiro / $decimal;
          $resto = $inteiro % $decimal;
          echo "<br>";
          echo $resto;
          echo "<br>";
          $inteiro = $inteiro + 1;
          $decimal = $decimal + 1;
          echo "inteiro é " . $inteiro;
          echo "<br>";
          echo "decimal é " . $decimal;
          $inteiro = $inteiro + 5;
          $decimal = $decimal - 0.6;
          echo "<br>";
          echo "inteiro é " . $inteiro;
          echo "<br>";
          echo "decimal é " . $decimal;
          $resultado = ($inteiro * 2 + $decimal) / ($inteiro / 2);
          echo "<br>";
          echo "este é o resultado " . $resultado;
        ?>
        <h2>exercicio 6</h2>
          <?php
            $um = "Três pratos de trigo";
            $dois = "para";
            $tres = "três tigres tristes";
            echo $um . " " . $dois . " " . $tres;
            echo "<br>";
            echo "Três pratos de trigo para três tigres tristes";
          ?>
  </body>
</html>
