<?php ob_start(); ?>
<section class="content__side">
    <h2 class="content__side-heading">Проекты</h2>

    <nav class="main-navigation">
        <ul class="main-navigation__list">
            <?php

            foreach ($project_list as $alias => $project_Name):
                $css_class_active = '';
                $index = 0;
                $url = "index.php?projectget=$alias";

                ?>
                <li class="main-navigation__list-item<?= $css_class_active; ?>">
                    <a class="main-navigation__list-item-link" href="/<?= $url; ?>"> <?= $project_Name; ?></a>
                    <span class="main-navigation__list-item-count"> <?= amountTaskInProject($task_list, $project_Name); ?> </span>
                </li>
            <?php endforeach; ?>

        </ul>
    </nav>
    <a class="button button--transparent button--plus content__side-button" href="#">Добавить проект</a>
</section>
<?php ob_flush(); ?>
