<!DOCTYPE html>
<?php/*
    //this page is the master menu
    //this page is where a staff memeber can control the menus
    //a user can add or remove from the master menu or add to a restaurant menu
*/?>
<html>
	<head>
        <title>Y.E.O.M, Your Excellent On-time Meals</title>
        <link rel="stylesheet" type="text/css" href="styles/main.css">
        <link rel="stylesheet" type="text/css" href="styles/menus.css">
	</head>
    <body>
        <?php
            include('db_conn.php');
        
            //adding an item to the master menu
            if($_POST['add_master'])
            {
                // Put in variables to ensure there was nothing wrong with query format
                
                $subname=$_POST['item'];
                $subprice=$_POST['price'];

                //insert to db
                $sql="INSERT INTO `master_menu`(`item_name`, `item_price`) VALUES ('$subname','$subprice')";
                $mysqli->query($sql);
            }
        
            
            //gets data from selected items
            if($_POST['check'])
            {
                //get the selected item
                $selected_item="SELECT FROM `master_menu` WHERE item_id ='$id' ";
                $menu_item=$mysqli->query($selected_item);
                $mi=mysqli_fetch_array($result);
                //make data in table accessible
                $new_name=$mi['item_name'];
                $new_price=$mi['item_price'];
            }
        
            //add to selected menu based on radio button selection when button is pressed
           if($_POST['submit_menu']) // this is the problem 
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
                    echo "menu has been added";
                }
                if($selected=='ref')
                {
                    //inert to table
                    $menu = "INSERT INTO `menu_ref`(`item_name`,`item_price`) VALUES ('$new_name','$new_price')";
                    $mysqli->query($menu);
                    echo "menu has been added";
                }
                if($selected=='walk')
                {
                    //insert to table
                    $menu = "INSERT INTO `menu_walk`(`item_name`,`item_price`) VALUES ('$new_name','$new_price')";
                    $mysqli->query($menu);
                    echo "menu has been added";
                }
                if($selected=='grove')
                {
                    //insert to table
                    $menu = "INSERT INTO `menu_grove`(`item_name`,`item_price`) VALUES ('$new_name','$new_price')";
                    $mysqli->query($menu);
                    echo "menu has been added";
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
            <p>Add A New Item</p>
            <form id="newrow" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <label>Item Name</label>
                <input id="item" type="text" />
                <label>Item price</label>
                <input id="price" type="text" />
                <input type="submit"  name="add_master" value="add" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" />
            </form>
            <!--user selects a restaurant-->
            <div id="choice">
                <p>Select a Restaurant</p>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <input type="radio" name="select" value="laz">Lazenby's
                    <input type="radio" name="select" value="trade">The Trade Table
                    <input type="radio" name="select" value="ref">The Ref
                    <input type="radio" name="select" value="walk">The Walk
                    <input type="radio" name="select" value="grove">The Grove
                    <input type="submit" id="submit_menu" name="select_menu" value="Add to Menu" />
                </form>
            </div>
        </div>
        <!--master table for beverages-->
        <!--checkboxes are used to assign an item to a menu-->
        <div id="mastermenu">
            <table id="master">
            <?php
                //printing out the table from db
                $table="SELECT * FROM `master_menu`";
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
                
                    //make a row and put data in
                    echo "<tr>";
                    echo "<td><input type='checkbox' id='check' name='check' value".$id."></td>";
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