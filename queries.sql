
SELECT  project_name, id, users.project_name FROM project_list JOIN users
    ON  project_list.project_name = users.project_name
WHERE   users.name = "Остап Ибрагим-бей";


SELECT  id_project_name, title, project_list.project_name FROM task_list JOIN project_list
    ON  id_project_name = project_list.project_name
WHERE   project_list.projects_name = 'Опаньки';


UPDATE  task_list
SET     status_task = TRUE
WHERE   id = '42';


INSERT INTO project_list
SET
        key_project = 'PHP',
        project_name = 'Нифигасебе';
 

INSERT INTO tasks
SET  
        title = 'create tiny startup for portfolio'
        data_dedline = '30.07.2017 17:00'
        image_link = '/whereismyhat/image.png';


SELECT  data_dedline, title 
FROM    task_list 
WHERE   data_deadline = NOW() + INTERVAL 1 DAY;


UPDATE  task_list
SET     title = 'create big statrup for many'
WHERE   id = '42';
