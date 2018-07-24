<?php

class config{
	//public(inherit garda access garna pauxa,insecure)
	//private(tyo class le matra pauxa,secure)
	//protected(tyo lai inherit garekole matra pauxa)
	private $host;
	private $username;
	private $password;
	private $database;

	function __construct($username, $password, $database){       // class ko obj banauda bittikai  tyo call hunxa
		
		$this->host = '127.0.0.1';
		$this->username = $username;
		$this->password = $password;
		$this->database = $database;

	}

function db_connect(){
	
	$connection = mysqli_connect($this->host, $this->username,'', $this->database, 3306);

	if(!$connection){
		die('couldn\'t connect to database');
	}

	return $connection;
}
}
