<?php
	//include the file session.php
	include("session.php");
	//include the file db_conn.php
	include("db_conn.php");

	//receive the username data from the form (in signin_form.php)
	$login_email=$_POST['email'];
	//receive the password data from the form (in signin_form.php)
	$password=$_POST['password'];

	//query to check whether username is in the table (check whether the user has been signed up)
	$query = "SELECT * FROM menu_users WHERE email='$login_email'";
	//execute query to the database and retrieve the result ($result)
	$result = $mysqli->query($query);

	//convert the result to array (the key of the array will be the column names of the table)
	$row=$result->fetch_array(MYSQLI_ASSOC);

	//if the username from table is not same as the username data from the form(from signin_form.php)
	if($row['email']!=$login_email || $login_email=="")
	{
		//automatically go back to signin_form and pass the error message
		header('Location: ./mainpage.php?error=invalid_username');
	}
	//if the username is same as the username data from the form(from signin_form.php) 
	else {
	//if the password from table is same as the password data from the form(from signin_form.php)
	if($row['password']==$password) {
		//save the username in the session
		$session_user=$row['username'];
		$_SESSION['session_user']=$session_user;
		//automatically go to signin_success.php
		header('Location: ./userpage.php');

	}//if the password from table does not match with the password data from the signin form
	else{

		//automatically go back to signin_form and pass the error message
		header('Location: ./mainpage.php?error=invalid_password');
	}
	}
?>