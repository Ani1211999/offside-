<?php
$con = mysqli_connect("localhost","root","","offside");

if (!$con)
  {
  die('Could not connect: ' .mysqli_error($con));
  }
  else
  	echo"Connectiion successful";



$fixtures = array();

$fixtures[] = array('l_name' => 'Premier League', 'time' => '20:00:00', 'fixture' => 'Liverpool vs Manchester City', 'day' => 'Sunday','date' =>'2018-10-7');

/*$fixtures[] = array('l_name' => '', 'time' => '', 'fixture' => '', 'day' => '','date' =>'');

$fixtures[] = array('l_name' => '', 'time' => '', 'fixture' => '', 'day' => '','date' =>'');

$fixtures[] = array('l_name' => '', 'time' => '', 'fixture' => '', 'day' => '','date' =>'');*/


foreach ($fixtures as $array) {
    $sql  = "INSERT INTO fixtures";
    $sql .= " (`".implode("`, `", array_keys($array))."`)";
    $sql .= " VALUES ('".implode("', '", $array)."') ";
    $result = mysqli_query($con,$sql) or die(mysqli_error($con));
}

 mysqli_close($con);

   ?>