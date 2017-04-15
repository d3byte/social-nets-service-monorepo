<?php
  require 'db.php';
  require 'libs/Actions.class.php';
  if(isset($_SESSION['logged_user'])) {
    $user = R::findOne('users', 'id = ?', array($_SESSION['logged_user']['id']));
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/octicons/3.1.0/octicons.min.css">
    <link rel="stylesheet" href="../styles/customstyle.css" type="text/css">
    <link rel="stylesheet" href="../styles/buttons.css" type="text/css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="../bootstrap/font-awesome/css/font-awesome.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300&amp;subset=cyrillic" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-default navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="profile.php"><?php echo $shopName; ?></a>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="balance.php"> Счёт <?php echo $user['balance']; ?> ₽ </a></li>
          <li><a href="profile.php"> История</a></li>
          <li><a href="market.php"> Новый заказ </a></li>
          <li><a href="logout.php">Выйти</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <main>
    <div class="container-fluid">
      <div class="row">
        <center><h3 style="color:#16a085;">Заказ успешно оплачен!</h3></center>
        <hr>
        <div class="col-lg-12">
          <center>
            <a href="market.php"><button class="btn btn-success btn-outline">Перейти к товарам</button></a>
          </center>
        </div>
        <hr>
        <?php
          if(isset($_POST))
            echo var_dump($_POST).'<hr>';
        ?>
      </div>
    </div>
  </main>
  <?php
    } else header('Location: signin.php');
  ?>
