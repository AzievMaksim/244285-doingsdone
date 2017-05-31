/*
1. получить список из всех проектов для одного пользователя;
2. получить список из всех задач для одного проекта;
3. пометить задачу как выполненную;
4. добавить новый проект;
5. добавить новую задачу (включает указание проекта, дату завершения, название);
6. получить все задачи для завтрашнего дня;
7. обновить название задачи по её идентификатору
*/

/* 1. получить список из всех проектов для одного пользователя; */ `id_project`  `id_to_email` id_project_name
SELECT  project_name, id, project_name.users FROM project_list JOIN users
    ON  project_name.project_list = project_name.users
WHERE   users.name = "Остап Ибрагим-бей";

/* 2. получить список из всех задач для одного проекта; */
SELECT  id_project_name, title, project_name.project_list FROM task_list JOIN project_list
    ON  id_project_name = project_name.project_list
WHERE   projects_name.project_list = 'Опаньки';

/* 3. пометить задачу как выполненную; */
UPDATE  task_list
SET     status_task = TRUE
WHERE   id = '42';

/* 4. добавить новый проект; */
INSERT INTO project_list
SET
        key_project` = 'PHP',
        project_name` = 'Нифигасебе';
 
/* 5. добавить новую задачу (включает указание проекта, дату завершения, название); */
INSERT INTO tasks
SET  
        title = 'create tiny startup for portfolio'
        data_dedline = '30.07.2017'
        image_link = '/whereismyhat/image.png';

/* 6. получить все задачи для завтрашнего дня; */
SELECT  data_dedline 
FROM    task_list 
WHERE   deadline = NOW() + INTERVAL 1 DAY;

/* 7. обновить название задачи по её идентификатору. */
UPDATE  task_list
SET     title = 'create big statrup for many'
WHERE   id = '42';
