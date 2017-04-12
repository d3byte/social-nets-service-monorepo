<?php
  if(isset($_POST['submit'])) {
    
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
                <a class="navbar-brand" href="#">*project_name*</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="balance.html"> Счёт *x*₽ </a></li>
                    <li><a href="#">Заказы <span class="sr-only">(current)</span></a></li>
                    <li><a href="../php/profile.php"> История </a></li>
                    <li><a href="../php/market.php"> Новый заказ </a></li>
                    <li class="active"><a href="support.html"> Поддержка </a></li>
                    <li><a href="../php/logout.php">Выйти</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <main>
        <div class="col-lg-12">
            <center>
                <h1 style="margin-bottom:50px;"> Ваши обращения в службу техподдержки </h1>
        </div>


        <div class="col-lg-4"></div>

        <div class="col-lg-4">
            <center>
                <form action="" method="post">
                  <div class="form-group">
                      <label for="theme">Тема обращения:</label>
                      <input required type="text" class="form-control" id="theme">
                  </div>
                  <div class="form-group">
                      <label for="id">Номер заказа:</label>
                      <input required type="text" class="form-control" id="id">
                  </div>
                  <div class="form-group">
                    <label for="msg">Ваше сообщение:</label>
                    <textarea required type="text" class="form-control" id="msg" placeholder="Максимум 1000 символов" maxlength="1000"></textarea>
                  </div>
                  <button class="btn btn-success btn-outline" type="submit" name="submit">Отправить обращение </button>
                </form>
            </center>
        </div>
        <div class=" col-lg-4 "></div>
        </center>
    </main>







    <script src="https://cdn.jsdelivr.net/jquery/2.1.3/jquery.min.js "></script>
    <script src="https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.min.js "></script>
</body>

</html>
