<?php

    //Starting of the session 
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        //Perform login
        if(isset($_POST['login']) == true)
        {
            if( empty($_POST['uName'] == true) || empty($_POST['password'] == true))
            {
                //login not possible
                echo "Empty Field - Login Failed";
            }
            else
            {
                //check credentials
                $uName = htmlspecialchars($_POST['uName']);
                $password = htmlspecialchars($_POST['password']);
                
                if( $uName == "testLogin" && $password == "login")
                {
                    $_SESSION['IsLoggedIn'] = true;
                    $_SESSION['UserName'] = $uName;

                    //To navigate to home page
                    header('location: homePage.php');
                }
                else
                {
                    //To navigate to login page
                    header('location: loginPage.html');
                }
                
            }
        }
    }
    //echo "login information";


?>