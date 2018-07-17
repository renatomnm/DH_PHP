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
          $categorias = json_decode($conteudo,true);
      ?>
          <?php foreach ($categorias as $key => $valores): ?>
            <?php foreach ($valores as $elementos): ?>
              <input type="checkbox" name="<?php echo $elementos["nome"]?>" value="<?php echo $elementos["id"]?>">
              <label for="<?php echo $elementos["nome"]?>"><?php echo $elementos["nome"]?></label>
              <br>
            <?php endforeach; ?>
          <?php endforeach; ?>
    </form>
  </body>
</html>
