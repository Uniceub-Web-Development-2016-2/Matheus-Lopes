<?php
include('httpful.phar');




$uri = 'http://localhost/events/user/update';

$response = \Httpful\Request::put($uri)->sendsJson()->body(json_encode($_POST))->send();

if(!empty($response->body)){
	echo '<script>
		alert("Usuário atualizado com sucesso!");
		window.location.href = "update.php";
	    		</script>';
}else{
	echo '<script>
		alert("Usuário atualizado com sucesso!");
		window.location.href = "../eventShare/update.php";
	    		</script>';
}