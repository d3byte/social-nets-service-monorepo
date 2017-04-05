<?php
  require 'db.php';

  $errors = [];
  if(isset($_POST['submit'])) {
    if($_POST['password'] != $_POST['password2'])
      $errors[] = '<span style="color:red;">Введенные пароли не совпадают!</span>';
    else if(R::count('users', 'login = ?', array($_POST['login'])) > 0)
      $errors[] = '<span style="color:red;">Пользователь с таким логином уже существует!</span>';
    else if(R::count('users', 'email = ?', array($_POST['email'])) > 0)
      $errors[] = '<span style="color:red;">Пользователь с такой почтой уже существует!</span>';
    else {
      $user = R::dispense('users');
      $user->login = $_POST['login'];
      $user->email = $_POST['email'];
      $user->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
      R::store($user);
      $usid = R::findOne('users', 'login = ?', array($_POST['login']));
      $action = R::dispense('userlogs');
      $action->userid = $usid['id'];
      $action->action = 'Пользователь создан';
      $action->date = date("Y-m-d H:i:s");
      R::store($action);
      header('Location: signin.php');
    }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Регистрация</title>
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
      <h1 style="margin-bottom:190px;"> Регистрация на *project_name* </h1>
      <h4><?php echo array_shift($errors);?></h4>
      <form action="" method="post">
        <div class="form-group">
            <label for="nick">Ваш логин</label>
            <input required type="text" class="form-control" id="nick" name="login" placeholder="Login" value="<?php echo $_POST['login']; ?>">
        </div>
        <div class="form-group">
            <label for="nick">Ваша почта</label>
            <input required type="email" class="form-control" id="nick" name="email" placeholder="aaa@xxx.ru" value="<?php echo $_POST['email']; ?>">
        </div>
        <div class="form-group">
            <label for="pass">Ваш пароль</label>
            <input required type="password" class="form-control" id="pass" name="password" placeholder="Пароль" value="<?php echo $_POST['password']; ?>">
        </div>
        <div class="form-group">
            <label for="pass">Подтвердите пароль</label>
            <input required type="password" class="form-control" id="pass" name="password2" placeholder="Пароль">
        </div>
        <button name="submit" type="submit" class="btn btn-success btn-outline">Зарегистрироваться</button>
      </form>

    </center>
  </div>
  </div>
  <div class="col-lg-4"></div> <!-- для центровки -->
  <script src="https://cdn.jsdelivr.net/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>
