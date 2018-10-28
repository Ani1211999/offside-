<?php
 if(isset($_GET['league_id'])){ 


$conn=mysqli_connect('localhost','root','','offside');
$query = "Select * from league where l_id=".$_GET['league_id'];
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result)>0){ $leaguedetail = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="../IMAGES/oglogo.png" type="image/png">
	<!--<link rel="stylesheet" type="text/css" href="../CSS Files/style_home.css">-->
	<link rel="stylesheet" type="text/css" href="../CSS Files/style_league.css">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
	<script type="text/javascript">
		function openmodal(id)
        {
          document.getElementById(id).style.display="flex";
        }
        function closeModal(id) {

          // body...
          document.getElementById(id).style.display="none";
        }
	</script>
	<title><?php echo $leaguedetail['l_name'];
	$lname=$leaguedetail['l_name'];?></title>
  </head> 
 <body id='league_page'>
 	<div class="container">
     <div id="header-id">
		  <header>
			<div id="left-header">
				<a href="home.php"><img src="../IMAGES/oglogo.png" alt="Offside" width="50px" height="50px"></a>
			</div>
   
    <div class="top_nav">
			<nav>
				<ul id="ul1">
          <?php
            $query1="Select l_id,l_name from league where l_name='premier league'";
            $result=mysqli_query($conn,$query1);
            $lid_details=mysqli_fetch_row($result);
            $link='http://localhost:8080/Offside(vishwa)/offside/HTML%20Files/league.php?league_id='.$lid_details[0];
              
          ?>
            
          
					<li class="hoverWrapper">
          <a href= <?php echo $link ?>>PREMIER LEAGUE</a>
                       <div id="hoverShow1">
                       	<table class="teams">
                       	<tr><th>Premier League Clubs</th></tr><br>
                       	<div id="plclubs">
                          <?php
                            $query = "Select t_name, t_id from teams where l_name='premier league'";
                            $result=mysqli_query($conn,$query);
                            $row_count=mysqli_num_rows($result);

                            $count=2;
                            
                            while($row1=mysqli_fetch_assoc($result)){
                              $link = "http://localhost:8080/Offside(vishwa)/offside/HTML%20Files/team.php?team_id=".$row1['t_id']; 
                              if($count>0)
                              {
                                echo '<td><a href="'.$link.'">'.$row1['t_name'].'</td>';
                                $count--;
                              }
                              else
                              {   
                                echo '<td><a href="'.$link.'">'.$row1['t_name'].'</td>';
                                echo "</tr>";
                                $count=2;
                                echo "<tr>";
                              }
                              
                            }
                            
                          ?>

                       	
                       	</div>
                       	</table>
                       </div>
					</li>
					<li class="hoverWrapper2"><a href="league.php?league_id=3">LA LIGA</a>
						<div id="hoverShow2">
						<table class="teams">
              
                       	<tr><th>La Liga Clubs</th></tr><br>
                       	<div id="laligaclubs">

                       		<?php
                            $query="Select t_id,t_name from teams where l_name='la-liga'";
                            $result=mysqli_query($conn,$query);
                            while($row1=mysqli_fetch_assoc($result))
                            {
                              $link = "http://localhost:8080/Offside(vishwa)/offside/HTML%20Files/team.php?team_id=".$row1['t_id']; 
                                        
                             echo '<tr><td><a href="'.$link.'">'.$row1['t_name'].'</td></tr>';
                                        
                            }
                          ?>
                       	</div>
                       </table>
						</div>	
					</li>
					<li class="hoverWrapper3"><a href="league.php?league_id=2">BUNDESLIGA</a>
						<div id="hoverShow3">
						<table class='teams'>
                       			<tr><th>Bundesliga Clubs</th></tr><br>
                       	<div id="bundesligaclubs">

                       		<?php
                            $query="Select t_name,t_id from teams where l_name='bundesliga'";
                            $result=mysqli_query($conn,$query);
                            while($row1=mysqli_fetch_assoc($result))
                            {
                              $link = "http://localhost:8080/Offside(vishwa)/offside/HTML%20Files/team.php?team_id=".$row1['t_id']; 
                                        
                             echo '<tr><td><a href="'.$link.'">'.$row1['t_name'].'</td></tr>';
                                        
                            }
                          ?>
                       	</div>
                       </table>
						</div>	
					</li>
					<li class="hoverWrapper4"><a href="league.php?league_id=4">SERIE A</a>
						<div id="hoverShow4">
						<table class="teams">
                       			<tr><th>Serie-A Clubs</th></tr><br>
                       	<div id="seriaAclubs">

                       		<?php
                            $query="Select t_name,t_id from teams where l_name='serie a'";
                            $result=mysqli_query($conn,$query);
                            while($row1=mysqli_fetch_assoc($result))
                            {
                              $link = "http://localhost:8080/Offside(vishwa)/offside/HTML%20Files/team.php?team_id=".$row1['t_id']; 
                                        
                             echo '<tr><td><a href="'.$link.'">'.$row1['t_name'].'</td></tr>';
                                        
                            }
                          ?>
                       	</div>
                       </table>
						</div>
					</li>
					<li class="hoverWrapper5"><a href="league.php?league_id=5">LIGUE 1</a>
						<div id="hoverShow5">
						<table class='teams'>
                       	<tr><th>Ligue-1 Clubs</th></tr><br>
                       	<div id="ligue1clubs">
                          <?php
                            $query="Select t_name,t_id from teams where l_name='ligue 1'";
                            $result=mysqli_query($conn,$query);
                            while($row1=mysqli_fetch_assoc($result))
                            {
                              $link = "http://localhost:8080/Offside(vishwa)/offside/HTML%20Files/team.php?team_id=".$row1['t_id']; 
                                        
                             echo '<tr><td><a href="'.$link.'">'.$row1['t_name'].'</td></tr>';
                                        
                            }
                          ?>
                       		
                       	</div>
                       </table>
						</div>
					</li>
          <?php

            /*if($_SESSION['uid'])
            {
              $query="Select fav_team from users where first_name=".$_GET['firstname'].";";
              $result=mysqli_query($conn,$query);
              if($result)
              {
                $fin=mysqli_fetch_row($result);
                $favteam=$fin[0];
              }
              echo "<li><a href=#>Welcome ".$_GET['firstname']."</a></li>";
            }*/
          
          /*else
          {*/
            echo "<li ><a href='login.php'>LOGIN</a></li>";
          //}
          ?>
					
					<li ><a href="signup.php">SIGNUP</a></li>
				</ul>
        
        <a class="burger_nav"></a>
			</nav>
		</div>
      <div style="clear:both"></div>
      
    </header>
  </div>

  <main>
  	<section>
  		<div class=leaguedetail>
  			<h2 color="black" align='center'><?php echo $leaguedetail['l_name'];?><hr></h2>
  			<h3 align="center">LOGO</h3>
  			<?php
  			 if($_GET['league_id']==1)
  			 {
  			 	echo "<img src='../IMAGES/league logos/pl.png' width='35%' height='35%'>";
  			 	echo "</img>";
  			 	echo "<hr>";
  				echo"<strong>League Nationality</strong>:England";
  				echo "<hr>";
  				echo"<strong>Current Season-</strong>";
  				$uri = 'http://api.football-data.org/v2/competitions/2021';
  				$reqPrefs['http']['method'] = 'GET';
                $reqPrefs['http']['header'] = 'X-Auth-Token: 9fc4e444434c487db0748b4e118a3930';
                $stream_context = stream_context_create($reqPrefs);
                $response = file_get_contents($uri, false, $stream_context);
                $details = json_decode($response,true);
                echo substr($details['currentSeason']['startDate'], 0,4);
                echo"-";
                echo substr($details['currentSeason']['endDate'], 0,4);
                echo "<hr>";
                echo "<strong>Current MatchDay:-</strong>".$details['currentSeason']['currentMatchday']."<hr>";
                echo "<strong>Season Ends-</strong>".$details['currentSeason']['endDate']."<hr>";
  			 }
  			 elseif($_GET['league_id']==2)
  			 {
  			 	echo "<img src='../IMAGES/league logos/bundesliga.png' width='35%' height='35%'>";
  			 	echo "</img>";
  			 	echo "<hr>";
  				echo"<strong>League Nationality</strong>:Germany";
  				echo "<hr>";
  				echo"<strong>Current Season-</strong>";
  				$uri = 'http://api.football-data.org/v2/competitions/2002';
  				$reqPrefs['http']['method'] = 'GET';
                $reqPrefs['http']['header'] = 'X-Auth-Token: 9fc4e444434c487db0748b4e118a3930';
                $stream_context = stream_context_create($reqPrefs);
                $response = file_get_contents($uri, false, $stream_context);
                $details = json_decode($response,true);
                echo substr($details['currentSeason']['startDate'], 0,4);
                echo"-";
                echo substr($details['currentSeason']['endDate'], 0,4);
                echo "<hr>";
                echo "<strong>Current MatchDay:-</strong>".$details['currentSeason']['currentMatchday']."<hr>";
                echo "<strong>Season Ends-</strong>".$details['currentSeason']['endDate']."<hr>";
  			 }
  			 elseif($_GET['league_id']==3)
  			 {
  			 	echo "<img src='../IMAGES/league logos/laliga.jpg' width='35%' height='35%'>";
  			 	echo "</img>";
  			 	echo "<hr>";
  				echo"<strong>League Nationality</strong>:Spain";
  				echo "<hr>";
  				echo"<strong>Current Season-</strong>";
  				$uri = 'http://api.football-data.org/v2/competitions/2014';
  				$reqPrefs['http']['method'] = 'GET';
                $reqPrefs['http']['header'] = 'X-Auth-Token: 9fc4e444434c487db0748b4e118a3930';
                $stream_context = stream_context_create($reqPrefs);
                $response = file_get_contents($uri, false, $stream_context);
                $details = json_decode($response,true);
                echo substr($details['currentSeason']['startDate'], 0,4);
                echo"-";
                echo substr($details['currentSeason']['endDate'], 0,4);
                echo "<hr>";
                echo "<strong>Current MatchDay:-</strong>".$details['currentSeason']['currentMatchday']."<hr>";
                echo "<strong>Season Ends-</strong>".$details['currentSeason']['endDate']."<hr>";
  			 }
  			 elseif($_GET['league_id']==4)
  			 {
  			 	echo "<img src='../IMAGES/league logos/serie-a.jpg' width='35%' height='35%'>";
  			 	echo "</img>";
  			 	echo "<hr>";
  				echo"<strong>League Nationality</strong>:Italy";
  				echo "<hr>";
  				echo"<strong>Current Season-</strong>";
  				$uri = 'http://api.football-data.org/v2/competitions/2019';
  				$reqPrefs['http']['method'] = 'GET';
                $reqPrefs['http']['header'] = 'X-Auth-Token: 9fc4e444434c487db0748b4e118a3930';
                $stream_context = stream_context_create($reqPrefs);
                $response = file_get_contents($uri, false, $stream_context);
                $details = json_decode($response,true);
                echo substr($details['currentSeason']['startDate'], 0,4);
                echo"-";
                echo substr($details['currentSeason']['endDate'], 0,4);
                echo "<hr>";
                echo "<strong>Current MatchDay:-</strong>".$details['currentSeason']['currentMatchday']."<hr>";
                echo "<strong>Season Ends-</strong>".$details['currentSeason']['endDate']."<hr>";
  			 }
  			 else
  			 {
  			 	echo "<img src='../IMAGES/league logos/ligue-1.jpg' width='35%' height='35%'>";
  			 	echo "</img>";
  			 	echo "<hr>";
  				echo"<strong>League Nationality</strong>:France";
  				echo "<hr>";
  				echo"<strong>Current Season-</strong>";
  				$uri = 'http://api.football-data.org/v2/competitions/2015';
  				$reqPrefs['http']['method'] = 'GET';
                $reqPrefs['http']['header'] = 'X-Auth-Token: 9fc4e444434c487db0748b4e118a3930';
                $stream_context = stream_context_create($reqPrefs);
                $response = file_get_contents($uri, false, $stream_context);
                $details = json_decode($response,true);
                echo substr($details['currentSeason']['startDate'], 0,4);
                echo"-";
                echo substr($details['currentSeason']['endDate'], 0,4);
                echo "<hr>";
                echo "<strong>Current MatchDay:-</strong>".$details['currentSeason']['currentMatchday']."<hr>";
                echo "<strong>Season Ends-</strong>".$details['currentSeason']['endDate']."<hr>";
  			 }

  			?>
  		</div>
  			<div class="standings">
  				<?php
                  
                    if($lname=='premier league')
                    {
                      $uri = 'http://api.football-data.org/v2/competitions/2021/standings';
                    }
                    elseif($lname=='la-liga')
                    {
                      $uri = 'http://api.football-data.org/v2/competitions/2014/standings';
                    }
                    elseif ($lname=='bundesliga') {
                      # code...
                      $uri = 'http://api.football-data.org/v2/competitions/2002/standings';
                    }
                    elseif($lname=='serie a')
                    {
                      $uri = 'http://api.football-data.org/v2/competitions/2019/standings';
                    }
                    else
                    {
                      $uri = 'http://api.football-data.org/v2/competitions/2015/standings';
                    }
                    $reqPrefs['http']['method'] = 'GET';
                    $reqPrefs['http']['header'] = 'X-Auth-Token: 9fc4e444434c487db0748b4e118a3930';
                    $stream_context = stream_context_create($reqPrefs);
                    $response = file_get_contents($uri, false, $stream_context);
                    $matches = json_decode($response,true);
                  ?>
                  <table id="ptable">
        		  <div><h2 align='center' id="stand">STANDINGS</h2></div>
        		  <div><button onclick="openmodal('id01')">See Full Standings</button></div><br>
        		  <div style="clear: both">
        		  	
        		  </div>
                  <tr>
                    <th>Position</th>
                    <th>TeamName</th>
                    <th>Points</th>
                    <th>GA(Goals Against)</th>
                    <th>GD(Goals Difference)</th>
                  </tr>

                  <?php
                  for($i=0;$i<sizeof($matches['standings'][0]['table']);$i++)
                    {
                        if($i>8)
                        {
                        	echo "<style> display:none;</style>";
                        }
                        else if($i==0)
                        {
                        	echo"<tr style='background-color:rgb(0,204,0);color:white;'>";
	                        echo"<td >";
	                        print_r($matches['standings'][0]['table'][$i]["position"]);
	                        echo "</td>";
	                        echo "<td>";
	                        print_r($matches['standings'][0]['table'][$i]["team"]["name"]);
	                        echo "</td>";
	                        echo "<td>";
	                        print_r($matches['standings'][0]['table'][$i]["points"]);
	                        echo "</td>";
	                        echo"<td>";
	                        print_r($matches['standings'][0]['table'][$i]["goalsAgainst"]);
	                        echo"</td>";
	                        echo"<td>";
	                        print_r($matches['standings'][0]['table'][$i]["goalDifference"]);
	                        echo"</td>";
	                        echo "</tr>";

                        }
                        else
                        {
                        	echo"<tr>";
	                        echo"<td>";
	                        print_r($matches['standings'][0]['table'][$i]["position"]);
	                        echo "</td>";
	                        echo "<td>";
	                        print_r($matches['standings'][0]['table'][$i]["team"]["name"]);
	                        echo "</td>";
	                        echo "<td>";
	                        print_r($matches['standings'][0]['table'][$i]["points"]);
	                        echo "</td>";
	                        echo"<td>";
	                        print_r($matches['standings'][0]['table'][$i]["goalsAgainst"]);
	                        echo"</td>";
	                        echo"<td>";
	                        print_r($matches['standings'][0]['table'][$i]["goalDifference"]);
	                        echo"</td>";
	                        echo "</tr>";
                        }
                        
                    }
                   ?>
               </table>
  			</div>
  			<div style="clear: both;"></div>

  			<div id="id01">
  				<div id="standings_full">
  				<span class="closeBtn" onclick="closeModal('id01')">&times;</span>
  				<h2 align='center'>STANDINGS</h2>
                

  				 <table id="ptable">
  				 	<tr>
                    <th>Position</th>
                    <th>TeamName</th>
                    <th>Points</th>
                    <th>GA(Goals Against)</th>
                    <th>GD(Goals Difference)</th>
                  </tr>

                  <?php
                  	for($i=0;$i<sizeof($matches['standings'][0]['table']);$i++)
                    {
                    	if($i==0)
                        {
                        	echo"<tr style='background-color:rgb(0,204,0);color:white;'>";
	                        echo"<td >";
	                        print_r($matches['standings'][0]['table'][$i]["position"]);
	                        echo "</td>";
	                        echo "<td>";
	                        print_r($matches['standings'][0]['table'][$i]["team"]["name"]);
	                        echo "</td>";
	                        echo "<td>";
	                        print_r($matches['standings'][0]['table'][$i]["points"]);
	                        echo "</td>";
	                        echo"<td>";
	                        print_r($matches['standings'][0]['table'][$i]["goalsAgainst"]);
	                        echo"</td>";
	                        echo"<td>";
	                        print_r($matches['standings'][0]['table'][$i]["goalDifference"]);
	                        echo"</td>";
	                        echo "</tr>";
						}
						else if($i>=sizeof($matches['standings'][0]['table'])-3)
						{
							echo"<tr style='background-color:rgb(255,0,0);color:white;'>";
	                        echo"<td >";
	                        print_r($matches['standings'][0]['table'][$i]["position"]);
	                        echo "</td>";
	                        echo "<td>";
	                        print_r($matches['standings'][0]['table'][$i]["team"]["name"]);
	                        echo "</td>";
	                        echo "<td>";
	                        print_r($matches['standings'][0]['table'][$i]["points"]);
	                        echo "</td>";
	                        echo"<td>";
	                        print_r($matches['standings'][0]['table'][$i]["goalsAgainst"]);
	                        echo"</td>";
	                        echo"<td>";
	                        print_r($matches['standings'][0]['table'][$i]["goalDifference"]);
	                        echo"</td>";
	                        echo "</tr>";
						}
						else
						{
							echo"<tr>";
	                        echo"<td >";
	                        print_r($matches['standings'][0]['table'][$i]["position"]);
	                        echo "</td>";
	                        echo "<td>";
	                        print_r($matches['standings'][0]['table'][$i]["team"]["name"]);
	                        echo "</td>";
	                        echo "<td>";
	                        print_r($matches['standings'][0]['table'][$i]["points"]);
	                        echo "</td>";
	                        echo"<td>";
	                        print_r($matches['standings'][0]['table'][$i]["goalsAgainst"]);
	                        echo"</td>";
	                        echo"<td>";
	                        print_r($matches['standings'][0]['table'][$i]["goalDifference"]);
	                        echo"</td>";
	                        echo "</tr>";
						}
                    }
                ?>

  			</table>
  		</div>

  		</div>
  		<div class="topscorers">
			<h2 align="center">Top Scorers</h2>
			<?php
				if($_GET['league_id']==1)
				{
					$uri="http://api.football-data.org/v2/competitions/2021/scorers";
				}
				elseif($_GET['league_id']==2)
				{
					$uri="http://api.football-data.org/v2/competitions/2002/scorers";
				}
				elseif($_GET['league_id']==3)
				{
					$uri="http://api.football-data.org/v2/competitions/2014/scorers";
				}
				elseif($_GET['league_id']==4)
				{
					$uri="http://api.football-data.org/v2/competitions/2019/scorers";
				}
				else
				{
					$uri="http://api.football-data.org/v2/competitions/2015/scorers";
				}
		
			    $reqPrefs['http']['method'] = 'GET';
		        $reqPrefs['http']['header'] = 'X-Auth-Token:2d45bc97becc4e018dfaeed4aa44c081';
		        $stream_context = stream_context_create($reqPrefs);
		        $response = file_get_contents($uri, false, $stream_context);
		        $scorers = json_decode($response,true);
          ?>
          <hr>
          <!--<table id="scorert">-->
          	<?php
          		for($i=0;$i<sizeof($scorers['scorers']);$i++)
          		{
          			
          			echo "<strong>Player Name :</strong>".$scorers['scorers'][$i]['player']['name']."</br>";
          			echo "<strong>Club: </strong>".$scorers['scorers'][$i]['team']['name']."</br>";
          			echo "<strong>Goals Scored: </strong>".$scorers['scorers'][$i]['numberOfGoals']."</br>
          			";
          			echo "<hr>";
          		}
          	?>
          <!--</table>-->
  		</div>

</section> 		
 
  </main>

</div>    
 </body>
 </html>
<?php }else{ ?>
    <!DOCTYPE html>
    <html>
    <head>
      <title>Error 404</title>
    </head>
    <body>
      <h1>404. Object not found.</h1><br><hr>
      Team for the supplied id was not found on the server.
    </body>
    </html>
 <?php } ?>

<?php } else { ?>

<!DOCTYPE html>
<html>
<head>
  <title>Error 404</title>
</head>
<body>
  <h1>404. Object not found.</h1><br><hr>
  Team for the supplied id was not found on the server.
</body>
</html>

<?php } ?>

<?php
 mysqli_close($conn);
?>

