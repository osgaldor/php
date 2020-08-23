<?php
require 'DBConn.class.php';

abstract class ModularQuery  {

private $dbconn= new DBConn('db.ini');
private $table;
private $sql;
private $verb;
/*
you can't have no constructor on an abstract class!

public function __construct($dbc,%table,$sqlstring){
  $this->dbconn=$dbc;
  $this->table=$table;
  $this->sql=$sqlstring;
}//end constructor
*/
protected abstract function execute();

}//end class

?>