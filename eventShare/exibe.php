<?php

$link = mysqli_connect("localhost","root","","database");



$path = "upload/";


//if(isset($_GET['name'])){
//	$id = mysqli_real_escape_string($link, $_GET['name']);
	$query = "SELECT `id`, `name`, `information`, `categoria`, `img` FROM `eventos`";
	$result = mysqli_query($link, $query);
	while ($row = $result->fetch_array(MYSQLI_ASSOC)) 
		$img = $path.$row["img"];
		//header("content-type : image/jpg");	
		echo "<div class='eventos' >";
			echo "<h1> Dados da Imagem</h1>";
			echo "<p>Nome:".$row["name"]."</p>";
			echo "<p>information:".$row["information"]."</p>";
			echo "<img src='$img' alt=''/>Categoria:".$row["categoria"].
				 "</div>";
/*
else
{
	echo "Error!";
}
  $id_imagem = $_GET['id'];
  $query = "SELECT image FROM eventos WHERE id = $id_imagem";
  
  $result = (new DBConnector())->query($query);

  Header( "Content-type: image/jpg");
  while ($m=mysql_fetch_array($result)) {
  	echo $m['image'];

  }
  //echo base64_encode(mysql_result($result, 0, 'image'));
   */
?>