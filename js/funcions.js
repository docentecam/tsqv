function muestraDivVideo(vid){
	var miDiv=document.getElementById(Divcambio);
	if(sith.value=="Ocultar div") {
		sith.value="Mostrar div";
		miDiv.className="oculto";
	}
	else{
		sith.value="Ocultar div";
		miDiv.className="visible";
	}
}