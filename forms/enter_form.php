 <div class="modal" <?= $hidden_way ?> >
    <button class="modal__close" type="button" name="button" onclick="location.href='./guest.php'">Закрыть</button>

    <h2 class="modal__heading">Вход на сайт</h2>
    
    <form class="form" class="" action="guest.php" method="post" name="enter-form">
      <div class="form__row">
        <label class="form__label" for="email">E-mail <sup>*</sup></label>

        <input  class="form__input<?= $email_class_error ?>"  type="text" name="email" id="email" value="" placeholder="Введите e-mail">

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