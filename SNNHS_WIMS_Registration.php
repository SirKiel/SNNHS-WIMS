<?php include('Programs/server.php') ?>
<?php include('config.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <title>SNNHS - Work Immersion Monitoring System</title>
        <link rel="stylesheet" href="SNNHS_WIMS_website-structure.css">
        <link rel="stylesheet" href="SNNHS_WIMS_LogInForm.css">
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="Programs/SNNHS_WIMS.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php include(INCLUDE_PATH . "/include/HeaderPanel.php") ?>

        <div class="row">
            <div class="main_panel">
                <!--This is the main part-->
                <div class="RegisterForm">
                    <form method="post" action="">
                        <?php include('Programs/errors.php'); ?>
                        <center><h1>Register</h1></center>

                        <!--This is the Profile part-->
                        <label>Profile</label><br>
                        <input type="text" name="FirstName" placeholder="Enter your First Name..."><br>
                        <input type="text" name="LastName" placeholder="Enter your Last Name..."><br>

                        <!--This is the Role Selection part-->
                        <label>Role</label><br>
                        <div class="RoleSelection">
                            <input class="RolesRadio" type="radio" name="Role" value="Student"><label class="Roles">Student</label><br>
                            <input class="RolesRadio" type="radio" name="Role" value="Supervisor"><label class="Roles">Supervisor</label><br>
                            <input class="RolesRadio" type="radio" name="Role" value="WICoordinator"><label class="Roles">Work Immersion Coordinator</label><br>
                        </div>

                        <!--This is the additional information of the learners, it will be hidden.-->
                        <div class="Student Info">
                            <label>LRN</label><br>
                            <input type="text" name ="LRN" placeholder="Enter your LRN..."><br>
                            <label>Basic Information</label><br>
                            <input type="text" name="UserAdress" placeholder="Enter Address..."><br>
                            <input type="text" name="UserContact" placeholder="Enter Contact Number..."><br>
                        </div>

                        <!--This is the additional information of the supervisor, it will be hidden.-->
                        <div class="Supervisor Info">
                            <label>Basic Information</label><br>
                            <input type="text" name="EmployeeNumber" placeholder="Enter Employee Number..."><br>
                            <input type="text" name="UserContact" placeholder="Enter Contact Number..."><br>
                            <label>Company Information</label><br>
                            <input type="text" name="Company" placeholder="Enter Company Name..."><br>
                            <input type="text" name="CompanyAdress" placeholder="Enter Company Address..."><br>
                            <input type="text" name="SupervisorPosition" placeholder="Enter Position..."><br>
                        </div>

                        <!--This is the additional information of the work immersion coordinator, it will be hidden.-->
                        <div class="WICoordinator Info">
                            <label>Basic Information</label><br>
                            <input type="text" name="EmployeeNumber" placeholder="Enter Employee Number..."><br>
                            <input type="text" name="UserContact" placeholder="Enter Contact Number..."><br>
                        </div>

                        <!--This is the submit button-->
                        <button type="submit" name="reg_user">Register</button>
                    </form>
                </div>
            </div>
        </div>

        <?php include(INCLUDE_PATH . "/include/FooterPanel.php") ?>
    </body>
</html>