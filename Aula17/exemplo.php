<html>
<head>
   <title>Basic Upload</title>
</head>
<body>
   <form action="#" method="POST" enctype="multipart/form-data">
      <input type="file" name="fileUpload">
      <input type="submit" value="Enviar">
   </form>
</body>
</html>

<?php
   function salvarImagem(){
     if($_FILES["fileUpload"]["error"] == UPLOAD_ERR_OK){
       print_r($_FILES["fileUpload"]);
       $nome=$_FILES["fileUpload"]["name"];
       $arquivo=$_FILES["fileUpload"]["tmp_name"];

       $ext = pathinfo($nome, PATHINFO_EXTENSION);
       $meuArquivo = dirname(__FILE__);
       $meuArquivo = $meuArquivo . "/exemplo/";
       $meuArquivo = $meuArquivo . "imagemNova." .$ext;

       print_r($meuArquivo);
       move_uploaded_file($arquivo,$meuArquivo);
     }
   }
   salvarImagem();
?>
