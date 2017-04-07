<?php
  require 'libs/config.php';

?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $shopName; ?> - Главная</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/octicons/3.1.0/octicons.min.css">
    <link rel="stylesheet" href="../styles/customstyles.css" type="text/css">
    <link rel="stylesheet" href="../styles/buttons.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300&amp;subset=cyrillic" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="http://icono-49d6.kxcdn.com/icono.min.css" type="text/css">
    <script src="../js/date.js"></script>
    <style>
@import url('https://fonts.googleapis.com/css?family=Roboto&subset=cyrillic');
</style>
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
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="#about">Немного о нас</a></li>
          <li><a href="../php/register.php">Регистрация</a></li>
          <li><a href="../php/login.php">Вход</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

<div class="container" id="about">
  <center>
<h1> Лучшим людям предлагаем лучших подписчиков! <br>
  Предлагаем пролистать чуть ниже, <br>
   чтобы познакомиться с нами поближе.
 </h1>
 <br>
<i class="icono-caretDown"></i>
<h2> Что мы можем тебе предложить?</h2>
<div class="row">
  <center>
  <div class="col-lg-4 left-bar">
    <h3>Живое продвижение</h3>
    <p> Недорого, быстро, удобно </p>
  </div>
  <div class="col-lg-4"></div>
  <div class="col-lg-4 right-bar">
    <h3>Накрутка мёртвых душ </h3>
    <p> Ещё быстрее, ещё дешевле, ещё удобнее </p>
  </div>
  </center>
</div>
</div>

<div class="container" id="results">
  <center>
<h1> Результаты на сегодня </h1>
<div id="date"></div>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="../src/scr1.jpg" alt="...">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="../src/scr2.jpg" alt="...">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="../src/scr3.jpg" alt="...">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="../src/scr4.jpg" alt="...">
      <div class="carousel-caption">
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</center>
</div>

<div class="container" id="numbers">
<center>
  <h1> Мы в цифрах </h1>
  <br>
  <div class="row">
    <div class="col-lg-3">
      <i class="icono-check"></i>
      <h3> 2724 </h3>
      <p class="semi-tr"> Успешных заказов </p>
    </div>
    <div class="col-lg-3">
      <i class="icono-user"></i>
      <h3> 34М </h3>
      <p class="semi-tr"> Подписчиков добавили </p>
    </div>
    <div class="col-lg-3">
      <i class="icono-sun"></i>
      <h3> 8М </h3>
      <p class="semi-tr"> Лайков </p>
    </div>
    <div class="col-lg-3">
      <i class="icono-clock"></i>
      <h3> 24 часа </h3>
      <p class="semi-tr"> Часы работы службы поддержки </p>
    </div>
  </div>
</center>
</div>

<div class="container" id="register">
  <center>
    <h1> Зарегистрируйся прямо сейчас <br> и закажи своих первых подписчиков уже <br>
      через 7 секунд после регистрации! </h1>
      <button name="submit" type="submit" class="btn btn-success btn-outline" href="../php/register.php">Зарегистрироваться</button>
  </center>
</div>

<footer>

    <div class="footer" id="footer">
        <div class="container">
            <div class="row">
                    <center>
                        <a href="//www.free-kassa.ru/"><img src="//www.free-kassa.ru/img/fk_btn/22.png"></a>
                        <br>
                        <p style="color:gray">Made with love by <span><a id="landhref" href="http://izerrio.pro">iZerrio Studio, 2017 </a></span></p>
                    </center>
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </div>
</body>

</html>
