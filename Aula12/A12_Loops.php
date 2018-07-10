<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Aula 12 - Loops</title>
  </head>
  <body>
    <?php
      echo "Exercicio 1 e 2: <br>";
      $aleatorio = rand(1,100);
      for ($i=1; $i < $aleatorio; $i++) {
          echo $i ." ";
      }

      echo "<br><br>";
      echo "Exercicio 3: Tabuada do 2 <br>";
      for ($i=0; $i <= 10; $i++) {
          echo  $i * 2 . " ";
      }
      echo "<br><br>";
      echo "Exercicio 4: cara ou coroa <br>";
      $coroas = 0;
      $faces = ["cara","coroa"];
      $lancados = 0;
      while($coroas < 5){
        $moeda = rand(0,1);
        $lancados++;
        echo $faces[$moeda] . " ";
        if($moeda === 1){
          $coroas++;
        }
      }
      echo "<br> lançamentos: $lancados";
      echo "<br><br>";
      echo "Exercicio 5: cara ou coroa 2 <br>";
      $caras = 0;
      $iterações = 0;
      do{
        $moeda = rand(0,1);
        $iterações++;
        if($moeda === 0){
          $caras++;
        }
      }while($caras < 1);
      echo "numero de rodadas: $iterações";
      echo "<br><br>";
      echo "Exercicio 6: array de nomes <br>";
      $nomes = ["alberto","breno","caetano","diego","eduardo"];
      for ($i=0; $i < 5 ; $i++) {
        echo $nomes[$i] . " ";
      }
      echo "<br>";
      $a = 0;
      while ($a < 5) {
        echo $nomes[$a] . " ";
        $a++;
      }
      echo "<br>";
      $b = 0;
      do {
        echo $nomes[$b] . " ";
        $b++;
      } while ($b < 5);
      echo "<br><br>";
      echo "Exercicio 7: array de numeros aleatorios <br>";
      $randarray = [];
      for ($i=0; $i < 10 ; $i++) {
        array_push($randarray,rand(0,10));
      }
      $a = 0;
      do {
        if($randarray[$a] === 5){
          echo "encontramos o 5!";
          break;
        }
        else{
          echo $a . " = " .$randarray[$a] . "<br>" ;
        }
        $a++;
      } while ($a < 10);
      echo "<br><br>";
      echo "Exercicio 8: range <br>";
      $arrayN = range('a','o');
      foreach ($arrayN as $key => $value) {
        echo "Na posição $key, está o valor $value .<br>";
      }
      echo "<br><br>";
      echo "Exercicio 9 e 10: Array Associativo <br>";
      $associativo = array("animal"=>"tigre","idade"=>18,"altura"=>1.95,"nome"=>"emanuel");
      foreach ($associativo as $key => $value) {
        echo $key.":".$value ."<br>";
      }
      echo "<br><br>";
      echo "Exercicio 11 : Paises <br>";
      $ceu = array( "Itália"=>"Roma", "Luxemburgo"=>"Luxemburgo", "Bélgica"=> "Bruxelas",
      "Dinamarca"=>"Copenhagen", "Finlândia"=>"Helsinki", "França" => "Paris",
      "Eslováquia"=>"Bratislava", "Eslovênia"=>"Liubliana", "Alemanha" => "Berlim", "Grécia" =>
      "Atenas", "Irlanda"=>"Dublin", "Holanda"=>"Amsterdã", "Portugal"=>"Lisboa",
      "Espanha"=>"Madri", "Suécia"=>"Estocolmo", "Reino Unido"=>"Londres", "Chipre"=>"Nicósia",
      "Lituânia"=>"Vilnius", "República Tcheca"=>"Praga", "Estônia"=>"Tallinn",
      "Hungria"=>"Budapeste", "Letônia"=>"Riga", "Malta"=>"Valletta", "Áustria" => "Viena",
      "Polônia"=>"Varsóvia");
      foreach ($ceu as $pais => $capital) {
        echo "A capital da " .$pais." é ".$capital ."<br>";
      }
      echo "<br><br>";
      echo "Exercicio 12: Paises 2 <br>";
      $ceu = [
              "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé" ],
              "Brasil" => ["Brasília", "Rio de Janeiro", "São Paulo"],
              "Colômbia" => ["Cartagena", "Bogotá", "Barranquilla"],
              "França" => ["Paris", "Nantes", "Lyon"],
              "Itália" => ["Roma", "Milão", "Veneza"],
              "Alemanha" => ["Munique", "Berlim", "Frankfurt"]
              ];
      foreach ($ceu as $pais => $nome) {
            echo "As cidades da ".$pais." são <br>";
            foreach($nome as $cidades) {
                echo $cidades . "<br>";
            }
            echo "<br>";
      }
      echo "<br><br>";
      echo "Exercicio 13: Paises 2, apenas da america <br>";
      $ceu = [
              "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé" ],
              "Brasil" => ["Brasília", "Rio de Janeiro", "São Paulo"],
              "Colômbia" => ["Cartagena", "Bogotá", "Barranquilla"],
              "França" => ["Paris", "Nantes", "Lyon"],
              "Itália" => ["Roma", "Milão", "Veneza"],
              "Alemanha" => ["Munique", "Berlim", "Frankfurt"]
              ];

      $naAmerica = ["Argentina" => true, "Brasil" => true, "Colômbia" => true, "França" => false, "Itália" => false, "Alemanha" => false];
      foreach ($ceu as $pais => $nome) {
          if($naAmerica[$pais] === true){
            echo "As cidades da ".$pais." são <br>";
            foreach($nome as $cidades) {
                echo $cidades . "<br>";
            }
          }
          echo "<br>";
      }
     ?>
  </body>
</html>
