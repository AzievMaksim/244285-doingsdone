<div class="modal">
    <!-- крестик в правом верхнем углу; отключает форму , возвращает главную -->
    <button class="modal__close" type="button" name="button" onclick="location.href='index.php'">Закрыть</button>

    <h2 class="modal__heading">Добавление задачи</h2>

    <form class="form" action="index.php" method="post" enctype="multipart/form-data" name="new_task" >

        <!-- название нового таска  -->
        <div class="form__row">
            <label class="form__label" for="name">Название <sup>*</sup></label>
            <span class="form__error"><?= $span_error_text_name; ?></span>
            <input class="form__input<?= $form_input_name_error; ?>" type="text" name="name_task" id="name" value="<?php echo $_POST['name_task']; ?>" placeholder="Введите название">
        </div>

        <!-- название проекта к которому относится новый таск -->
        <div class="form__row">
            <label class="form__label" for="project">Проект <sup>*</sup></label>

            <select class="form__input form__input--select" name="project" id="project">
                <option value="Входящие">Входящие</option>
                <option value="Учеба">Учеба</option>
            </select>
        </div>

        <!-- дата выполнения таска -->
        <div class="form__row">
            <label class="form__label" for="date">Дата выполнения <sup>*</sup></label>
            <span class="form__error"><?= $span_error_text_date; ?></span>
            <input class="form__input form__input--date<?= $form_input_date_error; ?>" type="text" name="date_form" id="date" value="<?php echo $_POST['date_form']; ?>" placeholder="Введите дату в формате ДД.ММ.ГГГГ">
        </div>

        <!-- файл - прикрепление -->
        <div class="form__row">
            <label class="form__label" for="file">Файл</label>

            <div class="form__input-file">
                <input class="visually-hidden" type="file" name="preview" id="preview" value="">

                <label class="button button--transparent" for="preview">
                    <span>Выберите файл</span>
                </label>
                <span><br></span>
            </div>
        </div>
        <!-- добавление нового таска происходит, если таск заполнен верно -->
        <div class="form__row form__row--controls">
            <input class="button" type="submit" name="add_task" value="Добавить">
        </div>
    </form>
</div>
