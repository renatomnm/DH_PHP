<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario</title>
  </head>
  <body>
    <h1>Preencha o formulario</h1>
    <form method="get" action="action.php">
    <p class="name">
        <label for="name">Nome</label>
        <input type="text" name="name"/>
    </p>
    <p class="email">
        <label for="email">E-mail</label>
        <input type="text" name="email" />
    </p>
    <p class="categorias">
      <label for="categorias">Quais destas materias você gosta de estudar?</label>
      <br>
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
    </p>
    <p class="idade">
        <label for="idade">Idade </label>
        <input type="idade" style='width:40px;' name="idade"/>
    </p>
    <p class="text">
        <label for="mensagem">Mensagem</label>
        <textarea value="mensagem"/></textarea>
    </p>
    <p class="eunaosourobo">
        <label for="eunaosourobo">Eu não sou um robô</label>
        <input type="radio" name="eunaosourobo"/>
        <label for="eusourobo">Eu sou um robô</label>
        <input type="radio" name="eunaosourobo" checked/>
    </p>
    <p class="submit">
        <input type="submit" value="Enviar" />
    </p>
</form>
  </body>
</html>
