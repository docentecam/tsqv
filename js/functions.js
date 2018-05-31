
function muestraDivVideo(valor){
	 var miDiv=document.getElementById("formVideo");
	if(valor=="vid") {
		miDiv.className="visible";
	}
	else{
		miDiv.className="oculto";
	}
}