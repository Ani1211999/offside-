function selectTeam(teamName) {
	console.log(teamName);
	var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('select_team').innerHTML = this.responseText;
       }
    };
    xhttp.open("GET", "response.php?team="+teamName, true);
    xhttp.send(); 
}