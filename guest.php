<?php 
session_start();
ob_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="../css/normalize.css">
  <link rel="stylesheet" href="../css/style.css">
</head>

<?php 

include_once './array.php';
include_once './functions.php';
    
$hidden_way = 'hidden';    
$add_class_overlay = '';
    
if (isset($_GET['login'])) {               
    $add_class_overlay = ' overlay';
    $hidden_way = '';
}    
 
$email_class_error = '';    
$email_text_error = '';
$password_text_error = '';
$password_class_error = '';
    
if (isset($_POST['entry'])) {
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    $current_user = searchUserByEmail($email, $users);
    $current_user_hash = $current_user['password'];
    $current_user_name = $current_user['name'];
    $_SESSION['name'] = $current_user_name;
    
    if ($_POST['email']  == '') { 
       $email_class_error = ' form__input--error'; 
       $email_text_error = 'Введите e-mail'; 
    }

    if ($_POST['name_task'] == '') { 
       $password_class_error = ' form__input--error'; 
       $password_text_error = 'Заполните это поле'; 
    }
    
    if ($current_user == null and !empty($_POST['email'])) {
       $email_class_error = ' form__input--error'; 
       $email_text_error = 'Гадя Петрович e-mail'; 
    }
    
    if (!empty($_POST['password']) and (password_verify($password, $current_user_hash)) == false) {
       $password_class_error = ' form__input--error'; 
       $password_text_error = 'Ваш пароль есть еретик';
    }
    
    if (password_verify($password, $current_user_hash))  {
        $_SESSION['user'] = $user;
        header("Location:index.php");
        echo 'Password is VALID VALID VALID BLYA!';
        print_r($_SESSION, $_SESSION['user']['name']);
    } 
}
    
include_once './templates/main_startpage.php';
?>
    
<body class="body-background<?= $add_class_overlay ?>" ><!--class="overlay"-->
  <h1 class="visually-hidden">Дела в порядке</h1>

  <div class="modal" <?= $hidden_way ?> >
    <button class="modal__close" type="button" name="button" onclick="location.href='./guest.php'">Закрыть</button>

    <h2 class="modal__heading">Вход на сайт</h2>
    
    <form class="form" class="" action="guest.php?login=login" method="post">
      <div class="form__row">
        <label class="form__label" for="email">E-mail <sup>*</sup></label>

        <input  class="form__input<?= $email_class_error ?>"  type="text" name="email" id="email" value="<?= $_POST['email']; ?>" placeholder="Введите e-mail">

        <p class="form__message"><?= $email_text_error; ?></p>
      </div>

      <div class="form__row">
        <label class="form__label" for="password">Пароль <sup>*</sup></label>

        <input class="form__input<?= $password_class_error ?>" type="password" name="password" id="password" value="" placeholder="Введите пароль">
        
        <p class="form__message"><?= $password_text_error; ?></p>
      </div>

      <div class="form__row">
        <label class="checkbox">
          <input class="checkbox__input visually-hidden" type="checkbox" checked>
          <span class="checkbox__text">Запомнить меня</span>
        </label>
      </div>

      <div class="form__row form__row--controls">
        <input class="button" type="submit" name="entry" value="Войти">
      </div>
    </form>
  </div>

</body>
</html>

<?php 
include_once './templates/footer.php';
ob_flush(); ?>