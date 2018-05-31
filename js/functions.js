
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


// Política de cookies
$( document ).ready(function() {
   	if(!getCookie('selIdi')){
   		setCookie('selIdi','CA',365);
   		console.log("Creamos cookie y seleccionamos catalàn");
   	}
   	else
   	{
   		console.log("Hay cookie");
   	}
   	objetosCA=document.getElementsByClassName("CA");
	objetosES=document.getElementsByClassName("ES");
   	mostrarIdiomes();
   	//document.cookie = 'selIdi' +  '=; expires=Thu, 01-Jan-70 00:00:01 GMT;';
});

function getCookie(c_name){
	var c_value = document.cookie;
	var c_start = c_value.indexOf(" " + c_name + "=");
	if (c_start == -1){
		c_start = c_value.indexOf(c_name + "=");
	}
	if (c_start == -1){
		c_value = null;
	}
	else
	{
		c_start = c_value.indexOf("=", c_start) + 1;
		var c_end = c_value.indexOf(";", c_start);
		if (c_end == -1){
			c_end = c_value.length;
		}
		c_value = unescape(c_value.substring(c_start,c_end));
	}
	return c_value;
}
function setCookie(c_name,value,exdays){
	var exdate=new Date();
	exdate.setDate(exdate.getDate() + exdays);
	var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
	document.cookie=c_name + "=" + c_value;

