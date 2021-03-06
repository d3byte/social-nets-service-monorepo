<?php
  require 'db.php';
  require 'libs/Actions.class.php';
  if(isset($_SESSION['logged_admin'])) {
    $orders = R::findAll('orders');
    if(isset($_POST['submit']))
      Actions::orderDone();
    else if(isset($_POST['process']))
      Actions::orderInProgress();
?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Список заказов</title>
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
        <a class="navbar-brand" href="admin.php">Администрирование</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Заказы <span class="sr-only">(current)</span></a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Товары <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="./admin_add.php">Добавить товар</a></li>
              <li><a href="./admin_redact.php">Редактировать товар</a></li>
            </ul>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="logout.php">Выйти</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>


  <div class="col-lg-12">
    <center>
      <form action="" method="post">
        <h4>Изменить состояние:</h4>
        <select name="id">
          <?php
            foreach($orders as $order) {
              $orderInMain = R::findOne("ordersmain", "id = ?", array($order['typeid']));
              $orderName = $orderInMain['name'];
              echo '<option value="'.$order['id'].'">Заказ №'.$order['id'].'. Тип услуги: '.$orderName.'</option>';
            }
          ?>
        </select>
        <center>
          <button style="margin-top: 10px;" name="submit" type="submit" class="btn btn-success btn-outline">Выполнен </button>
          <button style="margin-top: 10px;" name="process" type="submit" class="btn btn-info btn-outline">Выполняется </button>
        </center>
      </form>
    </center>
    <hr>
    <table style="width:100%">
        <tr>
          <th>Ссылка</th>
          <th>id</th>
          <th>Наименование услуги</th>
          <th>Кол-во</th>
          <th>Статус заказа</th>
        </tr>
        <?php
          foreach($orders as $order) {
            $orderInMain = R::findOne("ordersmain", "id = ?", array($order['typeid']));
            $orderName = $orderInMain['name'];
            echo '<tr><td><a href="'.$order['link'].'">'.$order['link'].'</a></td>';
            echo '<td>'.$order['id'].'</td>';
            echo '<td>'.$orderName.'</td>';
            echo '<td>'.$order['amount'].'</td>';
            echo '<td>'.$order['status'].'</td></tr>';
          }
        ?>
    </table>
    <hr>
  </div>




      <script src="https://cdn.jsdelivr.net/jquery/2.1.3/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>

  </html>
  <?php
  } else
    header("Location: admin_login.php");
?>
