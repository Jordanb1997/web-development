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

      // Better to change variable name here and add formatting
      $table="SELECT * FROM `master_menu`";
      $result=$mysqli->query($table);
      
      echo "<table>";
      echo "<tr><th>Name</th><th>Price</th></tr>";
      while($row=$result->fetch_array(MYSQLI_ASSOC)) {
      	$name=$row['item_name'];
      	$price=$row['item_price'];
      	echo "<tr>";
      	echo "<td>$name</td>";
      	echo "<td>$price</td>";
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
