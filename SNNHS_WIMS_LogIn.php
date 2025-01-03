<?php include('Programs/server.php') ?>
<?php include('config.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <title>SNNHS - Work Immersion Monitoring System | Log In</title>
        <link rel="stylesheet" href="SNNHS_WIMS_website-structure.css">
        <link rel="stylesheet" href="SNNHS_WIMS_LogInForm.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php include(INCLUDE_PATH . "/include/HeaderPanel.php") ?>
        <div class="row">
            <div class="main_panel">
                <!--This is the main part-->
                <div class="LogInForm">
                    <form method="post" action="">
                        <?php include('Programs/errors.php'); ?>
                        <center><h1>Log In</h1></center>
                        <label>Learner's Reference Number</label><br>
                        <input type="text" name ="LRN" placeholder="Enter your LRN..."><br>
                        <label>Password</label><br>
                        <input type="password" name="Password" placeholder="Enter your Password..."><br>
                        <button type="submit" name="login_user">Log In</button>
                    </form>
                </div>
            </div>
        </div>
        <?php include(INCLUDE_PATH . "/include/FooterPanel.php") ?>
    </body>
</html>