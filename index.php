<?php

$project = ["Все", "Входящие", "Учеба", "Работа", "Домашние дела", "Авто"];

$massive_task = [
    ['task' => 'Собеседование в IT компании',
        'Date' => '01.06.2107',
        'project' => 'Работа',
        'status' => 'No'
    ],
    ['task' => 'Выполнить тестовое задание',
        'Date' => '25.05.2017',
        'project' => 'Работа',
        'status' => 'No'
    ],
    ['task' => 'Сделать задание первого раздела',
        'Date' => '21.04.2017',
        'project' => 'Учеба',
        'status' => 'Yes'
    ],
    ['task' => 'встреча с другом',
        'Date' => '22.04.2017',
        'project' => 'Входящие',
        'status' => 'No'
    ],
    ['task' => 'Купить корм для кота',
        'Date' => 'нет',
        'project' => 'Домашние дела',
        'status' => 'No'
    ],
    ['task' => 'Заказать пиццу',
        'Date' => 'нет',
        'project' => 'Домашние дела',
        'status' => 'No'
    ],

];

function getNumberTasks($massive_task, $nameCategory)
{
    if (!$nameCategory) {
        return 0;
    }
    if ($nameCategory == "Все") {
        return count($massive_task);
    }
    $countTask = 0;

    foreach ($massive_task as $key => $value) {
        if ($value["project"] == $nameCategory) {
            $countTask++;
        }
    }
    return $countTask;
}


include '../experiment/functions.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Дела в Порядке!</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body><!--class="overlay"-->
<h1 class="visually-hidden">Дела в порядке</h1>

<div class="page-wrapper">
    <div class="container container--with-sidebar">

        <?php require '../experiment/templates/header.php' ; ?>

        <div class="content">
            <section class="content__side">
                <h2 class="content__side-heading">Проекты</h2>

                <nav class="main-navigation">
                    <ul class="main-navigation__list">
                        <?php

                        foreach ($project as $num => $projectName):
                            $firstItem = '';

                            if ($num == '0') {
                                $firstItem = "main-navigation__list-item--active";
                            }
                            ?>
                            <li class="main-navigation__list-item <?= $firstItem; ?>">
                                <a class="main-navigation__list-item-link" href="#"><?= $projectName; ?></a>
                                <span class="main-navigation__list-item-count"> <?= getNumberTasks($massive_task, $projectName); ?> </span>
                            </li>
                        <?php endforeach; ?>

                    </ul>
                </nav>

                <a class="button button--transparent button--plus content__side-button" href="#">Добавить проект</a>
            </section>

            <?php includePathEndArray('c:/OpenServer/domains/experiment/templates/main.php', $massive_task) ; ?>

        </div>
    </div>
</div>


<?php require '../experiment/templates/footer.php' ; ?>

<!--
<div class="modal" hidden>
    <button class="modal__close" type="button" name="button">Закрыть</button>

    <h2 class="modal__heading">Добавление задачи</h2>

    <form class="form" class="" action="index.html" method="post">
        <div class="form__row">
            <label class="form__label" for="name">Название <sup>*</sup></label>

            <input class="form__input" type="text" name="name" id="name" value="" placeholder="Введите название">
        </div>

        <div class="form__row">
            <label class="form__label" for="project">Проект <sup>*</sup></label>

            <select class="form__input form__input--select" name="project" id="project">
                <option value="">Входящие</option>
            </select>
        </div>

        <div class="form__row">
            <label class="form__label" for="date">Дата выполнения <sup>*</sup></label>

            <input class="form__input form__input--date" type="text" name="date" id="date" value=""
                   placeholder="Введите дату в формате ДД.ММ.ГГГГ">
        </div>

        <div class="form__row">
            <label class="form__label" for="file">Файл</label>

            <div class="form__input-file">
                <input class="visually-hidden" type="file" name="preview" id="preview" value="">

                <label class="button button--transparent" for="preview">
                    <span>Выберите файл</span>
                </label>
            </div>
        </div>

        <div class="form__row form__row--controls">
            <input class="button" type="submit" name="" value="Добавить">
        </div>
    </form>
</div> -->

<script type="text/javascript" src="js/script.js"></script>
</body>
</html>