<?php
  require 'db.php';
  if(isset($_SESSION['logged_admin'])) {
    if(isset($_POST["submit"])) {
      $tovar = R::findOne('ordersmain', 'name = ?', array($_POST['tovar']));
      $tovar['name'] = $_POST['name'];
      $tovar['description'] = $_POST['description'];
      if(isset($_POST['price']))
        $tovar['price'] = $_POST['price'];
      R::store($tovar);
    } else if(isset($_POST["delete"])) {
        $tovar = R::findOne('ordersmain', 'name = ?', array($_POST['tovar']));
        R::trash($tovar);
    }
    $goods = R::findAll("ordersmain");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Изменить товар</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/octicons/3.1.0/octicons.min.css">
    <link rel="stylesheet" href="../styles/customstyles.css" type="text/css">
    <link rel="stylesheet" href="../styles/buttons.css" type="text/css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="../bootstrap/font-awesome/css/font-awesome.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300&amp;subset=cyrillic" rel="stylesheet">
    <script src="../js/modal.js"></script>
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
        <li class=""><a href="admin.php">Заказы <span class="sr-only">(current)</span></a></li>
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
      <h1>Редактирование товара</h1>
      <h2>Выберите товар: </h2>
      <div class="dropdown">
        <select name="tovar">
          <?php
            foreach($goods as $good) {
              echo '<option value="'.$good['name'].'">'.$good['name'].'</option>';
            }
          ?>
        </select>
      </div>
      <div class="form-group">
          <label for="name">Название товара</label>
          <input type="text" class="form-control" name="name" placeholder="ОМОНовец с митинга Навального"> <!-- подставляется название товара -->
      </div>
      <div class="form-group">
          <label for="name">Описание товара</label>
          <input type="text" class="form-control" name="description" placeholder="ОМОНовец с митинга Навального"> <!-- подставляется название товара -->
      </div>
      <div class="form-group">
          <label for="price">Стоимость</label>
          <input type="text" class="form-control" name="price" placeholder="9.99"> <!--  подставляется его цена  -->
      </div>
      <button name="submit" class="btn btn-success btn-outline" data-toggle="modal" data-target="#myModal2">Обновить выбранный товар </button>
      <button name="delete" class="btn btn-danger btn-outline" data-toggle="modal" data-target="#myModal">Удалить выбранный товар </button>
    </form>
</center>
</div>
<div class="col-lg-4"></div>

<!-- modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        Выбранный товар успешно удалён.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-outline" data-dismiss="modal">Закрыть</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        Выбранный товар успешно обновлен.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-outline" data-dismiss="modal">Закрыть</button>
      </div>
    </div>
  </div>
</div>


    <script src="https://cdn.jsdelivr.net/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>
<?php
  } else
    header("Location: admin_login.php");
?>
