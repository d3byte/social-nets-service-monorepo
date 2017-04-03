<?php
  require 'db.php';

  $errors = [];
  if(isset($_POST['submit'])) {
    if($_POST['password'] != $_POST['password2'])
      $errors[] = ' – <span style="color:red;">введенные пароли не совпадают!</span>';
    else {
      $user = R::dispense('users');
      $user->login = $_POST['login'];
      $user->email = $_POST['email'];
      $user->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
      R::store($user);
      header('Location: ')
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
      <form action="" method="post">
        <div class="form-group">
            <label for="nick">Ваша почта</label>
            <input required type="email" class="form-control" id="nick" name="email" placeholder="aaa@xxx.ru" value="<?php echo $_POST['email']; ?>">
        </div>
        <div class="form-group">
            <label for="nick">Ваша логин</label>
            <input required type="email" class="form-control" id="nick" name="login" placeholder="Login" value="<?php echo $_POST['login']; ?>">
        </div>
        <div class="form-group">
            <label for="pass">Ваш пароль</label>
            <input required type="password" class="form-control" id="pass" name="password" placeholder="Пароль" value="<?php echo $_POST['password']; ?>">
        </div>
        <div class="form-group">
            <label for="pass">Подтвердите пароль<?php echo array_shift($errors);?> </label>
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
