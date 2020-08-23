<?php
class SelectQuery extends ModularQuery {

public function __construct($table,$dbc,$verb){
  $this->table-$table;
  $this->dbconn=$dbc;
  $this->verb=$verb;
  
}//end constructor
}//end class

?>