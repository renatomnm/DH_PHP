<!DOCTYPE html>
<?php
$Idade = 25;
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Confirmação.php</title>
  </head>
  <body>
    <?php
      foreach($_POST as $parameter){
        echo $parameter  . "<br>";
      }
      ?>
Agradecemos a sua inscrição, <?php echo $_POST['name'] ?>. Você disse que tem <?php echo $Idade ?> anos.
Registramos o seu e-mail: <?php echo $_POST['email'] ?>. Obrigado! <br><br>
Você gosta de:<br>
  <?php
      if(isset($_POST['internet'])){
        echo $_POST['internet'] . "<br>";
      }
      if(isset($_POST['outdoor'])){
        echo $_POST['outdoor'] . "<br>";
      }
      if(isset($_POST['jornal'])){
        echo $_POST['jornal'] . "<br>";
      }
      if(isset($_POST['televisão'])){
        echo $_POST['televisão'] . "<br>";
      }
  ?>
  <br>
  Nacionalidade: <?php echo $_POST['nacionalidade']; ?>
  </body>
</html>
