<?php

include_once ('request.php');
include_once ('db_user.php');
include_once ('db_events.php');
include_once ('db_images.php');

class ResourceController
{	
 	private $METHODMAP = ['GET' => 'search' , 'POST' => 'create' , 'PUT' => 'update', 'DELETE' => 'remove' ];
	
	public function treat_request($request) {
		return $this->{$this->METHODMAP[$request->getMethod()]}($request);
	
	}

	private function search($request) {
	   $query ='SELECT * FROM '.$request->getResource().' WHERE '.self::queryParams($request->getParameters());
		return self::random($query); 
	}

	private function EventsQuery($request){
		$connector =(new DB_Events())->query($sql);
		$sql = 'SELECT * FROM '.$request->getResource().' WHERE '.self::queryParams($request->getParameters());
		return $connector->fetchAll(PDO::FETCH_OBJ);	
	}

	private function ImagesQuery($request){
	   $link = (new DB_Images())->query($query);
	   $query = 'SELECT * FROM '.$request->getResource().' WHERE '.self::queryParams($request->getParameters());
		return $link->fetchAll(PDO::FETCH_OBJ);		
	}
		
	private function random($query){
	  $result = (new DBConnector())->query($query);
	    return $result->fetchAll(PDO::FETCH_OBJ);
	}
	
	private function queryParams($params) {
		$query = "";		
		foreach($params as $key => $value) {
			$query .= $key.' = '.$value.' AND ';	
		}
		$query = substr($query,0,-5);
		return $query;
	}

	
}




