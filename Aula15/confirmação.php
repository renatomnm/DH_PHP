<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Confirmação.php</title>
  </head>
  <body>
Agradecemos a sua inscrição, <?php echo $_GET['name'] ?>. Você disse que tem <?php echo $_GET['idade'] ?> anos.
Registramos o seu e-mail: <?php echo $_GET['email'] ?>. Obrigado! <br><br>
Você gosta de:<br>
  <?php
      if(isset($_GET['internet'])){
        echo $_GET['internet'] . "<br>";
      }
      if(isset($_GET['outdoor'])){
        echo $_GET['outdoor'] . "<br>";
      }
      if(isset($_GET['jornal'])){
        echo $_GET['jornal'] . "<br>";
      }
      if(isset($_GET['televisão'])){
        echo $_GET['televisão'] . "<br>";
      }
  ?>
  <br>
  Nacionalidade: <?php echo $_GET['nacionalidade']; ?>
  <br>
  <?php
    if(strcmp($_GET['password'],$_GET['confirmPassword']) === 0){
      echo "senha OK";
    }
    else {
      echo "senha invalida";
    }

    if(strlen($_GET['name'] < 15) && $_GET['idade'] < 18){
      header("Location:registro.php");
      exit;
    }
   ?>
  </body>
</html>
