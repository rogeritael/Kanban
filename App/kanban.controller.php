<?php
    require "App/db/db.php";
    require "App/models/project.model.php";
    require "App/models/task.model.php";
    // require "db/user.model.php";

    // recupera os projetos do usuário
    $db = new Db();
    $projects = new Project();

    $projects->__set('db', $db->connect());
    $projArray = $projects->read();

    // recupera as tarefas do projeto selecionado
    foreach($projArray as $project){
        if($project['project_status'] == 1){
            $task = new Task();
            $task->__set('projectId', $project['project_id']);
            $task->__set('db', $db->connect());
            $tasks = $task->read();
        }
    }



    if(isset($_GET['action'])){
        // marca o projeto como selecionado para recuperar as tarefas
        if($_GET['action'] == 'selectProject'){
            $id = $_GET['id'];
            $db = new Db();
            $project = new Project();

            $project->__set('project_id', $id);
            $project->__set('user_id', 1);
            $project->__set('db', $db->connect());

            $project->selectProject();

            header('location: index.php');
        }

        //cria um novo projeto
        if($_GET['action'] == 'newProject'){
            $projectName = $_POST['projectName'];
            $db = new Db();

            $project = new Project();
            $project->__set('db', $db->connect());
            $project->__set('user_id', 1);
            $project->__set('project_name', $projectName);

            $project->newProject();
            header('location: index.php');
        }

        //exclui um projeto
        if($_GET['action'] == 'deleteProject'){
            $id = $_GET['id'];

            $db = new Db();
            $project = new Project();

            $project->__set('db', $db->connect());
            $project->__set('project_id', $id);
            $project->__set('user_id', 1);
            
            $project->delete();
            
            header('location: index.php');
        }

        //edita o nome do projeto
        if($_GET['action'] == 'editprojectname'){
            $id = $_GET['id'];

            $db = new Db();
            $project = new Project();

            $project->__set('db', $db->connect());
            $project->__set('user_id', 1);
            $project->__set('project_name', $_POST['name']);
            $project->__set('project_id', $id);

            $project->editName();

            header('location: index.php');
        }

        //deleta a tarefa
        if($_GET['action'] == 'deletetask'){
            $id = $_GET['id'];

            $db = new Db();
            $task = new Task();

            $task->__set('db', $db->connect());
            $task->__set('taskId', $id);

            $task->delete();

            header('location: index.php');

        }
    }
?>