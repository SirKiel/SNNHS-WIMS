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
                            <h1 id="Complete_Name">Juan De La Cruz</h1>
                            <label id="Grade_Section">Manager</label><br>
                        </div>
                    </div>
                    <hr>
                    <div class="BasicInformation">
                        <div class="Position">
                            <label>Position</label>
                            <label class="InfoBox" id="POSITION">Work Immersion Supervisor</label>
                        </div>
                        <div class="Learner_Sex">
                            <label>Sex</label>
                            <label class="InfoBox" id="SEX">Male/Female</label> 
                        </div>
                        <div class="Learner_BD">
                            <label>Birthdate</label>
                            <label class="InfoBox" id="BIRTH_DATE">MM/DD/YYYY</label>
                        </div>
                        <div>
                            <label>Contact Number</label>
                            <label class="InfoBox" id="CONTACT_NUMBER">09123456789</label>
                        </div>
                        <div>
                            <label>Address</label>
                            <label class="InfoBox" id="ADDRESS">Brgy. XX, XXXXXXX, Ilocos Norte</label>
                        </div>
                        </br>
                        <div>
                            <label>Company</label>
                            <label class="InfoBox" id="COMPANY">XXXXXXXXXXXXXXXXXXXXX</label>
                        </div>
                        <div>
                            <label>Department</label>
                            <label class="InfoBox" id="DEPARTMENT">XXXXXXXXXXXXXXXXXXXXX</label>
                        </div>
                    </div>
                    <hr>
                    <div class="ProfileButtons">
                        <button name="edit_profile" id="EditProfile" onclick="openWindow()">Edit Profile</button>
                    </div>
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
                <form>
                    <div class="PopUpContent">
                        <div class="SupervisorProfile">
                            <div class="BasicInformation">
                                <div class="NameID">
                                    <label>Edit your Profile</label><br>
                                </div>
                                <div id="StudentName">
                                    <label>Last Name</label>
                                    <input type="text" class="InfoBox" id="LAST_NAME" placeholder="Enter your last name">
                                    <label>First Name</label>
                                    <input type="text" class="InfoBox" id="FIRST_NAME" placeholder="Enter your first name">
                                    <label>Middle Name</label>
                                    <input type="text" class="InfoBox" id="MIDDLE_NAME" placeholder="Enter your middle name">
                                    <label>Position</label>
                                    <input type="text" class="InfoBox" id="POSITION" placeholder="Enter your position">
                                </div>
                            </div>
                            <hr>
                            <div class="BasicInformation">
                                <!--<div>
                                    <label>Learner's Reference Number</label>
                                    <input type="text" class="InfoBox" id="LRN" placeholder="Enter your LRN">
                                </div>-->
                                <div>
                                    <label>Sex</label>
                                    <input type="radio" class="Radio" id="SEX" name="Sex" value="MALE"><label style="display:inline-block;">Male</label>
                                    <input type="radio" class="Radio" id="SEX" name="Sex" value="FEMALE"><label style="display:inline-block;">Female</label>
                                </div>
                                <div>
                                    <label>Birthdate</label>
                                    <input type="Date" class="InfoBox" id="BIRTH_DATE">
                                </div>
                                <div>
                                    <label>Contact Number</label>
                                    <input type="number" class="InfoBox" id="CONTACT_NUMBER" placeholder="Enter your contact number">
                                </div>
                                <div>
                                    <label>Address</label>
                                    <input type="text" class="InfoBox" id="ADDRESS" placeholder="Enter your Address">
                                </div>
                                <div>
                                    <label>Company</label>
                                    <input type="text" class="InfoBox" id="COMPANY" placeholder="Enter Company name">
                                </div>
                                <div>
                                    <label>Department</label>
                                    <input type="text" class="InfoBox" id="DEPARTMENT" placeholder="Enter Department">
                                </div>
                            <hr>
                            <div class="ProfileButtons">
                                <button name="save_profile" id="saveProfile">Save Changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <?php include(INCLUDE_PATH . "/include/FooterPanel.php") ?>
    </body>
</html>