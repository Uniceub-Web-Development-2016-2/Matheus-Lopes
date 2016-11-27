<?php
include('httpful.phar');



$json = json_encode($array);

$uri = 'http://localhost/events/user/update';

$response = \Httpful\Request::put($uri)->sendsJson()->body($json)->send();

if($response->body){

}