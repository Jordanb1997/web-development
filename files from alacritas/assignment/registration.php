<!DOCTYPE html>
<?php
    //this page contains the registration
    //registration takes email, name, id, password, phone number and credit card information
    //then validates this information
?>

<html>
	<head>
        <title>Y.E.O.M, Your Excellent On-time Meals</title>
        <link rel="stylesheet" type="text/css" href="styles/main.css">
        <link rel="stylesheet" type="text/css" href="styles/registration.css">
        <!--validation script-->
        <script
        src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
        </script>
        <script>src="jquery.validate.js"</script>
        <script>
        //validating registration
        function validate_reg(){
            //validate name
            if ($("#name").val()==""){
                alert("Enter full name.");
                return false;
            //valid staff/student id
            }else if ($("#stid").val()==""){
                alert("Enter student/staff ID");
               return false;
            //validate email
            }else if ($("#email").val()==""){
                alert("Enter e-mail");
               return false;
            //validate phone number
            }else if ($("#phonenumber").val()==""){
                alert("Enter phone number");
               return false;
            //alidate password
            }else if ($("#password").val()==""){
                alert("Please enter password");
                return false;
            //validate password restriction//it doesnt work
            }else if ($("#password").val()==""){
                alert("password must contain atleast: 1 uppercase and lowercase letter, 6-12 characters long and contain one special character, ~!#$");
                return false;
            //valid password confiration
            }else if ($("#confirm_password").val()==""){
                alert("Please retype password");
                return false;
            //check if passwords match
            }else if ($("#password").val() != $("#confirm_password").val()){
                alert("Please retype password");
               return false;
            //validate card number
            }else if ($("#cardnumber").val()==""){
                alert("Enter credit card information");
               return false;
            } 
        }
        </script>
	</head>
    <body>
        <?php
            include('db_conn.php');
            if($_POST['submit'])
            {
            //make sure there are no errors with input
            $subname = $_POST['name'];
            $substid = $_POST['stid'];
            $subemail = $_POST['email'];
            $subphone = $_POST['phonenumber'];
            $subpass = $_POST['password'];
            $subcardname = $_POST['cardname'];
            $subcardnum = $_POST['cardnumber'];
            $subcardexp = $_POST['cardexp'];
            $subcardsec = $_POST['cardsec'];
            $US = 'US'; 

            //check for pre existing user
            $check = "SELECT * FROM menu_users WHERE id_number=$substid";

            $result = $mysqli->query($check);

            //insert the new user
            $user = "INSERT INTO `menu_users`(`letter_id`,`fullname`,`id_number`,`email`,`phone_number`,`password`,`card_name`,`card_number`,`card_expiry`,`card_security`) VALUES ('$US','$subname','$substid','$subemail','$subphone','$subpass','$subcardname','$subcardnum','$subcardexp','$subcardsec')";

            $mysqli->query($user);
            //this line is meant to return to main page if registration is successful
            /*header('Location: mainpage.php');*/
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
        <!--this is the registration form-->
        <div id="regform">  
            <form id="registerform" method="post" onsubmit="return validate_reg();" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
                <fieldset>
                    <legend>Enter Registration Details</legend>
                    <!--get name-->
                    <p>
                        <label for="name">Full Name</label>
                        <input id="name" name="name" />
                    </p>
                    <!--get student/staff id-->
                    <p>
                        <label for="stid">Student/Staff ID</label>
                        <input id="stid" type="text" name="stid" />
                    </p>
                    <!--get email-->
                    <p>
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" />
                    </p>
                    <!--get phone number-->
                    <p>
                        <label for="phonenumber">Phone Number</label>
                        <input id="phonenumber" type="text" name="phonenumber" />
                    </p>
                    <!--get password and make sure it is valid-->
                    <p>
                        <label for="password">Password</label>
                        <input id="password" type="password" name="password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[~!#$]).{6,12}">
                    </p>
                    <!--confirm password-->
                    <p>
                        <label for="confirm_password">confirm password</label>
                        <input id="confirm_password" type="password" name="confirm_password">
                    </p>
                    <!--get name on card-->
                    <p>
                        <label for="cardname">Card Name</label>
                        <input id="cardname" type="text" name="cardname">
                    </p>
                    <!--get card number-->
                    <p>
                        <label for="cardnumber">Card Number</label>
                        <input id="cardnumber" type="text" name="cardnumber">
                    </p>
                    <!--get expiry date-->
                    <p>
                        <label for="cardexp">Expiry Date</label>
                        <input id="cardexp" type="text" name="cardexp">
                    </p>
                    <!-- get security number-->
                    <p>
                        <label for="cardsec">Security Number</label>
                        <input id="cardsec" type="text" name="cardsec">
                    </p>
                    <!--password requirements-->
                    Passwords have these requirements:
                    <ul>
                    <li>6-12 characters in length</li>
                    <li>atleast 1 lowercase letter</li>
                    <li>atleast one capital letter</li>
                    <li>atleast 1 number</li>
                    <li>one of these special characters: ~!#$</li>
                    </ul>
                    <!--submit form-->
                    <p>
                        <input type="submit" value="register" id="submit" method="post">
                         
                    </p>

                </fieldset>
            </form>
        </div>
    </body>
</html>
