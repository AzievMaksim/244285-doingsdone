<section class="content__side">
    <h2 class="content__side-heading">Проекты</h2>

    <nav class="main-navigation">
        <ul class="main-navigation__list">
            <?php

            foreach ($project as $num => $projectName):
                $firstItem = '';

                if ($num === 0) {
                    $firstItem = " main-navigation__list-item--active";
                }
                ?>
                <li class="main-navigation__list-item<?= $firstItem; ?>">
                    <a class="main-navigation__list-item-link" href="#"><?= $projectName; ?></a>
                    <span class="main-navigation__list-item-count"> <?= amountTaskInProject($task_list, $projectName); ?> </span>
                </li>
            <?php endforeach; ?>

        </ul>
    </nav>

    <a class="button button--transparent button--plus content__side-button" href="#">Добавить проект</a>
</section>

