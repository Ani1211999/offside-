<?php

if (isset($_POST["submit-form"]))
{
	require 'dbh.inc.php';
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$passwordre=$_POST['password-repeat'];
	$league=$_POST['league'];
	$team=$_POST['team'];
	if (!filter_var($email,FILTER_VALIDATE_EMAIL))
	{
		header("location:signup.php?error=invalidemail&firtsname=".$firstname."&lastname=".$lastname);
		exit();

	}
	else if($password !== $passwordre)
	{
		/*header("location:signup.php?error=passwordcheckfirstname=".$username,"&mail=".$email);
		exit();*/
		echo "password not matching";
	} 
	else
	{
		$sql="select email from users where email=?";
		$stmt=mysqli_stmt_init($con);
		if(!mysqli_stmt_prepare($stmt,$sql)){
			header("location:signup.php?error=sqlerror");
			exit();
		}
		else {
			mysqli_stmt_bind_param($stmt,"s",$email);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$rc=mysqli_stmt_num_rows($stmt);
			if($rc>0){
				header("location:signup.php?error=emailtaken".$email);
				exit();
		
			}
		
		
		 
		else
		{
			$sql="INSERT INTO  users(first_name,last_name,email,password,fav_league,fav_team)  VALUES(?,?,?,?,?,?)";
			$stmt=mysqli_stmt_init($con);
			if(!mysqli_stmt_prepare($stmt,$sql)){
				header("location:signup.php?error=sqlerror");
				exit();
			}
			else{
				$hp= password_hash($password,PASSWORD_DEFAULT);
			mysqli_stmt_bind_param($stmt,"ssssss",$firstname,$lastname,$email,$hp,$league,$team);
			mysqli_stmt_execute($stmt);
			header("location:login.php?sigunpsuccess");
			exit();
			}
		}
		if(isset($_SESSION['id']))
		{
			echo " congratulations u r logged in";
		}
	}
}
mysqli_stmt_close($stmt);
mysqli_close($con);
}
else
{
	header("location:signup.php");
	exit();
}
