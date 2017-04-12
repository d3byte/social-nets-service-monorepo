<?php
  require 'db.php';
  require 'libs/Actions.class.php';
  if(isset($_SESSION['logged_user'])) {
    $user = R::findOne('users', 'id = ?', array($_SESSION['logged_user']['id']));
    $orders = R::findAll('ordersmain');
    // Actions::loadServices();
    $services[] = R::find('ordersmain', 'categoryid = ?', [1]);
    $services[] = R::find('ordersmain', 'categoryid = ?', [2]);
    $services[] = R::find('ordersmain', 'categoryid = ?', [3]);
    $services[] = R::find('ordersmain', 'categoryid = ?', [4]);
    $services[] = R::find('ordersmain', 'categoryid = ?', [5]);
    $services[] = R::find('ordersmain', 'categoryid = ?', [6]);
    $services[] = R::find('ordersmain', 'categoryid = ?', [7]);
    $services[] = R::find('ordersmain', 'categoryid = ?', [8]);
    $services[] = R::find('ordersmain', 'categoryid = ?', [9]);
    $services[] = R::find('ordersmain', 'categoryid = ?', [10]);
    $services[] = R::find('ordersmain', 'categoryid = ?', [11]);
    $services[] = R::find('ordersmain', 'categoryid = ?', [12]);
    if(isset($_POST['order'])) {
      if(Actions::checkBalance()) {
        Actions::addOrder();
        Actions::substractBalance();
        Actions::logSubstraction();
      } else {
        $errors = [];
        $errors[] = "Недостаточно средств!";
      }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $shopName; ?> – Новый заказ</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/octicons/3.1.0/octicons.min.css">
    <link rel="stylesheet" href="../styles/customstyles.css" type="text/css">
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
                    <li><a href="balance.php"> Счёт <?php echo $user['balance']; ?> ₽ </a></li>
                    <li><a href="profile.php"> История </a></li>
                    <li class="active"><a href="market.php"> Новый заказ <span class="sr-only">(current)</span></a></li>
                    <li><a href="support.php"> Поддержка </a></li>
                    <li><a href="logout.php">Выйти</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <main>
      <center>
          <div class="col-lg-12">
              <?php
                if(isset($errors))
                  echo '<h3 style="color:red;">'.array_shift($errors).'</h3>';
              ?>
              <h1> Создание заказа </h1>
          </div>
          <div class="col-lg-12">
              <h2> Выберите социальную сеть: </h2>
              <button class="btn btn-default btn-outline" id="btn_yt">YouTube</button>
              <button class="btn btn-default btn-outline" id="btn_inst">Instagram</button>
              <hr>
          </div>
          <div class="col-lg-12" id="chs_cat" style="display:none">
              <h2> Выберите категорию услуг: </h2>
          </div>
          <div class="col-lg-12 yt" id="youtube_services">
              <?php
                $ybCategories = R::find('categories', "socnet = ?", ["Youtube"]);
                foreach($ybCategories as $ybCategory) {
                  echo '<button class="btn btn-default btn-outline" id="btn'.$ybCategory['id'].'">'.$ybCategory['name'].'</button>';
                }
              ?>
              <!-- <button class="btn btn-default btn-outline" id="btn1">Просмотры</button>
              <button class="btn btn-default btn-outline" id="btn2">Подписчики</button>
              <button class="btn btn-default btn-outline" id="btn4">Дизлайки</button>
              <button class="btn btn-default btn-outline" id="btn5">Избранное</button>
              <button class="btn btn-default btn-outline" id="btn6">Комментарии</button>
              <button class="btn btn-default btn-outline" id="btn7">Лайки</button>
              <button class="btn btn-default btn-outline" id="btn8">Репосты в соцсети</button> -->
              <hr>
          </div>
          <div class="col-lg-12 inst" id="instagram_services">
            <?php
              $instCategories = R::find('categories', "socnet = ?", ["Instagram"]);
              foreach($instCategories as $instCategory) {
                echo '<button class="btn btn-default btn-outline" id="btn'.$instCategory['id'].'">'.$instCategory['name'].'</button>';
              }
            ?>
              <!-- <button class="btn btn-default btn-outline" id="btn9">Подписчики</button>
              <button class="btn btn-default btn-outline" id="btn10">Лайки</button>
              <button class="btn btn-default btn-outline" id="btn11">Автолайкинг</button>
              <button class="btn btn-default btn-outline" id="btn12">Просмотры видео</button>
              <button class="btn btn-default btn-outline" id="btn14">Комментарии</button> -->
              <hr>
          </div>
          <div class="col-lg-12 inst" id="chs_inst">
              <h2> Выберите услугу: </h2>
          </div>

          <form action="" method="post">
              <div class="col-lg-12 yt yt_serv" id="youtube_views">
                  <div class="form-group">
                    <?php
                    Actions::renderServices($services, 0);
                    ?>
                  </div>
              </div>
              <div class="col-lg-12 yt yt_serv" id="youtube_subs">
                  <div class="form-group">
                    <?php
                    Actions::renderServices($services, 1);
                    ?>
                  </div>
              </div>
              <div class="col-lg-12 yt yt_serv" id="youtube_dis">
                  <div class="form-group">
                    <?php
                    Actions::renderServices($services, 2);
                    ?>
                  </div>
              </div>
              <div class="col-lg-12 yt yt_serv" id="youtube_fav">
                  <div class="form-group">
                    <?php
                    Actions::renderServices($services, 3);
                    ?>
                  </div>
              </div>
              <div class="col-lg-12 yt yt_serv" id="youtube_com">
                  <div class="form-group">
                    <?php
                    Actions::renderServices($services, 4);
                    ?>
                  </div>
              </div>
              <div class="col-lg-12 yt yt_serv" id="youtube_like">
                  <div class="form-group">
                    <?php
                    Actions::renderServices($services, 5);
                    ?>
                  </div>
              </div>
              <div class="col-lg-12 yt yt_serv" id="youtube_rep">
                  <div class="form-group">
                    <?php
                    Actions::renderServices($services, 6);
                    ?>
                  </div>
              </div>

              <!-- Инстач -->
              <div class="col-lg-12 inst inst_serv" id="instagram_subs">
                  <div class="form-group">
                    <?php
                    Actions::renderServices($services, 7);
                    ?>
                  </div>
              </div>
              <div class="col-lg-12 inst inst_serv" id="instagram_likes">
                  <div class="form-group">
                    <?php
                    Actions::renderServices($services, 8);
                    ?>
                  </div>
              </div>
              <div class="col-lg-12 inst inst_serv" id="instagram_autolikes">
                  <div class="form-group">
                    <?php
                    Actions::renderServices($services, 9);
                    ?>
                  </div>
              </div>
              <div class="col-lg-12 inst inst_serv" id="instagram_views">
                  <div class="form-group">
                    <?php
                    Actions::renderServices($services, 10);
                    ?>
                  </div>
              </div>
              <div class="col-lg-12 inst inst_serv" id="instagram_comments">
                  <div class="form-group">
                    <?php
                    Actions::renderServices($services, 11);
                    ?>
                  </div>
              </div>
              <input class="form-group" type="text" required name="link" placeholder="Ссылка на соц.сеть" id="link" style="display:none;">
              <input class="form-group" type="number" required name="amount" placeholder="Кол-во" id="amount" style="display:none;">
              <button class="btn btn-success btn-outline" type="submit" name="order" id="order" style="display:none">Заказать</button>
          </form>
      </center>
    </main>
    <script src="https://cdn.jsdelivr.net/jquery/2.1.3/jquery.min.js"></script>
    <script defer src="../js/buttons.js"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
<?php
  } else header('Location: signin.php');
?>
