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


			<div class="users">
				<table>
					<th>Sr.No</th>					
					<th colspan="3">Admin</th>
					<th>Action</th>
						
					<tr>
						<td>1</td>
						<td colspan="3">Admin 1 </td>
						<td>Action</td>
					</tr>

					<tr>
						<td>2</td>
						<td colspan="3">Admin 2 </td>
						<td>Action</td>
					</tr>

					<tr>
						<td>3</td>
						<td colspan="3">Admin 3 </td>
						<td>Action</td>
					</tr>

					

				</table>
			</div>
	</div>


   </div>