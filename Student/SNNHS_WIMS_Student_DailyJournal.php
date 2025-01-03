<?php include('../Programs/server.php') ?>
<?php include('../config.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <title>SNNHS - Work Immersion Monitoring System | Daily Journal</title>
        <link rel="stylesheet" href="../SNNHS_WIMS_website-structure.css">
        <link rel="stylesheet" href="SNNHS_WIMS_DailyJournal.css">
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
                <div class="JournalTab">
                    <button id="JournalToday" onclick="dailyJournal()">
                        <label>Today</label>
                    </button>
                    <button id="JournalPast" onclick="pastJournal()">
                        <label>Past</label>
                    </button>
                </div>

                <!--This is the Include Part-->
                <div id="JournalInclude">
                    <?php include(INCLUDE_PATH . '/include/StudentDailyJournal.php') ?>
                </div>
            </div>
        </div>

        <?php include(INCLUDE_PATH . "/include/FooterPanel.php") ?>
    </body>
</html>