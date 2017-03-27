<?php
  require 'db.php';

  $data = $_POST
  if(isset($data['admin_login'])) {
    $errors = [];
    $user = R::findOne('admins', 'login = ?', array($data['login']));
    if($user) {
      // Логин введен правильно
      if(password_verify($data['password'], $user->password)) {
        $_SESSION['logged_user'] = $user;
        echo 'Все кул, вы авторизованы';
      }
      else {
        $errors[] = 'Неверный пароль!';
      }
    } else {
      $errors[] = 'Неверный логин!';
    }

    if(!empty($erros))
      echo '<div class="row"><div class="col-lg-12" style="color: red;"><center><h4>'.array_shift($errors).'</h4></center></div></div><hr>';
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
  <div class="col-lg-4"></div> <!-- для центровки -->
  <div class="col-lg-4">
    <center>
      <h1 style="margin-bottom:150px;"> Вход в панель администрирования *project_name* </h1>

      <form action="/admin_login.php" method="post">
        <div class="form-group">
            <label for="nick">Логин</label>
            <input type="text" class="form-control" id="nick" name="login" placeholder="Логин">
        </div>
        <div class="form-group">
            <label for="pass">Пароль</label>
            <input type="password" class="form-control" id="pass" name="password" placeholder="Пароль">
        </div>
        <br>
        <button type="submit" name="admin_login" class="btn btn-success btn-outline">Войти</button>
      </form>

    </center>
  </div>
  </div>
  <div class="col-lg-4"></div> <!-- для центровки -->
  <script src="https://cdn.jsdelivr.net/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>
