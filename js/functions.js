
function muestraDivVideo(valor){
	 var miDiv=document.getElementById("formVideo");
	if(valor=="vid") {
		miDiv.className="visible";
	}
	else{
		miDiv.className="oculto";
	}
}

function canviaIdioma(idioma) {
	setCookie('selIdi',idioma,365);
	mostrarIdiomes();
}
function mostrarIdiomes()
{
	var ocultaCA;
	var ocultaES;
	if(getCookie('selIdi')=="ES") {
		ocultaCA="none";
		ocultaES="inline";
	}
	else{
		ocultaCA="inline";
		ocultaES="none";
	}
	objetosCA=document.getElementsByClassName("CA");
	objetosES=document.getElementsByClassName("ES");
	for(i=0;i<objetosCA.length;i++){
		objetosCA[i].style.display=ocultaCA;
		objetosES[i].style.display=ocultaES;
	}
}