<?php 
	
	if(isset($_GET['acc'])&&$_GET['acc']=='i'){
		require("../inc/funcions.php");
		$_GET['txtNom']="pepe";
		$mySql=INSERT INTO `videos`(`idVideos`, `urlVideo`, `email`, `dataPub`, `principal`, `active`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6]);
		$connexio=connect();
		$resultCases=mysqli_query($connexio,$mySql); 
		disconnect($connexio);
	
		$i=0;
	}
?>