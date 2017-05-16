<main class="content__main">
    <h2 class="content__main-heading">Список задач</h2>

    <form class="search-form" action="index.php" method="post">
        <input class="search-form__input" type="text" name="" value="" placeholder="Поиск по задачам">

        <input class="search-form__submit" type="submit" name="" value="Искать">
    </form>

    <div class="tasks-controls">
        <div class="radio-button-group">
            <label class="radio-button">
                <input class="radio-button__input visually-hidden" type="radio" name="radio" checked="">
                <span class="radio-button__text">Все задачи</span>
            </label>

            <label class="radio-button">
                <input class="radio-button__input visually-hidden" type="radio" name="radio">
                <span class="radio-button__text">Повестка дня</span>
            </label>

            <label class="radio-button">
                <input class="radio-button__input visually-hidden" type="radio" name="radio">
                <span class="radio-button__text">Завтра</span>
            </label>

            <label class="radio-button">
                <input class="radio-button__input visually-hidden" type="radio" name="radio">
                <span class="radio-button__text">Просроченные</span>
            </label>
        </div>

        <label class="checkbox">
            <input id="show-complete-tasks" class="checkbox__input visually-hidden" type="checkbox" checked>
            <span class="checkbox__text">Показывать выполненные</span>
        </label>
    </div>

    <table class="tasks">

        <?php
        // вариант без эндфореач со скобками дал ошибку. почему? выяснить.
        foreach ($task_list as $task):
            $completed_class = '';
            $comleted_atrib_checked = '';

            if ($task['status'] == 'Yes') {
                $completed_class = ' task--completed';
                // в нижнем варианте не сработало. почему?
                /* $completed_atrib_checked = ' checked'; */
            }
            ?>

            <tr class="tasks__item task<?= $completed_class; ?>">
                <td class="task__select">
                    <label class="checkbox task__checkbox">
                        <input class="checkbox__input visually-hidden"
                               type="checkbox" <?php if ($task['status'] == 'Yes') { ?> checked<?php } ?> >
                        <span class="checkbox__text"><?= $task['title']; ?></span>
                    </label>
                </td>
                <td class="task__date"><?= $task['Date']; ?></td>


                <td class="task__controls">
                </td>
            </tr>
            <?php
        endforeach ?>


        <tr>
            <td class="task__controls">
                <button class="expand-control" type="button" name="button">Выполнить первое задание</button>

                <ul class="expand-list hidden">
                    <li class="expand-list__item">
                        <a href="#">Выполнить</a>
                    </li>

                    <li class="expand-list__item">
                        <a href="#">Удалить</a>
                    </li>

                    <li class="expand-list__item">
                        <a href="#">Дублировать</a>
                    </li>
                </ul>
            </td>
        </tr>

    </table>
</main>
    





