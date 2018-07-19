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

    if($_POST){

           function salvarImagem(){
             $path = pathinfo($_FILES["fileUpload"]["name"], PATHINFO_DIRNAME);
             echo $path;

            if($_FILES["fileUpload"]["error"] == UPLOAD_ERR_OK){
              print_r($_FILES["fileUpload"]);
              $nome=$_FILES["fileUpload"]["name"];
              $arquivo=$_FILES["fileUpload"]["tmp_name"];

              $ext = pathinfo($nome, PATHINFO_EXTENSION);
              $meuArquivo = dirname(__FILE__);
              $meuArquivo = $meuArquivo . "/uploads/";
              $meuArquivo = $meuArquivo . $FILES["fileUpload"]["name"] . $ext;

              if(file_exists($meuArquivo)){
                echo "Deu Erro";
              }

              print_r($meuArquivo);
              move_uploaded_file($arquivo,$meuArquivo);
              }
            }
           salvarImagem();

     }
?>
