<?php include('../Programs/server.php') ?>
<?php include('../config.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <title>SNNHS - Work Immersion Monitoring System | Daily Journal</title>
        <link rel="stylesheet" href="../SNNHS_WIMS_website-structure.css">
        <link rel="stylesheet" href="SNNHS_WIMS_DailyJournal.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="SNNHS_WIMS.js"></script>
    </head>
    <body>
        <?php include(INCLUDE_PATH . "/include/StudentHeaderPanel.php") ?>
        
        <div class="row">
            <div class="main_panel">
                <!--This is the main part-->
                <div class="JournalTab">
                    <div class="JournalToday">
                        <a href="SNNHS_WIMS_Student_DailyJournal.php"><label>Today</label></a>
                    </div>
                    <div class="JournalPast">
                        <a href="SNNHS_WIMS_Student_PastJournal.php"><label>Past</label></a>
                    </div>
                </div>
                <div class="JournalContentPast">
                    <div class="PreviousJournals">
                        <div>
                            <div class="JournalDate">
                                <label>Dec. XX, 20XX</label>
                                <button onclick="showJournal()">Review</button>
                            </div>
                            <div id="JournalEntry">
                                <label>This dropdown will show the entry of the journal.</label>
                                <br>
                                <button>Edit</button>
                            </div>
                        </div>
                        <div>
                            <div class="JournalDate">
                                <label>Dec. XX, 20XX</label>
                                <button>Review</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include(INCLUDE_PATH . "/include/FooterPanel.php") ?>
    </body>
</html>