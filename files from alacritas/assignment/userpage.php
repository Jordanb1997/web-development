<!DOCTYPE html>
<?php
    //a user can edit their password email and card infromation here
    //can logout and see links to all menus and accessible pages

    //import session and connection files
        include('db_connect');
        include('session.php');
        

        
        //if no user logged in return to login
        if($_SESSION['session_user']!="")
        {
            header('location: mainpage.php');
        }

        
?>
<html>
	<head>
    <title>Y.E.O.M, Your Excellent On-time Meals</title>
    <link rel="stylesheet" type="text/css" href="styles/main.css">
	</head>
    <body>
    <!--page nave bar-->
    <div id="pagetop">
    <ul id="pagetop">
        <li id="top"><p id="yeom">Y.E.O.M</p></li>
        <li id="top"><a href="mainpage.php">Home</a></li>
        <li id="top"><a href="registration.php">Register</a></li>
        <li id="top"><a href="userpage.php">user page</a></li>
        <li id="top"><a href="lazenbys.php">lazenby's</a></li>
        <li id="top"><a href="theref.php">The Ref</a></li>
        <li id="top"><a href="thewalk.php">The Walk</a></li>
        <li id="top"><a href="thegrove.php">The Grove</a></li>
        <li id="top"><a href="tradetable.php">Trade Table</a></li>
        <li id="top"><a href="mastermenu.php">Master Menu</a></li>
        <li id="top"><a href="orders.php">Orders</a></li>
    </ul>
    </div>
    <div id="welcome">
    <p id="welcome">Welcome To Your Exellent Meals On Time</p>
    <form action="signout.php" method="post">
		<input type="submit" name="submit" value="Logout">
	</form>
    </div>
    <br><br><br>
    <!--buttons for menus-->
    <div id="menubutt"> 
        <a id="llink" href="lazenbys.php">Lazenby's Menu</a>
        <a id="relink" href="theref.php">Refectory Menu</a>  
        <a id="trlink" href="tradetable.php">Trade Table Menu</a>
        <a id="grlink" href="thegrove.php">The Grove</a>
        <a id="walink" href="thewalk.php">The Walk</a>  
    </div>
    <div id="edit">
        <p>change your information here!</p>
        <form id="passchange" action="">
            <label>new password</label>
            <input id="password_new" type="password" />
            <label>old password</label>
            <input id="password_old" type="password" />
            <input type="submit"  name="change_pass" value="change" method="post" />
        </form>
                <form id="emailchange" action="">
            <label>change email</label>
            <input id="email_new" type="text" />
            <input type="submit"  name="change_email" value="change" method="post" />
        </form>
                <form id="phonechange" action="">
            <label>new phone number</label>
            <input id="phone_new" type="text" />
            <input type="submit"  name="change_phone" value="change" method="post" />
        </form>
    </div>
    </body>
</html>