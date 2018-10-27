


<?php
if (isset($_POST['login']))
{
	require 'dbh.inc.php';
	$mail=$_POST['email'];

	$password=$_POST['password'];
	if(empty($mail) || empty($password))
	{
		echo "enter email & password";
		exit();
	}
	else
	{
		$sql="SELECT * FROM users WHERE email=?;";
		$stmt=mysqli_stmt_init($con);
		if (!mysqli_stmt_prepare($stmt,$sql))
		{
			header("location: index.php?error=sqlerror");
			exit();
		}
		else
		{
			mysqli_stmt_bind_param($stmt,"s",$mail);
			mysqli_stmt_execute($stmt);
			$r=mysqli_stmt_get_result($stmt);
			if($row=mysqli_fetch_assoc($r))
			{
				//$pc=false;
				echo "$password";
				$firstname=$row['first_name'];
				$verify=$row["password"];
				echo $verify."<br>";
				echo "<br>";
				$pc=0;

				//echo(password_verify($password,$verify)."<br>");
				$pc=password_verify($password,$verify);
				
				//echo $pc."<br>";
				if(!$pc)
				{
					echo 'error';
					echo $row['password'];
					echo "$password";
					//header("location:login.php?error=wrong password");
					//exit();
				}
				else 
				{
					session_start();
					$_SESSION['uid']=$row['id'];
					$_SESSION['email']=$row['email'];
					header("location:home.php?firstname=".$firstname);

					//exit();
				}
			}
			else
			{
				header("location:login.php?error=signup_first");
				//exit();
			}
		}
	}
}
else
{
	header("location: login.php");
}