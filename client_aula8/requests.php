<?php

include('httpful.phar');


//$get_request = 'http://172.22.51.134/aula8/user/create?first_name="'.$_POST['first_name'].'"'.'&'.'lastname="'.$_POST['last_name'].'"'.'&'.'email="'.$_POST['email'].'"'.'&'.'gender="'.$_POST['gender'].'"'.'&'.'password="'.$_POST['password'].'"'.'&'.'birthdate="'.$_POST['birthdate'].'"';

$json = json_encode($_POST);
$uri = 'http://172.22.51.134/aula8/user/create';

$response = \Httpful\Request::post($uri)
->sendsJson()
->body($json)
->send();


echo  $response->body;
