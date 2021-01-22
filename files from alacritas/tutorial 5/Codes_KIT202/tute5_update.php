<!DOCTYPE html>
<html>
  <body>
    <center>
      <h2>Update Product Details</h2>
    </center>
    <?php
      include('db_conn.php');

      if($_POST['update']){
      	$subid=$_POST['id'];
      	$subname=$_POST['name'];
      	$subprice=$_POST['price'];
      	$subdesc=$_POST['desc'];
        $sql="UPDATE `KIT202_product` SET `Name`='$subname',`Price`='$subprice',`Description`='$subdesc' WHERE `ID`='$subid'";
        /*$sql="INSERT INTO `KIT202_product`(`ID`, `Name`, `Price`, `Description`) VALUES ($subid,'$subname',$subprice,'$subdesc')";*/
        $mysqli->query($sql);
      }
      
      
      $table="SELECT * FROM `KIT202_product`";
      $result=$mysqli->query($table);

      echo "<table>";
      echo "<tr><th>ID</th><th>Name</th><th>Price</th><th Description</th></tr>";
      while($row=$result->fetch_array(MYSQLI_ASSOC)) {

      	$id=$row['ID'];
      	$name=$row['Name'];
      	$price=$row['Price'];
      	$desc=$row['Description'];

      	echo "<tr>";
      	echo "<td>$id</td>";
      	echo "<td>$name</td>";
      	echo "<td>$price</td>";
      	echo "<td>$desc</td>";
      	echo "</tr>";
      }
      echo "</table>";
      ?>
        <form method="post" action="">
          ID:<input type="text" name="id"/><br/>
          Name:<input type="text" name="name"/><br/>
          Price:<input type="text" name="price"/><br/>
          Description:<input type="text" name="desc"/><br/>

          <input type="submit" name="update" value="update" />
          <input type="reset" value="reset"/>
        </form>

        <form action="./tute5_main.php">
          <input type="submit" name="back" value="Go back to Main">
        </form>
      </body>
</html>
