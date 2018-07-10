<?php
  function hobbyValido($hobby){
    return strlen($hobby) <= 15 && strlen($hobby) >= 3;
  }

  echo "digite o seu nome: ";
  $nome = readline();
  echo "Bem vindo, $nome";
  echo "insira a idade: ";
  $idade = readline();
  if($idade < 19){
    echo "Você não está autorizado no sistema";
    exit;
  }
  echo "Autorização aceita";
  echo "digite seu hobby:";
  $hobbies = explode( readline(),',');
  foreach ($hobbies as $hobby) {
    if(hobbyValido($hobby)){
      echo "Você confirma que gosta de $hobby";
    }
  }
?>
