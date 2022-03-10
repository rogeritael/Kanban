<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="assets/js/App.js" defer></script>
    <title>Kanban Board</title>
</head>
<body>
    <div class="container">

        <!-- 
            SIDEBAR
         -->
        <aside class="sidebar">
            <!-- sidebar header -->
            <div class="aside-header">
                <div class="aside-title-container">
                    <h2>Projetos</h2>
                    <a href=""><i class="fas fa-plus"></i></a>
                </div>

                <div class="new-project-form">
                    <form action="teste.php">
                        <input type="text" name="" id="" placeholder="Nome do projeto">
                        <button type="submit"><i class="fas fa-chevron-right"></i></button>
                    </form>
                </div>
            </div>
            <!-- /sidebar header -->

            <!-- sidebar body -->
            <div class="aside-body">
                <ul>
                    <li class="project-item">
                        <h3>UI/UX Design</h3>
                        <p>8 de 12 tarefas</p>
                    </li>
                    <li  class="current project-item">
                        <h3>site empresa de importação</h3>
                        <p>15 de 45 tarefas</p>
                    </li>
                    <li class="project-item">
                        <h3>projeto da BRF</h3>
                        <p>17 de 24 tarefas</p>
                    </li>
                </ul>
            </div>
            <!-- /sidebar body -->

            <!-- sidebar footer -->
            <div class="aside-footer">
                <a href=""><p>Sair <i class="fas fa-sign-out-alt"></i></p></a>
            </div>
            <!-- /sidebar footer -->
        </aside>
       

        <!-- 
            MAIN
         -->
        <section class="main-content">

            <div class="hidden-menu" onclick="hideMenu()"></div>

            <!-- header -->
            <header class="main-header">
                <i class="fas fa-bars" onclick="showMenu()"></i>
                <div class="project-info">
                    <div class="text-container">
                        <h2>Site empresa de importação</h2>
                        <p>15 de 45</p>
                    </div>
                    <div class="btn-container">
                        <i class="fas fa-pen"></i>
                        <i class="fas fa-trash"></i>
                        <input type="button" value="adicionar tarefa">
                    </div>
                </div>

                <!-- <div class="task-register">
                    <form action="">
                        <div class="input-task">
                            <label for="task"></label>
                            <input name="task" type="text" placeholder="Digite a tarefa">
                        </div>

                        <label for="task-description"></label>
                        <textarea name="task-description" placeholder="Escreva uma descrição"></textarea>
                        
                        <input type="submit" value="Cadastrar">
                    </form>
                </div> -->

                <h2 class="text-detail">Quadro</h2>
            </header>
            <!-- /header -->

            <!-- main -->
            <main class="workspace-container">