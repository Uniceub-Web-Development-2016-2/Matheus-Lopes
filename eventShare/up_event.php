<?php
include('httpful.phar');


$uri = 'http://localhost/events/eventos/update';

$response = \Httpful\Request::put($uri)->sendsJson()->body(json_encode($_POST))->send();

if(!empty($response->body)){
	echo '<script>
		alert("Evento atualizado com sucesso!");
		window.location.href = "updateEvent.php";
	    		</script>';
}else{
	echo '<script>
		alert("Evento atualizado com sucesso!");
		window.location.href = "../eventShare/updateEvent.php";
	    		</script>';
}