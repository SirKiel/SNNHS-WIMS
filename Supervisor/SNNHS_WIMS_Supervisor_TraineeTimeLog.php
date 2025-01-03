<?php include('../Programs/server.php') ?>
<?php include('../config.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <title>SNNHS - Work Immersion Monitoring System</title>
        <link rel="stylesheet" href="../SNNHS_WIMS_website-structure.css">
        <link rel="stylesheet" href="SNNHS_WIMS_Supervisor_TraineeTimeLog.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="../Programs/SNNHS_WIMS.js"></script>
    </head>
    <body onload="startTime()">
        <?php include(INCLUDE_PATH . "/include/SupervisorHeaderPanel.php") ?>
        
        <div class="row">
            <div class="main_panel">
                <!--This is the main part-->
                <div class="TraineeTimeLogHeader">
                    <h1>Trainee Time Logs</h1>
                    <span id="txt"></span>
                </div>

                <!--This is where the time log of the trainee will be displayed-->
                <div class="TraineeTimeLogContainer">

                    <div class="List" id="Trainee1">
                        <!--Trainee Profile and Name-->
                        <div class="TimeLogContent">
                            <div class="Profile">
                                <div class="StudentImage">
                                    <img src="../Assets/ProfileLogo.png">
                                </div>
                                <div class="StudentName">
                                    <span id="Name">Juan De La Cruz</span>
                                    <span id="Section">Grade 12 - STEM</span>
                                </div>
                            </div>
                            <!--Time Record-->
                            <div class="TimeRecord">
                                <table>
                                    <tr>
                                        <th colspan="2"><label>AM</label></th>
                                        <th colspan="2"><label>PM</label></th>
                                    </tr>
                                    <tr>
                                        <td><label>Time In</label></td>
                                        <td><label>Time Out</label></td>
                                        <td><label>Time In</label></td>
                                        <td><label>Time Out</label></td>
                                    </tr>
                                    <tr>
                                        <!--Morning-->
                                        <td><span id="TimeInAM">XX:XX AM</span></td>
                                        <td><span id="TimeOutAM">XX:XX AM</span></td>
                                        <!--Afternoon-->
                                        <td><span id="TimeInPM">XX:XX PM</span></td>
                                        <td><span id="TimeOutPM">XX:XX PM</span></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!--Remarks-->
                        <div class="SupervisorRemarks">
                            <form>
                                <label>Remarks</label></br>
                                <textarea placeholder="Insert remarks here..."></textarea></br>

                                <center><button id="TimeLog_Remarks">Submit</button></center>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include(INCLUDE_PATH . "/include/FooterPanel.php") ?>
    </body>
</html>