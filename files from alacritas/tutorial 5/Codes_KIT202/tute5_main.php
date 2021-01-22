<!DOCTYPE html>
<html>
<body>
<center>
<hr><h2>Products Management</h2><hr>
</center>
<?php
    include('db_conn.php');
    
    $sql = "SELECT * FROM users WHERE username='".$_POST['username']."' AND password='".$_POST['password']."'";
    
    $result=$mysqli->query($sql);
    
    $_SESSION['$loggedin'] = 0;
    
    echo "test1"; 
    if($_POST['login'])
    {
        
        echo "test2"; 
        if ($result->num_rows == 1)
        {
            echo "test3"; 
            $_SESSION['loggedin']=1;
            echo "test3a"; 
        }
        else
        {
            echo "test4"; 
            echo "username or password is incorrect";
        }
        echo "test 7";
    }
    
    if($_SESSION['$loggedin']==0)
    {   
        echo "test5";
       echo '<form method="post" action="'.htmlspecialchars($_SERVER["PHP_SELF"]).'">
            Username:
            <input type="text" name="username">
            <br>
            Password:
            <input type="password" name="password">
            <br><br>
            <input type="submit" value="login" name="login">
            </form>
            <a href="signup.php">sign up</a>';
    }
    else
    {
        echo "test6";
        echo'<form action="./tute5_insert.php">
        <input type="submit" value="Insert">
        </form>
        <form action = "./tute5_update.php">
        <input type="submit" value="Update">
        </form>
        <form action = "./tute5_delete.php">
        <input type="submit" value="Delete">
        </form>
        <form action = "./tute5_search.php">
        <input type="submit" value="Search">
        </form>';
    }
?>

    
<!--
<form action = "./tute5_insert.php">
<input type="submit" value="Insert">
</form>
<form action = "./tute5_update.php">
<input type="submit" value="Update">
</form>
<form action = "./tute5_delete.php">
<input type="submit" value="Delete">
</form>
<form action = "./tute5_search.php">
<input type="submit" value="Search">
</form>
-->
</body>
</html>