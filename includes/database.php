<?php 

class Database{
	private $host;
	private $user;
	private $password;
	private $dbname;

	public function __construct($dbdetails){
		list($this->host,$this->user,$this->password,$this->dbname) = $dbdetails;
		$this->dbConnect();

	}

	private function dbConnect(){
		$db = mysql_connect($this->host, $this->user, $this->password);
		$db = mysql_select_db($this->dbname);
	}
}