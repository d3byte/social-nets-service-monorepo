<?php
  require "db.php";

  if(isset($_POST["submit"])) {
    $user = R::findOne("admins", "login = ?", array($_POST["login"]));
    if($user) {
      // Логин введен правильно
      if($_POST["password"] == $user->password) {
        $_SESSION["logged_user"] = $user;
        header("Location: admin.php");
      } else
        echo '<center><h3 style="color:red;">Неверный пароль!</h3></center>';
    } else
        echo '<center><h3 style="color:red;">Неверный логин!</h3></center>';
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Вход в панель администратора</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/octicons/3.1.0/octicons.min.css">
    <link rel="stylesheet" href="../styles/customstyle.css" type="text/css">
    <link rel="stylesheet" href="../styles/buttons.css" type="text/css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="../bootstrap/font-awesome/css/font-awesome.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300&amp;subset=cyrillic" rel="stylesheet">
</head>

<body>
  <div class="col-lg-4"></div> <!-- для центровки -->
  <div class="col-lg-4">
    <center>
      <h1 style="margin-bottom:150px;"> Вход в панель администрирования *project_name* </h1>

      <form action="" method="post">
        <div class="form-group">
            <label for="nick">Логин</label>
            <input type="text" class="form-control" id="nick" name="login" placeholder="Логин" required>
        </div>
        <div class="form-group">
            <label for="pass">Пароль</label>
            <input type="password" class="form-control" id="pass" name="password" placeholder="Пароль" required>
        </div>
        <br>
        <button type="submit" name="submit" class="btn btn-success btn-outline">Войти</button>
      </form>

    </center>
  </div>
  </div>
  <div class="col-lg-4"></div> <!-- для центровки -->
  <script src="https://cdn.jsdelivr.net/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>
