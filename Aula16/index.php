<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $a = array('a'=>1,'b'=>2,'c'=>'eu <3 JSON');
      var_dump($a);
      $a = json_encode($a);
      echo "<br>";
      var_dump($a);
      $b = json_decode($a,true);
      $b2 = json_decode($a);
      echo "<br>";
      var_dump($b2);
      echo "<br>";
      echo $b['c'] . "||" .$b['a'] . "||" . $b['b'];
    ?>
  </body>
</html>
