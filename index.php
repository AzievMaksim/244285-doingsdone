<?php

ob_start();

include './array.php';
include './functions.php';

$add_class_overlay = '';
$form_input_name_error = '';
$span_error_text_name = '';
$form_input_date_error = '';
$span_error_text_date = '';

if (isset($_POST['add_task'])) {
    if ($_POST['name_task'] == '') {
        $form_input_name_error = ' form__input--error';
        $span_error_text_name = 'Заполните это поле*';
        $add_class_overlay = 'class="overlay"';
        include_once './templates/base.php';

    }
    elseif ($_POST['date']  == '') {
        $form_input_date_error = ' form__input--error';
        $span_error_text_date = 'Введите дату*';
        $add_class_overlay = 'class="overlay"';
        include_once './templates/base.php';

    } else {
        header('Location:index.php');
    }
}
/*
if (isset($_POST['name_task']) and isset($_POST['date'])) {
  // $new_task_values = array('title' => $_POST['name_task'], 'Date' => $_POST['date'], 'project' => $_POST['project'], 'status' => 'No');   // 'project' => 'Работа', 'status' => 'No'
   // array_unshift($task_list, 'title' = $_POST['name_task'], 'Date' = $_POST['date'], 'project' = $_POST['project'], 'status' = 'No');
  array_unshift($project_list, '222', $_POST['name_task'], 'title', $_POST['name_task']) ;
}
*/

if (isset($_GET['add'])) {
    $add_class_overlay = 'class="overlay"';
    include_once './forms/add_new_task.php';
}

$upload_dir_file = './files/';                                                  // здесь директория куда загружать файл
$save_own_name = $upload_dir_file . $_FILES['preview']['name'];                 // это присваивание собственного же имени ( вместо временного ) - собственное в массиве ФАЙЛЕС

if (isset($_FILES['preview'])) {
    if($_FILES['error'] == 0) {
        // эта функция должна проверять по тмп-имени; для безопасности ( не по родному имени файла )
        move_uploaded_file($_FILES['preview']['tmp_name'], $save_own_name);          // move_uploaded_file($tmp_name, "$uploads_dir/$name");

    }                                                                                 // - http://php.net/manual/ru/function.move-uploaded-file.php
}

//var_dump($_GET);
include_once './templates/base.php';

ob_flush(); ?>

