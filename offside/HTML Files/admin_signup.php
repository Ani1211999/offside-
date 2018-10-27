<?php

if (isset($_POST['submit'])) {
	
	include_once 'connect.php';

	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);

	//Error Handling

	if (empty($username) || empty($email) || empty($password)) {
		
		header("Location: ../admin.php?signup=empty ");
		exit();
	}
	else
	{
		//CHeck if input statement are valid
		if (!preg_match("/^[a-zA-Z]*$/", $username) || !preg_match("/^[a-zA-Z]*$/", $password)) {
			
			header("Location: ../admin.php?signup=invalid ");
			exit();

		} else {
			//CHeck if email is valid

			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				
				header("Location: ../admin.php?signup=invalidemail ");
				exit();
			} else {

				//Hashing the password
				$hashed_pwd = password_hash($password, PASSWORD_DEFAULT );

				//Insert the user into the database
				$sql = "INSERT INTO admin_user(uname,admin_email,pname) VALUES ('$username','$email','$hashed_pwd');"; 

				$result= mysqli_query($conn, $sql);

				header("Location: ../HTML Files/admin.php?signup=success ");
				exit();
			}
		}
	}
}
else
{
	header("Location: ../admin.php ");
	exit();
}