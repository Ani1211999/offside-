
<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Offside</title>
  <link rel="shortcut icon" href="../IMAGES/oglogo.png" type="image/png">
  <link rel="stylesheet" type="text/css" href="../CSS Files/style_home_nav_table.css">
  <link rel="stylesheet" type="text/css" href="../CSS Files/stylefinal2.css">
  <script type="text/javascript" src="../JAVASCRIPT/teams.js"></script>
</head>
<body background="aa.jpg" width="1024 px" height="768 px">
	<div class="container">
		<header>
			<div id="left-header">
				<a href="home.php"><img src="../IMAGES/oglogo.png" alt="Offside" width="50px" height="50px"></a>
			</div>
			<nav>
				<ul id="ul1">
					<li class="hoverWrapper"><a href="pl.html">PREMIER LEAGUE</a>
                       <div id="hoverShow1">
                       	<table>
                       	<tr><th>Premier League Clubs</th></tr><br>
                       	<div id="clubs">

                       		<tr>
                       		<td><a href="#">AFC Bournemouth</a><br></td>
                       		<td><a href="#">Arsenal</a><br></td>
                       		<td><a href="#">Brighton & Hove Albion</a><br></td></tr>
                       		<tr>
                       		<td><a href="#">Burnley</a><br></td>
                       		<td><a href="#">Cardiff City</a><br></td>
                       		<td><a href="#">Chelsea</a><br></td></tr>
                       		<tr>
                       		<td><a href="#">Crystal Palace</a><br></td>
                       		<td><a href="#">Everton</a><br></td>
                       		<td><a href="#">Fulham</a><br></td></tr>
                       		<tr>
                       		<td><a href="#">Huddersfield Town</a><br></td>
                       		<td><a href="#">Leicester City</a><br></td>
                       		<td><a href="#">Liverpool</a><br></td></tr>
                       		<tr>
                       		<td><a href="#">Manchester City</a><br></td>
                       		<td><a href="#">Manchester United</a><br></td>
                       		<td><a href="#">Newcastle United</a><br></td></tr>
                       		<tr>
                       		<td><a href="#">Southampton</a><br></td>
                       		<td><a href="#">Tottenham Hotspur</a><br></td>
                       		<td><a href="#">Watford</a><br></td></tr>
                       		<tr>
                       		<td><a href="#">West Ham United</a><br></td>
                       		<td><a href="#">Wolverhampton Wanderers</a><br></td></tr>

                       	</div>
                       	</table>
                       </div>
					</li>
					<li class="hoverWrapper2"><a href="laliga.html">LA LIGA</a>
						<div id="hoverShow2">
						<table>
                       			<tr><th>La Liga Clubs</th></tr><br>
                       	<div id="laligaclubs">

                       		<tr>
                       			<td><a href="#">Athletico Madrid</a><br></td>
                       		</tr>
                       		<tr>
                       			<td><a href="#">Barcelona</a><br></td>
                       		</tr>
                       		<tr>
                       			<td><a href="#">Real Madrid</a><br></td>
                       		</tr>
                       		<tr>
                       			<td><a href="#">Valencia</a><br></td>
                       		</tr>
                       		<tr>
                       			<td><a href="#">Sevilla</a><br></td>
                       		</tr>
                       	</div>
                       </table>
						</div>	
					</li>
					<li class="hoverWrapper3"><a href="bundesliga.html">BUNDESLIGA</a>
						<div id="hoverShow3">
						<table>
                       			<tr><th>Bundesliga Clubs</th></tr><br>
                       	<div id="bundesligaclubs">

                       		<tr>
                       			<td><a href="#">FC Bayern Munich</a><br></td>
                       		</tr>
                       		<tr>
                       			<td><a href="#">Borussia Dortmund</a><br></td>
                       		</tr>
                       		<tr>
                       			<td><a href="#">RB Leipzig</a><br></td>
                       		</tr>
                       		<tr>
                       			<td><a href="#">Borussia Mönchengladbach</a><br></td>
                       		</tr>
                       		<tr>
                       			<td><a href="#">Bayer Leverkusen</a><br></td>
                       		</tr>
                       	</div>
                       </table>
						</div>	
					</li>
					<li class="hoverWrapper4"><a href="serie-a.html">SERIE A</a>
						<div id="hoverShow4">
						<table>
                       			<tr><th>Serie-A Clubs</th></tr><br>
                       	<div id="seriaAclubs">

                       		<tr>
                       			<td><a href="#">Juventus</a><br></td>
                       		</tr>
                       		<tr>
                       			<td><a href="#">SSC Napoli</a><br></td>
                       		</tr>
                       		<tr>
                       			<td><a href="#">AS Roma</a><br></td>
                       		</tr>
                       		<tr>
                       			<td><a href="#">Inter Milan</a><br></td>
                       		</tr>
                       		<tr>
                       			<td><a href="#">AC Milan</a><br></td>
                       		</tr>
                       	</div>
                       </table>
						</div>
					</li>
					<li class="hoverWrapper5"><a href="ligue-1.html">LIGUE 1</a>
						<div id="hoverShow5">
						<table>
                       			<tr><th>Ligue-1 Clubs</th></tr><br>
                       	<div id="ligue1clubs">

                       		<tr>
                       			<td><a href="#">Paris Saint-Germain</a><br></td>
                       		</tr>
                       		<tr>
                       			<td><a href="#">Olympique de Marseille</a><br></td>
                       		</tr>
                       		<tr>
                       			<td><a href="#">AS Monaco</a><br></td>
                       		</tr>
                       		<tr>
                       			<td><a href="#">Olympique Lyonnais</a><br></td>
                       		</tr>
                       		<tr>
                       			<td><a href="#">OGC Nice</a><br></td>
                       		</tr>
                       	</div>
                       </table>
						</div>
					</li>
					<li ><a href="login.php">LOGIN</a></li>
					<li ><a href="signup.php">SIGNUP</a></li>
				</ul>
			</nav>
			<div style="clear:both"></div>
		</header>
  <div id="signup">
	<div id="parent">
		<h2>SIGN UP
		</h2>


		<form action="signup.inc.php" method="POST">
		FIRST NAME:<br>
    <input type="text" name="firstname" placeholder="ENTER FIRSTNAME" required>
		<br>
		<br>
		<br>
		LAST NAME:<br>
		<input type="text" name="lastname" placeholder="ENTER LASTNAME" >
		<br>
		<br>
		<br>
		EMAIL:<br>
		<input type="email" name="email" placeholder="ENTER EMAIL" required>
		<br>
		<br>
		<br>
		PASSWORD:<br>
		<input type="password" name="password" placeholder="ENTER PASSWORD" required><br>
		RE-ENTER PASSWORD:<br>
		<input type="password" name="password-repeat" placeholder="RE-ENTER PASSWORD" required><br>
		CHOOSE YOUR PREFERRED LEAGUE:
		<div>
      <select name="league"  id="select" onchange="selectTeam(this.value)" multiple>
  		<option name="premier league" value='premier league' >PREMIER LEAGUE </option>
  		<option name="la liga" value='la-liga' >LA LIGA </option>   
  		<option name="bundesliga" value='bundesliga' >BUNDESLIGA </option>
  		<option name="serie-a" value='serie a'> SERIE-A </option>
  		<option name="ligue-1" value='ligue 1'>LIGUE-1 </option>

		</select>
  </div>
		<br>
		<br>
		<br>
    <?php
      #Establish connection with database by including the connection file
      
    ?>
    <label>Choose your Favourite team</label>
    <select name="team" id="select_team" multiple ></select>
      <!--
      <?php
          /*if(isset($_POST['league']))
          {
            $leagues_selected=$_POST['league'];
            
              $query="select t_name from teams where l_name='$leagues_selected[0]';";
              $run=mysqli_query($conn,$query);
              if($run)
              {
                echo"<h1>Done</h1>";
                while($rows=mysqli_fetch_assoc($run))
                {
                  echo $rows."</br>";
                }
              }
          }
          mysqli_close($conn);*/
      ?>-->
    <br>
		<input type="checkbox" name="check" value="check" required>DO YOU WANT TO RECEIVE NEWS REGARDING YOUR FAVOURITE CLUB?<BR>
		<button type="submit" name="submit-form">CREATE ACCOUNT </button>
		<br>

		</form>
  </div>
	</div>
</body>

</html>   