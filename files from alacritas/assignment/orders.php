<!DOCTYPE html>
<?php
    //contains the current orders
    //can be filtered by restaurant
    include('db_conn.php');
?>
<html>
	<head>
        <title>Y.E.O.M, Your Excellent On-time Meals</title>
        <!--the main style sheet-->
        <link rel="stylesheet" type="text/css" href="styles/main.css">
        <!-- menu table css-->
        <link rel="stylesheet" type="text/css" href="styles/menus.css">
	</head>
        <body>
        <?php
            include('db_conn.php');
            
            //show orders by selected menu
            if($_POST['add_to'])
            {
                //variable to hold selected radio button
                $selected=$_POST['select'];
                
                //control structure to send query based on radio button
                if($selected=='laz')
                {
                    //insert to table
                    $menu = "INSERT INTO `menu_laz`(`item_name`,`item_price`) VALUES ('$new_name','$new_price')";
                    $mysqli->query($menu);
                }
                if($selected=='trade')
                {
                    //insert to table
                    $menu = "INSERT INTO `menu_trade`(`item_name`,`item_price`) VALUES ('$new_name','$new_price')";
                    $mysqli->query($menu);
                }
                if($selected=='ref')
                {
                    //inert to table
                    $menu = "INSERT INTO `menu_ref`(`item_name`,`item_price`) VALUES ('$new_name','$new_price')";
                    $mysqli->query($menu);
                }
                if($selected=='walk')
                {
                    //insert to table
                    $menu = "INSERT INTO `menu_walk`(`item_name`,`item_price`) VALUES ('$new_name','$new_price')";
                    $mysqli->query($menu);
                }
                if($selected=='grove')
                {
                    //insert to table
                    $menu = "INSERT INTO `menu_grove`(`item_name`,`item_price`) VALUES ('$new_name','$new_price')";
                    $mysqli->query($menu);
                }
            }
        ?>
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
        <br><br>
        <!--collecting input to add to table-->
        <div id="management">
            <!--user selects a restaurant-->
            <div id="choice">
                <p>Select a Restaurant</p>
                <input type="radio" name="select" value="laz">Lazenby's
                <input type="radio" name="select" value="trade">The Trade Table
                <input type="radio" name="select" value="ref">The Ref
                <input type="radio" name="select" value="walk">The Walk
                <input type="radio" name="select" value="grove">The Grove
            </div>
        </div>
        <!--master table for beverages-->
        <!--checkboxes are used to assign an item to a menu-->
        <div id="mastermenu">
            <table id="master">
            <?php
                //printing out the table from db
                $table="SELECT * FROM `user_order`";
                $result=$mysqli->query($table);
                //print the table titles
                echo "<tr>
                <th>order id</th>
                <th>cafe name</th>
                <th>user id</th>
                <th>name</th>
                <th>price</th>
                <th>comment</th>
                </tr>";
                //loop for printing
                while($row=mysqli_fetch_array($result))
                {
                    //set each column to a variable                    
                    $id=$row['order_id'];
                    $cafe=$row['cafe_name'];
                    $user=$row['user_identifier'];
                    $item=$row['item_name'];
                    $price=$row['item_price'];
                    $comment=$row['item_comment'];

                    //make a row and put data in
                    echo "<tr>";
                    echo "<td>$id</td>";
                    echo "<td>$cafe</td>";
                    echo "<td>$user</td>";
                    echo "<td>$item</td>";
                    echo "<td>$price</td>";
                    echo "<td>$comment</td>";
                    echo "</tr>";
                }
            ?>
            </table>
        </div>
    </body>
</html>