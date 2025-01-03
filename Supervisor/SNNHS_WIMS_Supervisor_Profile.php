<?php include('../Programs/server.php') ?>
<?php include('../config.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <title>SNNHS - Work Immersion Monitoring System</title>
        <link rel="stylesheet" href="../SNNHS_WIMS_website-structure.css">
        <link rel="stylesheet" href="SNNHS_WIMS_Supervisor_Profile.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="../Programs/SNNHS_WIMS.js"></script>
    </head>
    <body>
        <?php include(INCLUDE_PATH . "/include/SupervisorHeaderPanel.php") ?>
        
        <div class="row">
            <div class="main_panel">
                <!--This is the main part-->
                <div class="SupervisorProfile">
                    <div class="NameID">
                        <div>
                            <img src="../Assets/ProfileLogo.png">
                        </div>
                        <div id="SupervisorName">
                            <h1>Juan De La Cruz</h1>
                        </div>
                        <hr>
                    </div>
                    <div class="BasicInformation">
                        The content of this part will be updated soon.
                    </div>
                    <hr>
                    <div class="ProfileButtons">
                        <button name="edit_profile" id="EditProfile">Edit Profile</button>
                    </div>
                </div>
            </div>
        </div>

        <?php include(INCLUDE_PATH . "/include/FooterPanel.php") ?>
    </body>
</html>