<!DOCTYPE html>
<?php
  $faq = [
  ["pergunta" => "Quanto é 1 + 1", "resposta" => "2"],
  ["pergunta" => "Quanto é 2 + 1", "resposta" => "3"],
  ["pergunta" => "Quanto é 3 + 1", "resposta" => "4"]
  ];
  $cores = array("Azul" => "#0000ff","Verde" => "#008000","Vermelho" => "#ff0000");
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>faq</title>
  </head>
  <body>
    <?php
      foreach ($faq as $pergunta => $resposta) {
        echo  $resposta["pergunta"] . " = " . $resposta["resposta"];
        echo "<br>";
      }
    ?>
    <ul>
      <?php foreach ($cores as $cor => $hexa):?>
          <li style='color:<?php echo $hexa ?>;'><?php echo $cor; ?></li>
      <?php endforeach; ?>
    </ul>
  </body>
</html>
