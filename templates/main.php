 <?php   /*

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
*/

?> 

    <!DOCTYPE html>
<html lang="en"> 
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
                   foreach ($array as $arrayData): 
                        $completed = '';
                        $date_deadline = $arrayData['Date'];

                        if ($arrayData['status'] == 'Yes') {
                            $completed = "task--completed";
                        }
                        ?> 

                        <tr class="tasks__item task <?= $completed; ?>">
                            <td class="task__select">
                                <label class="checkbox task__checkbox">
                                    <input class="checkbox__input visually-hidden" type="checkbox" checked>
                                    <span class="checkbox__text"> <?= $arrayData['task']; ?> </span>
                                </label>
                            </td>
                            <td class="task__date"> <?= $date_deadline; ?>  </td>


                            <td class="task__controls">
                            </td>
                        </tr>
                    <?php endforeach; ?>                
                   
                                           
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
    
 </html> 




<?php //

                 /*   foreach ($massive_task as $massive_taskData):
                        $completed = '';
                        $date_deadline = $massive_taskData['Date'];

                        if ($massive_taskData['status'] == 'Yes') {
                            $completed = "task--completed";
                        }
                        ?> 

                        <tr class="tasks__item task <?= $completed; ?>">
                            <td class="task__select">
                                <label class="checkbox task__checkbox">
                                    <input class="checkbox__input visually-hidden" type="checkbox" checked>
                                    <span class="checkbox__text"> <?= $massive_taskData['task']; ?> </span>
                                </label>
                            </td>
                            <td class="task__date"> <?= $date_deadline; ?>  </td>


                            <td class="task__controls">
                            </td>
                        </tr>
                    <?php endforeach; ?>



?> */