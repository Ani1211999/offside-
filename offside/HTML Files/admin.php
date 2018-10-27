<?php

include_once 'connect.php';

?>



<!DOCTYPE html>
<html>
<head>
	<style>
		.header
		{
			height:10px;
		}
	</style>
	<title>Admin Page</title>
	<link rel="shortcut icon" href="../IMAGES/oglogo.png" type="image/png">
	<link rel="stylesheet" type="text/css" href="../CSS Files/admin.css">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
  <script type="text/javascript" src="mq.js"></script>
</head>
<body>
	<div class="container">
    
      <a class="burger_nav"></a>
      
    <div id="header-id">
		  <header>
			<div id="left-header">
				<a href="home.html"><img src="../IMAGES/oglogo.png" alt="Offside" width="50px" height="50px"></a>
			</div>
			<nav>
				<h2><i>OFFSIDE - ADMIN </i></h2>
			</nav> 
			<div style="clear:both"></div>
		</header>

	</div>

	<div class="actions">
		
		<ul id="ul5">
			<h2>ACTIONS</h2>
			<li><a href="#">UPDATE NEWS</a></li>
			<li><a href="#">ADD SNIPPETS</a></li>
			<li><a href="#">ADD VIDEOS</a></li>
			<li><a href="#">UPDATE FIXTURES</a></li>
			<li><a href="#">UPDATE STATISTICS</a></li>
		</ul>
	</div>
	<div class="admin_window">
	<div class="admin_user">
		<h1>CREATE/EDIT Admin User </h1>

		<form action="admin_signup.php" method="POST">
			<input type="text" name="username" placeholder="Username"><br>
			<input type="email" name="email" placeholder="Email-id"><br>
			<input type="password" name="password" placeholder="Password"><br>
			<button type="submit" name="submit">Save User</button>
		</form>


	</div>

	<?php 	$sql="SELECT * FROM admin_user";
			$result=mysqli_query($conn,$sql);
		?>
			<div class="users">

			<?php while($row = mysqli_fetch_assoc($result))
			{

				?>
				<table>
					<th>ID</th>					
					<th colspan="3">Admin</th>
					<th>Action</th>
						
					<tr>
						<td><?php
						
								echo $row['uid'];
								
							
						?>	</td>
						<td colspan="3"><?php 
							
								echo $row['uname'];
						?> </td>
						<td>Action</td>
					</tr>

					<tr>
						<td>2</td>
						<td colspan="3"><?php 
							$sql="SELECT uname from admin_user where uid=2;";
							$result = mysqli_query($conn,$sql);
							$resultCheck = mysqli_num_rows($result);

							if ($resultCheck > 0) {
								
								if ($row = mysqli_fetch_assoc($result)) {
									
									echo $row['uname'];
								}
							}
						?></td>
						<td>Action</td>
					</tr>

					<tr>
						<td>3</td>
						<td colspan="3"><?php 
							$sql="SELECT uname from admin_user where uid=3;";
							$result = mysqli_query($conn,$sql);
							$resultCheck = mysqli_num_rows($result);

							if ($resultCheck > 0) {
								
								if ($row = mysqli_fetch_assoc($result)) {
									
									echo $row['uname'];
								}
							}
						?></td>
						<td>Action</td>
					</tr>

					

				</table>

			<?php } ?>
			</div>
	</div>


   </div>