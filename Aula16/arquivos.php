<?php
  $arquivo = 'texto.txt';
  $file = fopen($arquivo,'a+');
  for ($i=0; $i < 100 ; $i++) {
      fwrite($file,"olá mundo, testando! \n");
  }
  $conteudo = file_get_contents($arquivo);
  print_r($conteudo);
  fclose($file);
?>
