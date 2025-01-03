<?php include('../Programs/server.php') ?>
<?php include('../config.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <title>SNNHS - Work Immersion Monitoring System | Task Management</title>
        <link rel="stylesheet" href="../SNNHS_WIMS_website-structure.css">
        <link rel="stylesheet" href="SNNHS_WIMS_Student_TaskMgt.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php include(INCLUDE_PATH . "/include/StudentHeaderPanel.php") ?>
        
        <div class="row">
            <div class="main_panel">
                <!--This is the main part-->
                <div class="StudentTask">
                    <div class="TaskLabel">
                        <label>Task Management</label>
                    </div>
                    <div class="AssignedTasks">
                        <div class="TaskList">
                            <div class="Task">
                                First Task
                            </div>
                            <div class="TaskContent">
                                <div class="TaskDescription">
                                    The Description of the task assigned to the student will be displayed here.
                                </div>
                                <div class="TaskActButton">
                                    <hr>
                                    <button>Done</button>
                                </div>
                            </div>
                        </div>
                        <div class="TaskList">
                            <div class="Task">
                                Second Task
                            </div>
                            <div class="TaskContent">
                                <div class="TaskDescription">
                                    The Description of the task assigned to the student will be displayed here.
                                </div>
                                <div class="TaskActButton">
                                    <hr>
                                    <button>Done</button>
                                </div>
                            </div>
                        </div>
                        <div class="TaskList">
                            <div class="Task">
                                Third Task
                            </div>
                            <div class="TaskContent">
                                <div class="TaskDescription">
                                    The Description of the task assigned to the student will be displayed here.
                                </div>
                                <div class="TaskActButton">
                                    <hr>
                                    <button>Done</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include(INCLUDE_PATH . "/include/FooterPanel.php") ?>
    </body>
</html>