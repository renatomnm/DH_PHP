<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
        //var_dump($_GET);
        foreach ( $_GET as $chave => $valor ) {
          echo $valor . "<br>";
        }
     ?>
  </body>
</html>
