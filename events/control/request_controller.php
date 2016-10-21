<?php

include ('resource_controller.php');
include_once('../eventos/model/request.php');

class RequestController
{
	const VALID_METHODS = array('GET', 'POST', 'PUT', 'DELETE');
	const VALID_PROTOCOL = array('HTTPS/1.1', 'HTTPS/1.0', 'HTTP/1.1', 'HTTP/1.0');

	private function create_request($request_info)
	{
		if(!self::is_valid_method($request_info['REQUEST_METHOD']))
		{
			return array("code" => "405", "message" => "method not allowed");
		}	

		if(!self::is_valid_protocol($request_info['SERVER_PROTOCOL']))
		{
			return array("code" => "505", "message" => "HTTP Version Not Supported");
		}

		if(!self::is_valid_remote($request_info['REMOTE_ADDR']))
		{
			return array("code" => "400", "message" => "Bad Request");
		}
		
 	    $request = new Request($request_info['REQUEST_METHOD'],$request_info['SERVER_PROTOCOL'],$request_info['SERVER_ADDR'],$request_info['REMOTE_ADDR'],$request_info['REQUEST_URI'],$request_info['QUERY_STRING'],file_get_contents('php://input'));
			
		return $request;		
	}
	
	public function is_valid_method($method)
	{
		if( is_null($method) || !in_array($method, self::VALID_METHODS))
			return false;
		
		return true;
	}

	public function is_valid_protocol($protocol)
	{
		if( is_null($protocol) || !in_array($protocol, self::VALID_PROTOCOL))
			return false;
		
		return true;	
	}

	public function is_valid_server($server_ip)
	{
		if (filter_var($server_ip, FILTER_VALIDATE_IP)) 
		    return true;	

		return false;
	}

	public function is_valid_remote($remote_ip)
	{
		if(filter_var($remote_ip, FILTER_VALIDATE_IP))
			return true;

		return false;
	}


	public function execute() {
		$request = self::create_request($_SERVER);
		$resource_controller = new ResourceController();
	    return $resource_controller->treat_request($request);
	}

}