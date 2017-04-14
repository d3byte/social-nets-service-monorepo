<?php
  require 'db.php';
  require 'libs/Actions.class.php';
  if(isset($_POST)) {
    $request = R::dispense('requestlogs');
    foreach ($_POST as $key => $value) {
      $request->$key = $value;
    }
    R::store($request);
  }
?>
