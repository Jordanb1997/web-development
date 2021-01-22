<?php
    //start session
    session_start();
    
    //if sess for username has not been set, initialise
    if(!isset($_SESSION['session_user']))
    {
        $_SESSION['session_user']="";
        $_SESSION['user_id']="";
        
    }
    $session_id=$_SESSION['user_id'];
    //save username in session
    $session_user=$_SESSION['session_user'];
    
?>

