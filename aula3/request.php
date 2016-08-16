<?php
	class Request{
		
		private $Method;
		private $Protocol;
		private $IP;
		private $Resource;
		private $Parameters;
		private $Remote;
		
		public function __construct($method, $protocol, $ip, $remote, $resource, $parameters){
			$this->Method = $method;
			$this->Protocol = $protocol;
			$this->IP = $ip;
			$this->Resource = $resource;
			$this->Parameters = $parameters;
			$this->Remote = $remote;
		}
		public function getProtocol(){
			return $this->Protocol;
		}

		public function getRemote(){
			return $this->Remote;
		}

		public function getMethod(){
			return $this->Method;
		}
		public function getIP(){
			return $this->IP;
		}
		public function getResource(){
			return $this->Resource;
		}
		public function getParameters(){
			return $this->Parameters;
		}
		public function setProtocol($protocol){
			$this->Protocol = $protocol;
		}
		public function setMethod($method){
			$this->Method = $method;
		}
		public function setIP($ip){
			$this->IP = $ip;
		}
		public function setResource($resource){
			$this->Resource = $resource;
		}
		public function setParameters($parameters){
			$this->Parameters = $parameters;
		}

		public function setRemote($remote){
			$this->Remote = $remote;
		}

		public function toString(){
			$url = $getProtocol()."://".$getIP()."/".getResources."?";
			return $url;
		}	
	}
