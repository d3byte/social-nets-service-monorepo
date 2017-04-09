<?php
  class Actions {
    public function signUp() {
      $user = R::dispense('users');
      $user->login = $_POST['login'];
      $user->email = $_POST['email'];
      $user->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
      R::store($user);
    }

    public function logSignUp() {
      $usid = R::findOne('users', 'login = ?', array($_POST['login']));
      $action = R::dispense('userlogs');
      $action->userid = $usid['id'];
      $action->action = 'Пользователь создан';
      $action->date = date("Y-m-d H:i:s");
      R::store($action);
    }

    public function signIn() {
      $user = R::findOne('users', 'login = ?', array($_POST['login']));
      if($user) {
        // check password
        if(password_verify($_POST['password'], $user->password)) {
          $_SESSION['logged_user'] = $user;
          header("Location: profile.php");
        } else
          $errors[] = '<span style="color:red;">Введенный пароль неверный!</span>';
      } else
        $errors[] = '<span style="color:red;">Пользователь с таким логином не найден!</span>';
    }

    public function logAddBalance() {
      $action = R::dispense('userlogs');
      $action->userid = $_SESSION['logged_user']['id'];
      $action->action = 'Пополнение баланса на '.$_POST['balance'].' ₽';
      $action->date = date("Y-m-d H:i:s");
      R::store($action);
    }

    public function addBalance() {
      $userB = R::findOne('users', 'id = ?', array($_SESSION['logged_user']['id']));
      $userB->balance += $_POST['balance'];
      R::store($userB);
    }

    public function logBuyItem() {
      $orderN = R::findOne('ordersmain', 'id = ?', array($_POST['order']));
      $action = R::dispense('userlogs');
      $action->userid = $_SESSION['logged_user']['id'];
      $action->action = 'Покупка '.$orderN['name'].' на сумму '.$orderN['price'].'₽';
      $action->date = date("Y-m-d H:i:s");
      R::store($action);
    }

    public function substractBalance() {
      $userB = R::findOne('users', 'id = ?', array($_SESSION['logged_user']['id']));
      $userB->balance -= $_POST['balance'];
      R::store($userB);
    }

    public function addOrder() {
      $zakaz = R::dispense('orders');
      $typeid = R::findOne('ordersmain', 'id = ?', array($_POST['order']));
      $zakaz->typeid = $typeid['id'];
      $zakaz->link = $_POST['link'];
      $zakaz->status = 'Выполняется';
      $zakaz->amount = 1;
      R::store($zakaz);
    }

    public function orderDone() {
      $order = R::findOne('orders', 'id = ?', array($_POST['id']));
      $order['status'] = 'Выполнен';
      R::store($order);
    }

    public function orderInProgress() {
      $order = R::findOne('orders', 'id = ?', array($_POST['id']));
      $order['status'] = 'Выполняется';
      R::store($order);
    }

    public function redactGood() {
      $tovar = R::findOne('ordersmain', 'name = ?', array($_POST['tovar']));
      $tovar['name'] = $_POST['name'];
      $tovar['description'] = $_POST['description'];
      if(isset($_POST['price']))
        $tovar['price'] = $_POST['price'];
      R::store($tovar);
    }

    public function deleteGood() {
      $tovar = R::findOne('ordersmain', 'name = ?', array($_POST['tovar']));
      R::trash($tovar);
    }

    public function addGood() {
      $tovar = R::dispense('ordersmain');
      $tovar['name'] = $_POST['name'];
      $tovar['description'] = $_POST['description'];
      $tovar['price'] = $_POST['price'];
      R::store($tovar);
    }

    public function adminLogin() {
      $user = R::findOne("admins", "login = ?", array($_POST["login"]));
      if($user) {
        // Логин введен правильно
        if($_POST["password"] == $user->password) {
          $_SESSION["logged_admin"] = $user;
          header("Location: admin.php");
        } else
          $errors[] = '<span style="color:red;">Неверный логин или пароль!</span>';
      } else
        $errors[] = '<span style="color:red;">Неверный логин или пароль!</span>';
    }
  }
?>
