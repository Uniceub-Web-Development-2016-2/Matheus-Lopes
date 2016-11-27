<?php
include('httpful.phar');

$id = $_GET['id'];



$uri = 'http://localhost/events/user/update';

$response = \Httpful\Request::put($uri)->sendsJson()->body(json_encode($_POST))->send();

if(!empty($response->body)){
	echo '<script>
		alert("Usuário atualizado com sucesso!");
		window.location.href = "requests.php";
	    		</script>';
}else{
	echo '<script>
		alert("Usuário atualizado com sucesso!");
		window.location.href = "../eventShare/requests.php";
	    		</script>';
}