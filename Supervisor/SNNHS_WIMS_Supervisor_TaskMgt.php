<?php include('../Programs/server.php') ?>
<?php include('../config.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <title>SNNHS - Work Immersion Monitoring System</title>
        <link rel="stylesheet" href="../SNNHS_WIMS_website-structure.css">
        <link rel="stylesheet" href="SNNHS_WIMS_Supervisor_TaskMgt.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    </head>
    <body>
        <?php include(INCLUDE_PATH . "/include/SupervisorHeaderPanel.php") ?>
        
        <div class="row">
            <div class="main_panel">
                <!--This is the main part-->
                <div class="TaskMgtHeader">
                    <h1>Task Management</h1>
                </div>
                <div class="TaskMgtButtons">
                    <button id="button1" class="Task_ToDo" onclick="btnClick('include/ToDoContent.php')">
                        <label>To Do</label>
                    </button>
                    <button id="button2" class="Task_Doing" onclick="btnClick('include/DoingContent.php')">
                        <label>Doing</label>
                    </button>
                    <button  id="button3" class="Task_Done" onclick="btnClick('include/DoneContent.php')">
                        <label>Done</label>
                    </button>
                </div>
                <!--Task Content-->
                <div id="DIVID">
                    <?php include('include/ToDoContent.php') ?>
                </div>

            </div>
        </div>

        <?php include(INCLUDE_PATH . "/include/FooterPanel.php") ?>
    </body>
    <script src="../Programs/SNNHS_WIMS.js"></script>
</html>