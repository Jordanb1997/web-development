<!DOCTYPE html>
<html>
  <body>
    <center>
      <h2>Search Product Details</h2>
    </center>
    <?php
      include('db_conn.php');
      
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
        <br>
        <form method="post" action="">
          ID:<input type="text" name="id"/><br/>
          <input type="submit" name="search" value="search" />
          <input type="reset" value="reset"/>
        </form>

        <form action="./tute5_main.php">
          <input type="submit" name="back" value="Go back to Main">
        </form><br><br>
        <?php
          include('db_conn.php');

          if($_POST['search']){
            $subid=$_POST['id'];
            $subname=$_POST['name'];
            $subprice=$_POST['price'];
            $subdesc=$_POST['desc'];
            $sql="SELECT * FROM `KIT202_product` WHERE `ID`='$subid'";
            $mysqli->query($sql);
          }

         
          $table="SELECT * FROM `KIT202_product`  WHERE `ID` = '$subid'";
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
        
        
      </body>
</html>
