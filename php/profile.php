<?php
  require 'db.php';
  require 'libs/Actions.class.php';
  if(isset($_SESSION['logged_user'])) {
    $actions = R::findAll('userlogs', 'userid = ?', array($_SESSION['logged_user']['id']));
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
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="profile.php"><?php echo $shopName; ?></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="balance.php"> Счёт <?php echo $user['balance']; ?> ₽ </a></li>
        <li class="active"><a href="profile.html"> История <span class="sr-only">(current)</span></a></li>
        <li><a href="market.php"> Новый заказ </a></li>
        <li><a href="logout.php">Выйти</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<main>
  <div class="col-lg-12">
    <center>
      <h1 style="margin-bottom:50px;"> История действий пользователя </h1>
    <table style="width:100%">
      <tr>
        <th>Дата</th>
        <th>Событие</th>
      </tr>
      <?php
        foreach($actions as $action) {
          echo '<tr><td>'.$action['date'].'</td>';
          echo '<td>'.$action['action'].'</td></tr>';
        }
      ?>
    </table>
  </div>
</center>
</main>
    <script src="https://cdn.jsdelivr.net/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>

<?php
  } else header('Location: signin.php');
?>
