<?php

class DbConn {
	static $conn;
	public function __construct($inifile){
		$inivars = array();
		parse_ini_file($inifile);
		foreach($inifile as $key => $value) {
		 define(strtoupper($key),$value);
		}
		$this->connect();

}//end constructor
public function connect(){
$this->conn = mysqli_connect(HOST,DBUSER,DBPWD,DBNAME);
}//end connect function
}//end class
?>