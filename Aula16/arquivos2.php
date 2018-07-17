<?php
  include "arquivos.php";
  $arquivo = fopen ('texto.txt', 'a+');
  echo " <br> <strong> imprimindo uma por linha </strong> <br>";
  while(!feof($arquivo)) {
    $linha = fgets($arquivo, 1024);
    echo $linha.'<br/>';
  }
  fclose($arquivo);
?>
