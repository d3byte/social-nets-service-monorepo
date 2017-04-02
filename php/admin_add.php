<?php
  require 'db.php';

  if(isset($_SESSION['logged_user'])) {
    if(isset($_POST['submit']) {
      
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
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
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Администрирование</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class=""><a href="#">Заказы <span class="sr-only">(current)</span></a></li>
        <li class="dropdown active">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Товары <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li class="active"><a href="admin_add.php">Добавить товар</a></li>
            <li><a href="admin_redact.php">Редактировать товар</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php">Выйти</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="col-lg-4"></div>
<div class="col-lg-4">
  <center>
    <form action="" method="post">
      <h1>Добавление товара</h1>
      <div class="form-group">
          <label for="name">Наименование</label>
          <input type="text" class="form-control" name="name" placeholder="Наименование товара">
      </div>
      <div class="form-group">
        <label for="description">Описание</label>
        <input type="text" class="form-control" name="description" placeholder="Описание товара">
      </div>
      <div class="form-group">
          <label for="price">Стоимость</label>
          <input type="text" class="form-control" name="price" placeholder="Цена">
      </div>
      <button type="submit" class="btn btn-success btn-outline">Добавить товар </button>
    </form>
  </center>
</div>
<div class="col-lg-4"></div>




    <script src="https://cdn.jsdelivr.net/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>
<?php
  } else
    header("Location: admin_login.php");
?>
