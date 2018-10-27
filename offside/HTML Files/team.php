<?php if(isset($_GET['team_id'])){ 


$conn=mysqli_connect('localhost','root','','offside');
$query = "Select * from teams where t_id=".$_GET['team_id'];
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result)>0){ $row = mysqli_fetch_assoc($result);?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <link rel="shortcut icon" href="../IMAGES/oglogo.png" type="image/png">
    <link rel="stylesheet" type="text/css" href="../CSS Files/style_vishwa.css">
    <link rel="stylesheet" type="text/css" href="../CSS Files/statistics.css">

    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <!-- Custom Theme Style -->
    <!-- <link href="custom.min.css" rel="stylesheet">  -->
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
      <?php
        function hteamdetails($id)
        {
          $uri = 'http://api.football-data.org/v2/teams/'.$id;
          $reqPrefs['http']['method'] = 'GET';
          $reqPrefs['http']['header'] = 'X-Auth-Token:2d45bc97becc4e018dfaeed4aa44c081';
          $stream_context = stream_context_create($reqPrefs);
          $response = file_get_contents($uri, false, $stream_context);
          $tlalogo = json_decode($response,true);
          return $tlalogo;
        }
        function ateamdetails($id)
        {
          $uri = 'http://api.football-data.org/v2/teams/'.$id;
          $reqPrefs['http']['method'] = 'GET';
          $reqPrefs['http']['header'] = 'X-Auth-Token:0e0a131adea24c77a2d4901ba2395dcb';
          $stream_context = stream_context_create($reqPrefs);
          $response = file_get_contents($uri, false, $stream_context);
          $tlalogo = json_decode($response,true);
          return $tlalogo;
        }

      ?>
      <title><?php 
      $teamname=$row['t_name'];
      $apiid=$row['api_id'];
      echo $row['t_name']; ?></title>
      
  </head>

  <body class="clubs_body">
    <?php
    $conn=mysqli_connect('localhost','root','','offside');
    if($conn)
    {
      //echo"Connection established succesfully";
    }
    $lname=$row['l_name'];
  ?>
    <div class="container">
      <!-- <div class="main_container"> -->
      <div id="header-id">
      <header>
      <div id="left-header">
        <a href="../HTML Files/home.php"><img src="../IMAGES/oglogo.png" alt="Offside" width="50px" height="50px"></a>
      </div>
      <nav>
        <ul id="ul1">
          <li class="hoverWrapper"><a href="../HTML Files/pl.html">PREMIER LEAGUE</a>
                       <div id="hoverShow1">
                        <table>
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
          <li class="hoverWrapper2"><a href="../HTML Files/laliga.html">LA LIGA</a>
            <div id="hoverShow2">
            <table>
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
          <li class="hoverWrapper3"><a href="../HTML Files/bundesliga.html">BUNDESLIGA</a>
            <div id="hoverShow3">
            <table>
                            <tr><th>Bundesliga Clubs</th></tr><br>
                        <div id="bundesligaclubs">
                          <?php
                            $query="Select t_name,t_id from teams where l_name='bundesliga'";
                            $result=mysqli_query($conn,$query);
                            while($row1=mysqli_fetch_assoc($result))
                            { $link = "http://localhost:8080/Offside(vishwa)/offside/HTML%20Files/team.php?team_id=".$row1['t_id'];
                                        
                             echo '<tr><td><a href="'.$link.'">'.$row1['t_name'].'</td></tr>';
                                        
                            }
                          ?>
                        </div>
                       </table>
            </div>  
          </li>
          <li class="hoverWrapper4"><a href="../HTML Files/serie-a.html">SERIE A</a>
            <div id="hoverShow4">
            <table>
                            <tr><th>Serie-A Clubs</th></tr><br>
                        <div id="seriaAclubs">
                          <?php
                            $query="Select t_name,t_id from teams where l_name='serie a'";
                            $result=mysqli_query($conn,$query);
                            while($row1=mysqli_fetch_assoc($result))
                            { $link = "http://localhost:8080/Offside(vishwa)/offside/HTML%20Files/team.php?team_id=".$row1['t_id']; 
                                        
                             echo '<tr><td><a href="'.$link.'">'.$row1['t_name'].'</td></tr>';
                                        
                            }
                          ?>

                        </div>
                       </table>
            </div>
          </li>
          <li class="hoverWrapper5"><a href="../HTML Files/ligue-1.html">LIGUE 1</a>
            <div id="hoverShow5">
            <table>
                            <tr><th>Ligue-1 Clubs</th></tr><br>
                        <div id="ligue1clubs">
                          <?php
                            $query="Select t_name,t_id from teams where l_name='ligue 1'";
                            $result=mysqli_query($conn,$query);
                            while($row1=mysqli_fetch_assoc($result))
                            { $link = "http://localhost:8080/Offside(vishwa)/offside/HTML%20Files/team.php?team_id=".$row1['t_id'];
                                        
                             echo '<tr><td><a href="'.$link.'">'.$row1['t_name'].'</td></tr>';
                                        
                            }
                          ?>
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

      <nav class="sub_nav">
          <ul id="ul_subnav">
            <li class="subnav1"><a href="#" onclick="openmodal('id01')">STANDINGS</a></li>
            <li class="subnav2"><a href="#" >STATISTICS</a></li>
            <li class="subnav2"><a href="#" onclick="openmodal('id02')">FIXTURES</a></li>
          </ul>
        </nav>
      

    </div>
   

        

<!--             <div class="club_news"> -->
      
              <div class="profile_head">
                <h2>Club Profile</h2>  
              </div>

        <div class="club_window">
            <div id="club_info">
                      
                      <?php
                        $uri = 'http://api.football-data.org/v2/teams/'.$apiid;
                        $reqPrefs['http']['method'] = 'GET';
                        $reqPrefs['http']['header'] = 'X-Auth-Token:2d45bc97becc4e018dfaeed4aa44c081';
                        $stream_context = stream_context_create($reqPrefs);
                        $response = file_get_contents($uri, false, $stream_context);
                        $detail = json_decode($response,true);
                        $logo=$detail['crestUrl'];
                        $tname=$detail['name'];
                        $webname=$detail['website'];
                        $home=$detail['venue'];
                        echo "<img src=$logo alt='homecrest' width='55%' height='55%'></img>";
                        echo "<h3>$tname</h3>";
                        echo"<ul><li>$home</li>";
                        echo"<li>";
                        echo "<a href=$webname>Official website</a>";
                        echo "</li>";
                        echo "</ul>";
                      ?>
           </div>
           <div class="club_news"> 
              
                    <div class="side_bar">
                      <ul class="slides">
                        <input type="radio" name="radio-btn" id="img-1" checked />
                        <li class="slide-container">
                        <div class="slide">
                          <?php
                            $query="Select images from media where tid=".$_GET['team_id'].";";

                          ?>
                          <img src="http://farm9.staticflickr.com/8072/8346734966_f9cd7d0941_z.jpg" />
                            </div>
                        <div class="nav">
                          <label for="img-6" class="prev">&#x2039;</label>
                          <label for="img-2" class="next">&#x203a;</label>
                        </div>
                        </li>

                        <input type="radio" name="radio-btn" id="img-2" />
                        <li class="slide-container">
                            <div class="slide">
                              <img src="http://farm9.staticflickr.com/8504/8365873811_d32571df3d_z.jpg" />
                            </div>
                        <div class="nav">
                          <label for="img-1" class="prev">&#x2039;</label>
                          <label for="img-3" class="next">&#x203a;</label>
                        </div>
                        </li>

                        <input type="radio" name="radio-btn" id="img-3" />
                        <li class="slide-container">
                            <div class="slide">
                              <img src="http://farm9.staticflickr.com/8068/8250438572_d1a5917072_z.jpg" />
                            </div>
                        <div class="nav">
                          <label for="img-2" class="prev">&#x2039;</label>
                          <label for="img-4" class="next">&#x203a;</label>
                        </div>
                        </li>

                        <input type="radio" name="radio-btn" id="img-4" />
                        <li class="slide-container">
                            <div class="slide">
                              <img src="http://farm9.staticflickr.com/8061/8237246833_54d8fa37f0_z.jpg" />
                            </div>
                        <div class="nav">
                          <label for="img-3" class="prev">&#x2039;</label>
                          <label for="img-5" class="next">&#x203a;</label>
                        </div>
                        </li>

                        <input type="radio" name="radio-btn" id="img-5" />
                        <li class="slide-container">
                            <div class="slide">
                              <img src="http://farm9.staticflickr.com/8055/8098750623_66292a35c0_z.jpg" />
                            </div>
                        <div class="nav">
                          <label for="img-4" class="prev">&#x2039;</label>
                          <label for="img-6" class="next">&#x203a;</label>
                        </div>
                        </li>

                        <input type="radio" name="radio-btn" id="img-6" />
                        <li class="slide-container">
                            <div class="slide">
                              <img src="http://farm9.staticflickr.com/8195/8098750703_797e102da2_z.jpg" />
                            </div>
                        <div class="nav">
                          <label for="img-5" class="prev">&#x2039;</label>
                          <label for="img-1" class="next">&#x203a;</label>
                        </div>
                        </li>

                        <li class="nav-dots">
                          <label for="img-1" class="nav-dot" id="img-dot-1"></label>
                          <label for="img-2" class="nav-dot" id="img-dot-2"></label>
                          <label for="img-3" class="nav-dot" id="img-dot-3"></label>
                          <label for="img-4" class="nav-dot" id="img-dot-4"></label>
                          <label for="img-5" class="nav-dot" id="img-dot-5"></label>
                          <label for="img-6" class="nav-dot" id="img-dot-6"></label>
                        </li>
                    </ul>
                
                  </div>
            </div>

            

          

      
        <div style="clear:both"></div>

    </div>
              
    <div id="id01">
                
                <div id=ptable>
                  <span class="closeBtn" onclick="closeModal('id01')">&times;</span>
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
                  <table id="table1">
        
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
                      $api_team_name=$matches['standings'][0]['table'][$i]["team"]["name"];
                      $apteamname=strtolower($api_team_name);
                      if(strpos($apteamname,$teamname)!==false)
                      {
                        echo"<tr style='background-color:black;color:white;' >";
                        echo"<td>";
                        
                        print_r($matches['standings'][0]['table'][$i]["position"]);
                        echo"</td>";

                         echo"<td>";
                        print_r($matches['standings'][0]['table'][$i]["team"]["name"]);
                        echo"</td>";
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

                      
                    
                      /*print_r($matches['standings'][0]['table'][$i]["team"]["name"]);
                      echo"<td>";*/

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
                
              </div>
    <div id="id02" id="Fixtures">
          <div id="fixtures">
            <span class="closeBtn" onclick="closeModal('id02')">&times;</span>
              <?php
                $uri = 'http://api.football-data.org/v2/teams/'.$apiid.'/matches?status=SCHEDULED&limit=10';
                  $reqPrefs['http']['method'] = 'GET'; 
                  $reqPrefs['http']['header'] = 'X-Auth-Token:9fc4e444434c487db0748b4e118a3930';
                  $stream_context = stream_context_create($reqPrefs);
                  $response = file_get_contents($uri, false, $stream_context);
                  $matches = json_decode($response,true);
                  echo"<table id='ftable'>";
                  echo"<th>Fixtures</th>";
                  for($i=0;$i<sizeof($matches['matches']);$i++)
                  {
                    echo"<tr>";
                    echo"<td>";
                    
                    $home=$matches['matches'][$i]['homeTeam']['id'];
                    $tlalogo=hteamdetails($home);
                    $shortname=$tlalogo['tla'];
                    $logo=$tlalogo['crestUrl'];     
                    echo "<img src=$logo id='fixedsize'alt='homecrest' ></img>";
                    echo "</td>";
                    echo"<td>";
                    echo $shortname ;
                    echo"</td>";
                    $away=$matches['matches'][$i]['awayTeam']['id'];
                    $tlalogo=ateamdetails($away);
                    $shortname=$tlalogo['tla'];
                    $logo=$tlalogo['crestUrl'];
                    echo"<td>";
                    echo "<img src=$logo alt='homecrest' id='fixedsize'></img>";
                    echo"</td>";
                    echo"<td>";
                    echo $shortname;
                    echo"</td>";
                    echo "<td>";
                    $date_of_fixture=$matches['matches'][$i]['utcDate'];
                    $date=substr($date_of_fixture,0,10);
                    echo"$date";
                    echo"</td>";
                    echo "<td>";
                    $time=substr($date_of_fixture,11);
                    echo"$time";
                    echo"</td>";
                    echo "</tr>";
                    
                  }
                echo "</table>";
            ?>
          </div>
        </div>
      
    

    <div class="news">
          <h1>Videos & Highlights</h1>
          </div>
        
      <div class="club_videos">
          
        <!-- <section id="videos"> -->
  <p></p>
    <div class="slider1">
 
    <div id="video1" class="slide1">
      <div class="video-container">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/E695no4R2ak" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
      <div class="control-container">
      <a class="prev" href="#video4"></a>
      <a class="next" href="#video2"></a>
      </div>
    </div>
    
    <div id="video2" class="slide1">
      <div class="video-container">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/pTliytRkOqU?list=PLbV4hqDlj4AqN38TjzsDkjG9viT2aQpG3" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
      </div>
      <div class="control-container">
      <a class="prev" href="#video1"></a>
      <a class="next" href="#video3"></a>
      </div>
    </div>
    
    <div id="video3" class="slide1">
      <div class="video-container">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/93QKmCFF9Xo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
      </div>
      <div class="control-container">
      <a class="prev" href="#video2"></a>
      <a class="next" href="#video4"></a>  
      </div>
    </div>
    
    <div id="video4" class="slide1">
      <div class="video-container">
      <iframe width="558" height="320" src="https://www.youtube.com/embed/5b4Dy8SPbwY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
      </div>
      <div class="control-container">
      <a class="prev" href="#video3"></a>
      <a class="next" href="#video1"></a>
      </div>
    </div>   
 
</div>
<p></p>
</div>
        
            
          
        <div style="clear:both"></div>


        
    <footer>
      
        <div id="footerimg">
        <a href="home.html"><img src="../IMAGES/oglogo.png" alt="Offside" width="50px" height="50px"></a>
      </div>
        <small>&copy; <i>OFFSIDE</i></small>
        <a href="about.html"><small>&nbsp ABOUT US</small></a>
      
    </footer>
         

        
        

    <script type="text/javascript" src="video.js"></script>
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