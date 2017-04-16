<?php
  require "libs/rb.php";
  require "libs/config.php";

  R::setup("mysql:host=$dbHost;dbname=$dbName", "$dbLogin", "$dbPassword");

  session_start();
?>
