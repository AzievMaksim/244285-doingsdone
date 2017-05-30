<?php

ob_start();

include_once './array.php';
include_once './functions.php';

$add_class_overlay = '';
$form_input_name_error = '';
$span_error_text_name = '';
$form_input_date_error = '';
$span_error_text_date = '';
$redirect_himself = '';

if (isset($_POST['add_task'])) {


    if  ($_POST['date_form']  == '') { 
        $form_input_date_error = ' form__input--error'; 
        $span_error_text_date = 'Введите дату*'; 
    }

    if  ($_POST['name_task'] == '') { 
        $form_input_name_error = ' form__input--error'; 
        $span_error_text_name = 'Заполните это поле*'; 
    }

    if  (($_POST['name_task'] == '') or ($_POST['date_form']  == '')) {
        $add_class_overlay = 'class="overlay"';
        include_once './forms/add_new_task.php' ;
    }

}                                                                                //  header("Location: $redirect_himself");header('Location:index.php');

$upload_dir_file = './files/';                                                  // здесь директория куда загружать файл
$save_own_name = $upload_dir_file . $_FILES['preview']['name'];                 // это присваивание собственного же имени ( вместо временного ) - собственное в массиве ФАЙЛЕС
                                                               
if (isset($_FILES['preview'])) { 
    if($_FILES['error'] == 0) {
                                                                                      // эта функция должна проверять по тмп-имени; для безопасности ( не по родному имени файла )
        move_uploaded_file($_FILES['preview']['tmp_name'], $save_own_name);          // move_uploaded_file($tmp_name, "$uploads_dir/$name"); 
        
    }                                                                                 // - http://php.net/manual/ru/function.move-uploaded-file.php
}


if (isset($_GET['add'])) {
    $add_class_overlay = 'class="overlay"';
    include_once './forms/add_new_task.php';
}

include_once './templates/base.php';
//var_dump($_GET);

ob_flush(); 
?>