<?php 
	require("../inc/funcions.php");
	if(isset($_GET['acc'])&&$_GET['acc']=='i'){
		$mySql="SELECT `idCasesoficis`,`nom`,`dataInici`,`dataFi` FROM `caseoficis`";
		$connexio=connect();
		$resultCases=mysqli_query($connexio,$mySql); 
		disconnect($connexio);
	
		$i=0;
	}
?>