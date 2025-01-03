<?php include('../Programs/server.php') ?>
<?php include('../config.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <title>SNNHS - Work Immersion Monitoring System | Time Log</title>
        <link rel="stylesheet" href="../SNNHS_WIMS_website-structure.css">
        <link rel="stylesheet" href="SNNHS_WIMS_TimeIn.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="../Programs/SNNHS_WIMS.js"></script>
    </head>
    <body onload="startTime()">
        <?php include(INCLUDE_PATH . "/include/StudentHeaderPanel.php") ?>
        
        <div class="row">
            <div class="main_panel">
                <!--This is the main part-->
                <form>
                    <div class="TimeInLabel">
                        <h1>Time In</h1>
                    </div>
                    <hr>
                    <div class="CurrentTime">
                        <label>Time</label>
                        <span id="txt"></span>
                    </div>
                    <div class="ImageInput">
                        <div class="CameraLogoDiv">
                            <img src="../Assets/CameraLogo.png">
                            <p>Take a Photo</p>
                        </div>
                    </div>
                    <div class="RemarksBox">
                        <textarea placeholder="Insert remarks here..."></textarea>
                    </div>
                    <div class="SubmitClear">
                        <button class="FormSubmit">Submit</button>
                        <button class="FormClear">Clear</button>
                    </div>
                </form>
            </div>
        </div>

        <?php include(INCLUDE_PATH . "/include/FooterPanel.php") ?>
    </body>
</html>