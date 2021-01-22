<!DOCTYPE html>
<html>
<body>

<center>
<h2>Insert Product Details</h2><hr>
</center>
    
    </body>
</html>
<?php
include('db_conn.php'); //db connection

if($_POST['insert']){
    $sql = "INSERT INTO KT202_product (ID, Name, Price, Description)
    VALUES ('".$_POST['id']."', '".$_POST['name']."', '".$_POST['price']."', '".$_POST['description']."')";

    $mysqli->query($sql);
}   
else if($_POST['reset']){
    
}
else if($_POST['main']){
    header('location: tute5_main.php');
}
    
    
$sql = "SELECT * FROM KIT202_product";
$result = $mysqli->query($sql);

echo "<table><tr>
      <th>ID</th>
      <th>Name</th>
      <th>Price</th>
      <th>Description</th>
      </tr>";
      if ($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "<tr>";
            echo "<td>" . $row["ID"] . "</td>";
            echo "<td>" . $row["Name"] . "</td>";
            echo "<td>" . $row["Price"] . "</td>";
            echo "<td>" . $row["Description"] . "</td>";
            echo "</tr>";
        }
      }
    echo "</table>";
    
    echo '<hr>
    <form method="post" action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '">
        ID: <input type="text" name="id"><br>
        Name: <input type="text" name="name"><br>
        Price: <input type="text" name="price"><br>
        Description: <input type="text" name="description"><br>
        <input type="submit" name="insert" value="insert">
        <input type="submit" name="reset" value="reset"><br>
        <input type="submit" name="main" value="back to main">
    </form>
    ';
?>



