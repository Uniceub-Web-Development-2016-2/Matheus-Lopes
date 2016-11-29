<?php

include('httpful.phar');


	$url = "http://localhost/events/eventos/create";

	$body = json_encode($_POST);

	$response = \Httpful\Request::post($url)->sendsJson()->body($body)->send();   

	echo '<script>
		alert("Evento inserido com sucesso!");
		window.location.href = "dispatch.php";
	    		</script>';


?>

