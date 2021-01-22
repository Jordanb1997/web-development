<!DOCTYPE html>
<html>
    <?php
    include('db_conn.php');
    $check = "SELECT * FROM users WHERE username='".$_POST['username']."'";
    $result = $mysqli->query($check);
   
    $name = $_POST['username'];
    $pass = $_POST['password'];
    
    if($_POST['submit'])
    {
        if ($result->num_rows > 0)
        {
            echo "username already exists";
        }
        else if($_POST['password']!=$_POST['password2'])
        {
            echo "passwords do not match";
        }
        else
        {
            $sql = "INSERT INTO users (username, password, access)
            VALUES ('$name', '$pass', '2')";
            
            $mysqli->query($sql);

           header('Location: tute5_main.php');
        }
    }
	?>
    <body>  
        Sign Up
        <br><br><br>
        <form method="post" <?php echo "action='".htmlspecialchars($_SERVER["PHP_SELF"])."'"; ?> >
        Username:
        <input type="text" name="username">
        <br>
        Password:
        <input type="password" name="password">
        <br>
        Retype Password:
        <input type="password" name="password2">
        <br><br>
        <input type="submit" value="sign up">
        </form>
        <a href="tute5_main.php">Back to main page</a>
    </body>
</html>