<?php include('../Programs/server.php') ?>
<?php include('../config.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <title>SNNHS - Work Immersion Monitoring System</title>
        <link rel="stylesheet" href="../SNNHS_WIMS_website-structure.css">
        <link rel="stylesheet" href="SNNHS_WIMS_Supervisor_StudentList.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="../Programs/SNNHS_WIMS.js" defer></script>
    </head>
    <body>
        <?php include(INCLUDE_PATH . "/include/SupervisorHeaderPanel.php") ?>
        
        <div class="row">
            <div class="main_panel">
                <!--This is the main part-->
                <div class="StudentList">
                    <div class="StudentListHeader">
                        <h1>List of Trainees</h1>
                    </div>

                    <div class="StudentListContainer">
                        <div class="List" id="Trainee1">
                            <div class="StudentImage">
                                <img src="../Assets/ProfileLogo.png">
                            </div>
                            <div class="StudentName">
                                <span id="Name">Juan De La Cruz</span>
                                <span id="Section">Grade 12 - STEM</span>
                            </div>
                            <div class="StudentButtons">
                                <button id="ViewProfile" onclick="openWindow()">Profile</button><br>
                                <button id="ViewTimeLog" onclick="openWindow()">View Task</button><br>
                                <button id="ViewTimeLog" onclick="openWindow()">Grade</button>
                            </div>
                        </div>

                        <div class="List" id="Trainee2">
                            <div class="StudentImage">
                                <img src="../Assets/ProfileLogo.png">
                            </div>
                            <div class="StudentName">
                                <span id="Name">Pedro Castillo</span>
                                <span id="Section">Grade 12 - ABM</span>
                            </div>
                            <div class="StudentButtons">
                                <button id="ViewProfile" onclick="openWindow()">Profile</button><br>
                                <button id="ViewTimeLog" onclick="openWindow()">View Task</button><br>
                                <button id="ViewTimeLog" onclick="openWindow()">Grade</button>
                            </div>
                        </div>
                    </div>

                    <!--This is where a pop-up will appear when buttons are clicked-->
                    <div id="PopUp">
                        <div class="PopUpContainer">
                            <div class="PopUpHeader">
                                <span class="close" onclick="closeWindow()">&times;</span>
                            </div>
                            <hr>
                            <div class="PopUpContent">
                                <label>Content will appear what ever the button is clicked.</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include(INCLUDE_PATH . "/include/FooterPanel.php") ?>
    </body>
</html>