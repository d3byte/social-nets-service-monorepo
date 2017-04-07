<?php
  require 'db.php';
  require 'libs/Actions.class.php';
  if(isset($_SESSION['logged_user'])) {
    $user = R::findOne('users', 'id = ?', array($_SESSION['logged_user']['id']));
    if(isset($_POST['pay'])) {
      addBalance();
      logAddBalance();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $shopName; ?> – Пополнение баланса</title>
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
                <a class="navbar-brand" href="#"><?php echo $shopName; ?></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="balance.php"> Счёт <?php echo $user['balance']; ?> ₽ <span class="sr-only">(current)</span></a></li>
                    <li><a href="profile.php"> История </a></li>
                    <li><a href="market.php"> Новый заказ </a></li>
                    <li><a href="support.php"> Поддержка </a></li>
                    <li><a href="admin_login.php">Выйти</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <main>
        <div class="col-lg-12">
            <center>
                <h1> Пополнение баланса: </h1>
                <p> Выберите платежную систему, укажите сумму и нажмите "оплатить", далее следуйте инструкциям платежной системы. </p>
                <hr>
        </div>


        <div class="col-lg-4"></div>

        <div class="col-lg-4">
            <center>
                <form action="" method="post">
                  <div class="form-group">
                      <div class="radio active">
                          <label><input type="radio" name="optradio" value="yandex" id="yandex">Яндекс.Деньги</label>
                      </div>
                      <div class="radio">
                          <label><input type="radio" name="optradio" value="webmoney" id="webmoney">WebMoney</label>
                      </div>
                      <div class="radio">
                          <label><input type="radio" name="optradio" value="qiwi" id="qiwi">Qiwi</label>
                      </div>
                      <div class="radio">
                          <label><input type="radio" name="optradio" value="bank" id="bank">Банковские карты</label>
                      </div>
                      <label for="price">Сумма пополнения, руб.</label>
                      <input type="number" class="form-control" name="balance" min="1" ></input>
                      <br>
                      <button type="submit" name="pay" class="btn btn-success btn-outline">Оплатить</button>
                      <button class="btn btn-danger btn-outline">Отмена</button>
                  </div>
                </form>
            </center>
        </div>
        <div class="col-lg-4"></div>
        </center>
    </main>
    <script src="https://cdn.jsdelivr.net/jquery/2.1.3/jquery.min.js "></script>
    <script src="https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.min.js "></script>
</body>

</html>
<?php
  } else header('Location: signin.php');
?>
