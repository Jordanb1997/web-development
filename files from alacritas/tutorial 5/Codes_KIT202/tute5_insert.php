<!DOCTYPE html>
<html>
  <body>
    <center>
      <h2>Insert Product Details</h2> <!--<hr> -->
    </center>
        <!--- close below </body> -->
        <!-- leave open </html> -->
    <?php
      include('db_conn.php'); //db connection <--- CHECK FILE NAME

      if($_POST['insert']){
        // Put in variables to ensure there was nothing wrong with query format
      	$subid=$_POST['id'];
      	$subname=$_POST['name'];
      	$subprice=$_POST['price'];
      	$subdesc=$_POST['desc'];

        // CHECK NAMES OF COLUMNS IN DATABASE -> Check they are not misspelt
        $sql="INSERT INTO `KIT202_product`(`ID`, `Name`, `Price`, `Description`) VALUES ($subid,'$subname',$subprice,'$subdesc')";
        $mysqli->query($sql);
      }
      // Better to change variable name here and add formatting
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

          <input type="submit" name="insert" value="insert" />
          <input type="reset" value="reset"/>
        </form>

        <!--Back to main menu -->
        <form action="./tute5_main.php">
          <input type="submit" name="back" value="Go back to Main">
        </form>
      </body>
</html>
