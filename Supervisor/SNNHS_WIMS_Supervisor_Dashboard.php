<?php include('../Programs/server.php') ?>
<?php include('../config.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <title>SNNHS - Work Immersion Monitoring System</title>
        <link rel="stylesheet" href="../SNNHS_WIMS_website-structure.css">
        <link rel="stylesheet" href="SNNHS_WIMS_Supervisor_Dashboard.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php include(INCLUDE_PATH . "/include/SupervisorHeaderPanel.php") ?>
        
        <div class="row">
            <div class="main_panel">
                <!--This is the main part-->
                <div class="announcement">
                    <p><b>Announcement:</b></p>
                    <p></p>
                </div>
                <div class="navigation">
                    <a href="SNNHS_WIMS_Supervisor_TaskMgt.php"><div class="nav_buttons"><img src="../Assets/TaskManagementLogo.png"><p>Task Management</p></div></a>
                    <a href="SNNHS_WIMS_Supervisor_TraineeTimeLog.php"><div class="nav_buttons"><img src="../Assets/TimeInLogo.png"><p>Trainee Time Log</p></div></a>
                    <a href="SNNHS_WIMS_Supervisor_StudentList.php"><div class="nav_buttons"><img src="../Assets/JournalLogo.png"><p>List of Trainees</p></div></a>
                    <a href="SNNHS_WIMS_Supervisor_Profile.php"><div class="nav_buttons"><img src="../Assets/ProfileLogo.png"><p>Profile</p></div></a>
                </div>
            </div>
        </div>

        <?php include(INCLUDE_PATH . "/include/FooterPanel.php") ?>
    </body>
</html>