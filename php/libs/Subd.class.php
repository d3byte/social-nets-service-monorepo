<?php
class MPDOd {
  private $MPDO;

  function __construct($dbname="panda", $host="localhost", $user="panda", $password="iZerrio123") {
    try {
      $this->MPDO = new PDO("mysql:dbname={$dbname};host={$host}","{$user}","{$password}");
      return $this->MPDO;
    } catch(PDOException $e) {
        echo "Произошла какая-то ошибка:".$e->getMessage();
    }
  }

  function selectPDO($db, $cols, $where="", $order="", $limit="") {
    $sql = "SELECT {$cols} FROM `{$db}` {$where} {$order} {$limit}"
    $rs = $this->MPDO->query($sql);
    $rs->execute();
    $row = $rs->fetchAll(PDO::FETCH_ASSOC);
    return $row;
  }

  function insertPDO($db, $cols="", $values="") {
    $sql = "INSERT INTO `{$db}` ({$cols}) VALUES ({$values})";
    $this->MPDO->query($sql);
  }

  function updatePDO($db, $what, $val, $where) {
    $sql = "UPDATE `{$db}` SET {$what}='{$val}' {$where}";
    $this->MPDO->query($sql);
  }

  function deletePDO($db, $where) {
    $sql = "DELETE FROM `{$db}` {$where}";
    return $this->MPDO->query($sql);
  }
}
?>
