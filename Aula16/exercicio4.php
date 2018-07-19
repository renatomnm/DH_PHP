<?php
  function result($frase){
    echo "A frase a ser criptografada: " . $frase;
    echo "<br>";
    echo "Após a criptografia md5: " . md5($frase);
    echo "<br>";
    echo "Após a criptografia sha1: " . sha1($frase);
    echo "<br>";
    echo "Utilizando o password hash PASSWORD_DEFAULT: " . password_hash($frase, PASSWORD_DEFAULT);
    echo "<br>";
    echo "Utilizando o password hash PASSWORD_BCRYPT: " . password_hash($frase, PASSWORD_BCRYPT);
  }
  result("bem vindo!");
?>
