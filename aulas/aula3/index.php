<?php 

include('request.php');

$method = $_SERVER['REQUEST_METHOD'];
$protocol = $_SERVER['SERVER_PROTOCOL'];
$rest = substr($protocol, 0, -4);
$ip = $_SERVER['SERVER_ADDR'];
$remote = $_SERVER['REMOTE_ADDR'];
$parameters = $_SERVER['QUERY_STRING'];
$resource = $_SERVER['REQUEST_URI'];
$variable2 = substr($resource, 1, 5);



$request = new Request($method, $rest, $ip, $remote, $variable2, $parameters);
var_dump($request);
