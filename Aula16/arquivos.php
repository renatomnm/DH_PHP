<?php
  $arquivo = 'texto.txt';
  $file = fopen($arquivo,'a+');
  for ($i=0; $i < 100 ; $i++) {
      fwrite($file,"olá mundo, testando! \n");
  }
  echo "<strong> utilizando o file_get_contents </strong><br>";
  $conteudo = file_get_contents($arquivo);
  print_r($conteudo);
  fclose($file);
?>
