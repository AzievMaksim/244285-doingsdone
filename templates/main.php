<? ob_start(); ?>
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
$current_project_get = $_GET['projectget'];
include_once './array.php';
$post_value = $_POST['name_task'];

// если не пустой get и он не совпадает ни с одним из проектов и не равен add=добавление задачи -то- должен возвращаться 404
// если гет Не пустой - то это Несоответствие любому идентификатору - и тогда вернется 404 - ошибку дает без этого
if ((!$_GET['add']) and !empty($_GET) and !array_key_exists($current_project_get, $project_list)) { // 

header('Location: /', true, 404);                 
echo '404 это конечно не 42 и все такое!'; 

} else {

    if (!empty($post_value)) {

        $new_task_post = $_POST['name_task'];    
        $date_form_post = $_POST['date_form'];
        $project_post = $_POST['project'];
        $status_post = 'No';    

        $new_array_from_post = [
            'title' => $new_task_post,
            'Date' => $date_form_post,
            'project' => $project_post,
            'status' => $status_post
        ];
        array_unshift($task_list, $new_array_from_post); 
    }

    foreach ($task_list as $index_task => $task) {
        $completed_class = '';

        if ($current_project_get === 'all' or $current_project_get === $_GET['']) {  // or $_GET[''] == $_GET['0']     or $current_project === $_GET[empty]  ?>
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
        }

    if ($task['project'] == $project_list[$current_project_get]) { ?>
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
    }
  }
} 

?>

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
<? ob_flush(); ?>
