<?php
	$uri="http://api.football-data.org/v2/competitions/2021/matches?matchday=10";
	 $reqPrefs['http']['method'] = 'GET';
		        $reqPrefs['http']['header'] = 'X-Auth-Token:2d45bc97becc4e018dfaeed4aa44c081';
		        $stream_context = stream_context_create($reqPrefs);
		        $response = file_get_contents($uri, false, $stream_context);
		        $cumatch = json_decode($response,true);
		        for($i=0;$i<sizeof($cumatch['matches']);$i++)
		        {
		        	echo $cumatch['matches'][$i]['utcDate']."<br>";

		        	
		        }
		        $date = "2012-01-05";

$year = date('Y', strtotime($date));

$month = date('F', strtotime($date));

echo $month;

?>