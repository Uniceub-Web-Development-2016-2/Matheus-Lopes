<?php

include('httpful.phar');
include_once ('../events/database/db_manager.php');


  	if(isset($_FILES['image']['name'])){
  		$ex = strtolower(substr($_FILES['image']['name'], -4));
  		$new_name = md5(time()) . $ex;

  		$dir = "upload/";

  		move_uploaded_file($_FILES['image']['tmp_name'], $dir.$new_name);

  	$query = "INSERT INTO eventos (id, image, data) VALUES (null, '$new_name', NOW())";
  	//$result = (new DBConnector())->query($query);
  	if((new DBConnector())->query($query))
  		echo "Arquivo enviado com sucesso!";
  	else
  		echo "Falha ao enviar arquivo.";
  	

}

?>

