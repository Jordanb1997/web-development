<!DOCTYPE html>
<?php
    //this file contains the functionality for a cafe
    //edit and delete and submit items and orders
    include('db_conn.php');
?>
<html>
	<head>
        <title>Y.E.O.M, Your Excellent On-time Meals</title>
        <link rel="stylesheet" type="text/css" href="styles/main.css">
        <link rel="stylesheet" type="text/css" href="styles/menus.css">
	</head>
    <body>
        <!--page nav bar-->
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
        <!--restaurant name and times-->
        <div id="headtime">
            <h2>Refectory</h2>
            <p>Opening and Closing Times: Monday-Friday 8.30 am - 2.30 pm</p>
        </div>
        <br>
        <!--menu beverage list-->
        <div id="menu">
            <table id="ref">
            <?php

                //printing out the table from db
                $table="SELECT * FROM `menu_ref`";
                $result=$mysqli->query($table);
                //print the table titles
                echo "<tr>
                <th></th>
                <th>ID</th>
                <th>Item</th>
                <th>Price</th>
                </tr>";
                //loop for printing
                while($row=mysqli_fetch_array($result))
                {
                    //set each column to a variable
                    $id=$row['item_id'];
                    $name=$row['item_name'];
                    $price=$row['item_price'];
                
                    //make a row
                    echo "<tr>";
                    echo "<td><input type='checkbox' value".$id."></td>";
                    echo "<td>$id</td>";
                    echo "<td>$name</td>";
                    echo "<td>$price</td>";
                    echo "</tr>";
                }
            ?>
        </table>
        </div>
    </body>
</html>