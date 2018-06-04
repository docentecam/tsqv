<script>
	var password=prompt("Dame una contraseña:");
	if(password!="BesosMar1234"){
		location.href = "index.php";
	}
</script>	
	
<form id="formVideo" class="col-12" method="GET" action="models/videos.php">
	<input type="hidden" name="acc" value="i">
	Introdueix el link del video:<br>
	<input type="text" name="urlVideo">		
	<input type="submit" name="subirVideo" value="Pujar video" onclick="muestraDivVideo('subir')">
</form>




