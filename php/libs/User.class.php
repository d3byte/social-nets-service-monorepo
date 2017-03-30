<?php
require_once("Subd.class.php");

class User extends Subd {
  private $table;

  function __construct($table) {
    parent::__construct();
    $this->table = $table;
  }

  function GetUserWhereLogin($login){
    $user = $this->selectPDO($this->table, "*", "WHERE login='$login'");
    if(count($user) > 0) return $user;
    return 0;
  }
}
?>
