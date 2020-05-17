<?php     

    //Starting of the session
    session_start();

    if ($_SESSION['IsLoggedIn'] == true) {
        // already logged in
        session_unset(); //Remove all the session variables
        header('Location: homePage.php');
    }
    
?>