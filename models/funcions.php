<?php 
	
	function connect(){
		$connexio=@mysqli_connect("localhost","root","","tsqv");
		if(!$connexio){
			die("error al conectar");
		}
		mysqli_set_charset($connexio,"utf8");
		mysqli_query($connexio,"SET lc_time_names='ca_ES'");
		return($connexio);	
	}
	function disconnect($connexio){
		mysqli_close($connexio);
	}
?>