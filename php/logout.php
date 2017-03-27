<?php
  require 'db.php';

  unset($_SESSION['logged_user']);
  header('Location: /admin_login.php');
?>
