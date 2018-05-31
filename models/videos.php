<?php 
	
	$_GET['txtNom']="pepe";
	if(isset($_GET['acc'])&&$_GET['acc']=='i'){
		require("../models/funcions.php");
		$mySql="SELECT `idCasesoficis`,`nom`,`dataInici`,`dataFi` FROM `caseoficis`";
		$connexio=connect();
		$resultCases=mysqli_query($connexio,$mySql); 
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