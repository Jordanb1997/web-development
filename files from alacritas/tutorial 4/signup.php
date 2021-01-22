<!DOCTYPE html>
<html>
    <?php
    $servername = "localhost";
    $username = "jordanb7";
    $password = "420545";
    $database = "jordanb7";

    
    $conn = new mysqli ($servername, $username, $password, $database);

    $sql = "INSERT INTO users (username, password)
    VALUES ('".$_POST['username']."','".$_POST['password']."')";

    $conn->query($sql);

    $conn->close();
	?>
    <body>  
	You have succesfully registered your account<br>
	Username: <?php echo $_POST["username"]; ?><br>
	password: <?php echo $_POST["password"]; ?><br>
    </body>
</html>