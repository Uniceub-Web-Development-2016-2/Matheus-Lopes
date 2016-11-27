<?php

$link = mysqli_connect("localhost","root","","database");


if(isset($_GET['id'])){
	$id = mysqli_real_escape_string($link, $_GET['id']);
	$query = mysqli_query($link, "SELECT image FROM eventos WHERE id = '$id'");
	//$result = (new DBConnector())->query($query);
	while ($row = mysqli_fetch_assoc($query)) {
			$imageData = $row["image"];
		}	
		header("content-type : image/jpg");
		echo $imageData;
}
else
{
	echo "Error!";
}
  /*$id_imagem = $_GET['id'];
  $query = "SELECT image FROM eventos WHERE id = $id_imagem";
  
  $result = (new DBConnector())->query($query);

  Header( "Content-type: image/jpg");
  while ($m=mysql_fetch_array($result)) {
  	echo $m['image'];

  }
  //echo base64_encode(mysql_result($result, 0, 'image'));
   */
?>