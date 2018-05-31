<?php 
	


	if(isset($_GET['acc'])&&$_GET['acc']=='i'){
		require("../models/funcions.php");
		$mySql="INSERT INTO `videos`(`urlVideo`, `principal`) VALUES ('".$_GET['urlVideo']."','Y')";
		echo $mySql;
		$connexio=connect();
		$resultVideo=mysqli_query($connexio,$mySql); 
		disconnect($connexio);
	
		$i=0;
	}
	function listadoVideos(){
		require("models/funcions.php");
		$mySql="SELECT `idVideo`, `urlVideo`, `email`, `dataPub`,`principal`,`active` FROM `videos`";
		$connexio=connect();
		$resultVideos=mysqli_query($connexio,$mySql);
		disconnect($connexio);
		
		return $resultVideos;
	} 
?>