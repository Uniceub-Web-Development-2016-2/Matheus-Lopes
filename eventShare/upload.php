<?php
include("httpful.phar");
include_once ('../events/database/db_manager.php');

  $name = $_POST['name'];
  $information = $_POST['information'];
  $imagem = $_FILES['image']['tmp_name'];
  $size = $_FILES['image']['size'];
  $type = $_FILES['image']['type'];
  $nome = $_FILES['image']['name'];
   
  $information = str_replace(" ", "_", $information);
  $information = str_replace(" ", "_", $information);
  $information = str_replace("ã", "a", $information);
  $information = str_replace("á", "a", $information);
  $information = str_replace("à", "a", $information);
  $information = str_replace("é", "e", $information);
  $information = str_replace("õ", "o", $information);
  $information = str_replace("ô", "o", $information);
  $information = str_replace("ó", "o", $information);
  $information = str_replace("ú", "u", $information);
  $information = str_replace("í", "i", $information);
  $information = str_replace("ç", "c", $information);

  $name = str_replace(" ", "_", $name); 
  $name = str_replace(" ", "_", $name);
  $name = str_replace("ã", "a", $name);
  $name = str_replace("á", "a", $name);
  $name = str_replace("à", "a", $name);
  $name = str_replace("é", "e", $name);
  $name = str_replace("õ", "o", $name);
  $name = str_replace("ô", "o", $name);
  $name = str_replace("ó", "o", $name);
  $name = str_replace("ú", "u", $name);
  $name = str_replace("í", "i", $name);
  $name = str_replace("ç", "c", $name);

  $nome = str_replace(" ", "_", $nome);
  $nome = str_replace("ã", "a", $nome);
  $nome = str_replace("á", "a", $nome);
  $nome = str_replace("à", "a", $nome);
  $nome = str_replace("é", "e", $nome);
  $nome = str_replace("õ", "o", $nome);
  $nome = str_replace("ô", "o", $nome);
  $nome = str_replace("ó", "o", $nome);
  $nome = str_replace("ú", "u", $nome);
  $nome = str_replace("í", "i", $nome);
  $nome = str_replace("ç", "c", $nome);

  if ($imagem != "none")
  {
      $file_open = fopen($imagem, "rb");
      $image = fread($file_open, $size);
      $image = addslashes($image);
      fclose($file_open);
   
 /*$url = "http://localhost/events/eventos/make";	  
 	 $body = json_encode($_POST);
 	 $response = \Httpful\Request::post($url)->sendsJson()->body($body)->send(); 


 	  */
  	$query = "INSERT INTO eventos (image, information, name, size, type, nome) VALUES ('$image','$information','$name','$size','$type','$nome')";
}
  	if((new DBConnector())->query($query)){
  		echo '<script> alert("Arquivo inserido com Sucesso!"); window.location.href = "../../eventShare/upload.html"; </script>';
  	}	
  	  else
  		echo '<script> alert("Falha ao enviar o arquivo!"); window.location.href = "../../eventShare/upload.html"; </script>';
     
?>

