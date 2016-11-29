<?php


class RequestController
{
	const VALID_METHODS = array('GET', 'POST', 'PUT', 'DELETE');
	const VALID_PROTOCOL = array('HTTP', 'HTTPS');

	public function create_request($request_info)
	{
		if(!self::is_valid_method($request_info['REQUEST_METHOD']))
		{
			return array("code" => "405", "message" => "method not allowed");
			
		}	
		if(!self::is_valid_protocol(substr($request_info['SERVER_PROTOCOL'],0,-4)))
		{
		       return array ("code" => "505", "message" => "HTTP Version Not Supported");
		}
		return "test"



	//	$request_info['REMOTE_ADDR'];
	//	$request_info['SERVER_ADDR'];
	//	$request_info['SERVER_PROTOCOL'];
	//	$request_info['REQUEST_URI'];
	//	$request_info['QUERY_STRING'];
	//	file_get_contents('php://input');
		
	//	return new Request();
		
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

	public function is_valid_server($serv_addr)
	{
		if (filter_var($serv_addr, FILTER_VALIDATE_IP)) 
		    return true;	

		return false;
	}

	public function is_valid_remote($client_addr)
	{
		if(filter_var($client_addr, FILTER_VALIDATE_IP))
			return true;

		return false;
	}

	public function is_valid_uri($path)
	{
		if (isset($path))
			return true;	
		
		return false;
	}













}
