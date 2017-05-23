
<div class="modal">
    <button class="modal__close" type="button" action="index.php" name="button" onclick="location.href='index.php'" title="пАчему не работает?">Закрыть</button>

    <h2 class="modal__heading">Добавление задачи</h2>

    <form class="form" class="" action="index.php"  method="post" enctype="multipart/form-data" name="new_task">
        <!-- название задачи -->
        <div class="form__row <?php if (empty($_POST['name'])) { ?> form__input--error <?php } ?>">
            <label class="form__label" for="name">Название <sup>*</sup></label>
              <?php if (empty($_POST['name'])) { ?> <span class="form__error">ЭЭэ?</span> <?php } ?>
            <input class="form__input" type="text" name="name" id="name" value="" placeholder="Введите название">
        </div>
        <!-- название проекта -->
        <div class="form__row">
            <label class="form__label" for="project">Проект <sup>*</sup></label>

            <select class="form__input form__input--select" name="project" id="project">
                <option value="Входящие">Входящие</option>
                <option value="Учеба">Учеба</option>
                <option value="Работа">Работа</option>
                <option value="Домашние дела">Домашние дела</option>
                <option value="Авто">Авто</option>
            </select>
        </div>
        <!-- дата выполнения задачи -->
        <div class="form__row">
            <label class="form__label" for="date">Дата выполнения <sup>*</sup></label>

            <input class="form__input form__input--date" type="text" name="date" id="date" value="" placeholder="Введите дату в формате ДД.ММ.ГГГГ">
        </div>
        <!-- добавление файла -->
        <div class="form__row">
            <label class="form__label" for="file">Файл</label>

            <div class="form__input-file">
                <input class="visually-hidden" type="file" name="preview" id="preview" value="">
                <!-- кнопка выбора файла -->
                <label class="button button--transparent" for="preview">
                    <span>Выберите файл</span>
                </label>
            </div>
        </div>
        <!-- послать=>добавить заполненную форму  -->
        <div class="form__row form__row--controls">
            <input class="button" type="submit" name="add_task" value="Добавить">
        </div>
    </form>
</div>