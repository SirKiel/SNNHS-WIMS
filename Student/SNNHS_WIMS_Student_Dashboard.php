<?php include('../Programs/server.php') ?>
<?php include('../config.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <title>SNNHS - Work Immersion Monitoring System | Dashboard</title>
        <link rel="stylesheet" href="../SNNHS_WIMS_website-structure.css">
        <link rel="stylesheet" href="SNNHS_WIMS_Student_Dashboard.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="../Programs/SNNHS_WIMS.js" defer></script>
    </head>
    <body>
        <?php include(INCLUDE_PATH . "/include/StudentHeaderPanel.php") ?>
        
        <div class="row">
            <div class="main_panel">
                <!--This is the main part-->
                <div class="announcement">
                    <p><b>Announcement:</b></p>
                    <p></p>
                </div>

                <div class="navigation">
                    <div class="nav_buttons">
                        <!--Notification Icon-->
                        <a onclick="openWindow()"><?php include(INCLUDE_PATH . "/include/NotifIcon.php") ?></a>
                        <a href="SNNHS_WIMS_Student_TimeIn.php"><img src="../Assets/TimeInLogo.png"></a>
                    </div>
                    <div class="nav_buttons"><a href="SNNHS_WIMS_Student_DailyJournal.php"><img src="../Assets/JournalLogo.png"></a></div>
                    <div class="nav_buttons"><a href="SNNHS_WIMS_Student_TaskMgt.php"><img src="../Assets/TaskManagementLogo.png"></a></div>
                    <div class="nav_buttons"><a href="SNNHS_WIMS_Student_Profile.php"><img src="../Assets/ProfileLogo.png"></a></div>
                </div>
            </div>
        </div>

        <?php include(INCLUDE_PATH . "/include/FooterPanel.php") ?>

                        <!--This is where a pop-up will appear when buttons are clicked-->
        <div id="PopUp">
            <div class="PopUpContainer">
                <div class="PopUpHeader">
                    <span class="close" onclick="closeWindow()">&times;</span><br>
                </div>
                <div class="PopUpTitle">
                    <span>Notification</span>
                </div>
                <hr>
                <div class="PopUpContent">
                    <p>The notifications will appear in a pop-up window.</p>
                    <!--This is where the notifications will appear. each notification ID should have a unique name and should be stacked according to recency.-->
                </div>
            </div>
        </div>

    </body>
</html>