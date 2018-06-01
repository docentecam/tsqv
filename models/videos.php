<?php 
	


	if(isset($_GET['acc'])&&$_GET['acc']=='i'){
		require("../models/funcions.php");
		$num=rand();
		$mySql="INSERT INTO `videos`(`urlVideo`, `principal`,`num`) VALUES ('".$_GET['urlVideo']."','N','".$num."')";
		$connexio=connect();
		$resultVideo=mysqli_query($connexio,$mySql); 
		disconnect($connexio);
		$_GET['cadena']=$num;
		$i=0;
	}
	
	
	if (isset($_GET['cadena'])){
		$_GET['cadena']=1092027463;
		$_GET['option']="y";
		$mySql="UPDATE `videos` SET `active`='".$_GET['option']."', `num`=NULL WHERE `num`=".$_GET['cadena']."";
		echo $mySql;
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