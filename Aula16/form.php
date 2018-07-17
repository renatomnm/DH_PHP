<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Preencha o formulario</h1>
    <form class="" action="index.html" method="post">
      <?php
          $json = "categorias.json";
          $arquivo = fopen($json, "r");
          $tamanho = filesize($json);
          $conteudo = fread($arquivo, $tamanho);
          fclose($arquivo);
          $cat = json_decode($conteudo);
      ?>
    </form>
  </body>
</html>
