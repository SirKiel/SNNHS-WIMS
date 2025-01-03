<?php

//initializing viarables
$LRN = "";
$email = "";
$errors = array();

//LOGIN USER

if (isset($_POST['login_user'])) {
    $LRN = mysqli_real_escape_string($_POST['LRN']);
    $Password = mysqli_real_escape_string($_POST['Password']);

    if (empty($LRN)) {
        array_push($errors, "LRN is required");
    }
    if (empty($Password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $Password = md5($Password);
        $query = "SELECT * FROM users WHERE LRN='$LRN' AND Password='$Password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['LRN'] = $LRN;
            $_SESSION['success'] = "You are now logged in";

            header('location: index.php');
        } else {
            array_push($errors, "Wrong LRN/Password combination. Please try again.");
        }
    }
}
?>
