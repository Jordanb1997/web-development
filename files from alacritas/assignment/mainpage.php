<!DOCTYPE html>
<?php
    //this is the main homepage
    //a user can navigate the website
    //or login and go to registration from here
    //contains links to every page availbale
?>
<html>
	<head>
        <title>Y.E.O.M, Your Excellent On-time Meals</title>
        <link rel="stylesheet" type="text/css" href="styles/main.css">
        <!--script for logging in-->
        <script
        src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
        </script>
        <script>src="jquery.validate.js"</script>
        <script>
        //validate the login input
        function validate_log(){
            //check the email
            if ($("#email").val()==""){
                alert("Enter e-mail");
               return false;
            //checking the password is valid 
            }else if ($("#password").val()==""){
                alert("Please enter password");
                return false;
            }
        }
        </script>
	</head>
    <body>
    <?php
        //include session and db connection
        include('db_connect');
        include('session.php');
        
        //if session for user has been set automatically go to userpage
        if($session_user!="")
        {
            header('location: userpage.php');
            //$ver_email=$_POST['email'];
            
            //$query="SELECT id_number FROM `menu_users` where email=$ver_email;

        }
    ?>
    <!--page nave bar-->
    <div id="pagetop">
    <ul id="pagetop">
        <li id="top"><p id="yeom">Y.E.O.M</p></li>
        <li id="top"><a href="mainpage.php">Home</a></li>
        <li id="top"><a href="registration.php">Register</a></li>
        <li id="top"><a href="userpage.php">user page</a></li>
        <li id="top"><a href="lazenbys.php">lazenby's</a></li>
        <li id="top"><a href="theref.php">The Ref</a></li>
        <li id="top"><a href="thewalk.php">the walk</a></li>
        <li id="top"><a href="thegrove.php">the grove</a></li>
        <li id="top"><a href="tradetable.php">trade table</a></li>
        <li id="top"><a href="mastermenu.php">Master Menu</a></li>
        <li id="top"><a href="orders.php">Orders</a></li>
    </ul>
    </div>
    <br><br>
    <!--form for logging in-->
    <div id="loginform">
        <p> Before ordering you must Login or Register</p>
        <form id="loginfields" method="post" action="./signin_engine.php" onsubmit="validate_log();">
            <fieldset>
                <legend>Login</legend>
                <!--getting login email-->
                <p>
                    <label for="email">E-mail</label>
                    <input id="email" type="email" name="email" />
                </p>
                <!--login password-->
                <p>
                    <label for="password">Password</label>
                    <input id="password" type="password" name="password" />
                </p>
                <p>
                    <input type="submit" value="login" id="submit">
                </p>
            </fieldset>
        </form>
        <br>
        <!--sending user to register-->
         <a href="registration.php" id="reg">Register Here</a>
    </div>
    <div id="menubutt"> 
        <a id="llink" href="lazenbys.php">Lazenby's Menu</a>
        <a id="relink" href="theref.php">Refectory Menu</a>  
        <a id="trlink" href="tradetable.php">Trade Table Menu</a>
        <a id="grlink" href="thegrove.php">The Grove</a>
        <a id="walink" href="thewalk.php">The Walk</a>  
    </div>
    </body>
</html>