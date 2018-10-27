<?php
	$var1=$_GET['team'];
	#include the dbconnection file in the php
	$conn = mysqli_connect("localhost","root","","offside");
	

	/*foreach($var1 as $rows1)
	{*/
		$query="Select t_name from teams where l_name = '".$var1."' order by t_name;";
		$result=mysqli_query($conn,$query);
		
		if($result)
		{
			while($rows=mysqli_fetch_assoc($result))
			{
				$team_name=$rows['t_name'];
				$team_name=strtoupper($team_name);
				echo "<option>".$team_name."</option>";
			}
		}
		else
		{
			echo mysqli_error($conn);
		}
		


	/*}*/
	
	mysqli_close($conn);
?>
