<?php include('../Programs/server.php') ?>
<?php include('../config.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <title>SNNHS - Work Immersion Monitoring System</title>
        <link rel="stylesheet" href="../SNNHS_WIMS_website-structure.css">
        <link rel="stylesheet" href="SNNHS_WIMS_GroupManager_TimeLogsMgt.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="../Programs/SNNHS_WIMS.js"></script>
    </head>
    <body>
        <?php include(INCLUDE_PATH . "/include/GroupManagerHeaderPanel.php") ?>
        
        <div class="row">
            <div class="main_panel">
                <!--This is the main part-->
                <div class="TLMgt">
                    <div class="TLMgt_Header">
                        <h1>Trainee Monitoring</h1>
                    </div>
                    <div class="Container">
                        <div class="List" id="trainee1">
                            <div class="StudentImage">
                                <img src="../Assets/ProfileLogo.png">
                            </div>
                            <div class="StudentName">
                                <span id="Name">Juan De La Cruz</span>
                                <span id="Section">Grade 12 - STEM</span>
                                <span id="COMPANY">Black Nazarene</span>
                                <span id="WI_SUPERVISOR">Mr. Douglas MacArthur</span>
                                <div class="Status">
                                    <input type="radio" value="status_checked" name="trainee1" id="StatusComplete"><span>Complete</span>
                                    <input type="radio" value="status_checked" name="trainee1" id="StatusIncomplete"><span>Incomplete</span>
                                </div>
                            </div>
                            <div class="StudentButtons">
                                <button id="ViewProfile" onclick="openWindow()">DTR</button><br>
                                <button id="ViewTimeLog" onclick="openWindow()">Journal</button><br>
                                <button id="ViewTimeLog" onclick="openWindow()">Profile</button>
                            </div>
                        </div>

                        <div class="List" id="trainee2">
                            <div class="StudentImage">
                                <img src="../Assets/ProfileLogo.png">
                            </div>
                            <div class="StudentName">
                                <span id="Name">Pedro Penduko</span>
                                <span id="Section">Grade 12 - ABM</span>
                                <span id="COMPANY">Black Nazarene</span>
                                <span id="WI_SUPERVISOR">Mr. Douglas MacArthur</span>
                                <div class="Status">
                                    <input type="radio" value="status_checked" name="trainee1" id="StatusComplete"><span>Complete</span>
                                    <input type="radio" value="status_checked" name="trainee1" id="StatusIncomplete"><span>Incomplete</span>
                                </div>
                            </div>
                            <div class="StudentButtons">
                                <button id="ViewProfile" onclick="openWindow()">DTR</button><br>
                                <button id="ViewTimeLog" onclick="openWindow()">Journal</button><br>
                                <button id="ViewTimeLog" onclick="openWindow()">Profile</button>
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
                            <span>Note: The content of the Popup window is interchangeable based on the button clicked by the Group Managers. Dashboard for Group Managers and Work Immersion will be designed soon. For the meantime, this feature is needed to allow the group managers monitor the trainees.</span>
                                <?php include(INCLUDE_PATH . "/include/TraineeDailyTimeRecord.php") ?>
                                <?php include(INCLUDE_PATH . "/include/TraineeProfile.php") ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include(INCLUDE_PATH . "/include/FooterPanel.php") ?>
    </body>
</html>