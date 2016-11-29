<?php

include('httpful.phar');


if(!isset($_SESSION))
    {
        session_start();
    }


if($_POST["email"] != null && $_POST["password"] != null)
{

	$login_array = array('email' => $_POST["email"], 'password' => $_POST["password"]);

	$url = "http://localhost/events/user/login";


	$body = json_encode($login_array);

	$response = \Httpful\Request::post($url)->sendsJson()->body($body)->send(); 
	//var_dump($response);
	//die();  
	
	$array = json_decode($response->body, true)[0];

	if(!empty($array) && $array["email"] == $_POST["email"] && $array["password"] == $_POST["password"]){
			$_SESSION['id'] = $array['id'];
			$_SESSION['fullname'] = $array['fullname'];
			$_SESSION['email'] = $array['email'];
			$_SESSION['password'] = $array['password'];

		header("Location: perfil.php");
	}
	else{
		echo  '<script>
		alert("Senha ou login inválido!");
		window.location.href = "../../eventShare/index.php";
	    		</script>';
	}
		
		//chamar página de erro


}


?>

