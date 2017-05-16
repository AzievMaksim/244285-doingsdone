<?php

// подключение файла и массива задач, удаление тегов, буферизация, проверка наличия файла
function includePathEndArray($template_path, $task_list) {

    ob_start();

    foreach ($task_list as $task) {
        foreach ($task as $task_key => $task_value) {
            $task[$task_key] = htmlspecialchars($task['task_key']);
        }
    }

    if (is_file($template_path)) {
        include $template_path;
    } else {
        return 'print(<p>нет такого имени</p>);' ;
        // почему не выводит на экран эту строку?
    }
    return ob_get_flush();
}

//количество задач в текущем проекте
function amountTaskInProject($task_list, $nameCategory) {
    if (!$nameCategory) {
        return 0;
    }
    if ($nameCategory == "Все") {
        return count($task_list);
    }
    $countTask = 0;

    foreach ($task_list as $key => $value) {
        if ($value["project"] == $nameCategory) {
            $countTask++;
        }
    }
    return $countTask;
}

