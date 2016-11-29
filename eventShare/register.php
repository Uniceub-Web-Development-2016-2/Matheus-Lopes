<?php

include('httpful.phar');


	$url = "http://localhost/events/user/create";

	$body = json_encode($_POST);

	$response = \Httpful\Request::post($url)->sendsJson()->body($body)->send();   

	echo "<script type='text/javascript'>alert('Usuário cadastrado com sucesso!')</script>";

	header("Location : perfil.php");



?>

