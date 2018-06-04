<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<title>Tu si que vales</title>
		<link rel="icon" href="img/favicon.png" type="image/x-icon">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>



		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="css/style.css">


		<script src="js/functions.js"></script>
		<script>	
			$(document).ready(function() {
				if(!getCookie('selIdi')){
			   		setCookie('selIdi','ES',365);
			   	}
			   	objetosCA=document.getElementsByClassName("CA");
				objetosES=document.getElementsByClassName("ES");
			   	mostrarIdiomes();
			  $("a").on('click', function(event) {

			    if (this.hash !== "") {
			      event.preventDefault();
			      var hash = this.hash;
			      $('html, body').animate({
			        scrollTop: $(hash).offset().top
			      }, 800, function(){
			        window.location.hash = hash;
			      });
			    }
			  });
			});
		</script>
		
	</head>
	<body>
		<?php
		require("models/videos.php");
		?><!-- inicio Pàgina principal -->

		<div class="row divInicio" id="pagInicio">
			<div class="col"></div>
			<div class="col-5"><img src="img/TSQVDptc-1.png" class="img-fluid"></div>
			<div class="col"></div>
		</div>

		<header>

			<div class="row">
				<div class="container d-flex d-block fixed-top mb-5 bg-white col-12">
				    <div class="mr-auto p-2 col-1">
				    	<a class="textBlack" href="#pagInfo" id="aInfo">Normativa</a>
				    </div>
				    <div class="mr-auto p-2 col-1">
				    	<a class="textBlack" href="#">Videos</a>
				    </div>
				    <div class="mr-auto p-2 col-4">
				    	<a href="#" class="textBlack">
				    		<h1 class="mrCss"> Tu Si Que Vales</h1>
				    	</a>
				    </div>
					<div class="ml-auto p-2 col-0">
						<a class="textBlack cursorPC" onclick="canviaIdioma('ES')">ESP</a>
					</div>
		  			<div class="ml-auto p-2 col-0">
		  				<a class="textBlack cursorPC" onclick="canviaIdioma('CA')">CAT</a>
		  			</div>	
				</div>
			</div>
		</header>
		<div class="row" id="pagInfo">
			<div class="col-sm mt-5 position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg">
				<h1>Tu si que vales</h1>
				<span class="ES">Concursos de talentos del barrio el Besòs i el Maresme<br/>
					Viernes 15 de junio de 20h a 23h Rambla Prim con c. Ferrer Bassa<br/>
					(Metro Besòs Mar-L4)<br/>
					Si tienes alguna habilidad, talento, tocas algún instrumento, te gusta bailar, cantar,hacer playback, circo, teatro, magia o cualquier cosa estrambótica no te lo pienses y ¡apúntate! Concurso con premios!<br/>
					Descarga el diptico en los siguientes idiomas: Catalán, Castellano, Árabe, Chino i wolof<br/><br/><a class="btn btn-outline-info" href="documents/TSQVDptc.pdf" target="_blank">Pulsa aqui</a>
				</span>
						

				<span class="CA" style="display: none">
					Concurs de talents al barri el Besòs i el Maresme<br/>
					Divendres 15 de juny de 20h a 23h a Rambla Prim amb c. Ferrer Bassa<br/>
					(Metro Besòs Mar-L4)<br/>
					Si tens alguna habilitat, talent, toques algun instrument, t’agrada ballar, cantar, fer playback, circ, teatre, màgia o qualsevol cosa estrambòtica no t’ho pensis i apunta’t! És un concurs amb premis!<br/>
					Descarrega el díptic en els següents idiomes: en Català, Castellà, Àrab, Xinés i wolof<br/><br/><a class="btn btn-outline-info" href="documents/TSQVDptc.pdf" target="_blank">prem aqui</a>
				</span><br>	
			</div>
		</div>
		<div class="row">
			<div class="col-sm text-center position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
				<span class="ES">
					<span class="colorsSubtitulos text-white">3 CATEGORÍAS:</span><br/>
					<i class="fas fa-child"></i>Infantil (hasta 12 años)<br/>
					<i class="fas fa-graduation-cap"></i>Juvenil (hasta 25 años)<br/>
					<i class="fas fa-male"></i>Adulta (mayores 25 años)
				</span>
				<span class="CA" style="display: none">
					<span class="colorsSubtitulos text-white">3 CATEGORIES</span><br/>
					<i class="fas fa-child"></i>Infantil (fins a 12 anys)<br/>
					<i class="fas fa-graduation-cap"></i>Juvenil (fins a 25 anys)<br/>
					<i class="fas fa-male"></i>Adults (majors 25 anys)
				</span>
			</div>
		</div><br>
		<div class="row">
			<div class="col-sm text-center position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg" >
				<span class="ES" >
					<span class="text-center colorsSubtitulos text-white">INSCRIPCIONES</span><br/>
					Hasta el 10 de junio, presencialmente en el Centre Cívic Besòs<br/>
					(rambla Prim 87-89, Metro L4 Besòs Mar)<br/>
					o enviando un mail a tusiquevales.bm@gmail.com<br/>
					Más info en el 93 256 49 01 / 617 252 908
				</span>
				<span class="CA" style="display: none">
					<span class="colorsSubtitulos text-white">INSCRIPCIONS </span><br/>
					Fins al 10 de juny presencialment al Centre Cívic Besòs<br/>
					(rambla Prim 87-89, Metro L4 Besòs Mar)<br/>
					o enviant un mail a tusiquevales.bm@gmail.com<br/>
					Més info al 93 256 49 01 / 617 252 90
				</span>
			</div>
		</div>

		<div class="row"  id="pagVideos">
			<div id="idVideos">
				<div class="row">
					<button onclick="muestraDivVideo('vid')" class=" far fa-plus"></button>
					<form id="formVideo" class="col-12" method="GET" action="models/videos.php">
						<input type="hidden" name="acc" value="i">
						Introdueix el link del video:<br>
						<input type="text" name="urlVideo">		
						<input type="submit" name="subirVideo" value="Pujar video" onclick="muestraDivVideo('subir')">
					</form>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row textcenter">
				<?php
					$resultVideos= listadoVideos();
					while($row=mySqli_fetch_array($resultVideos))
					{		 
				?>
		  					
						<div class="col-sm-10 my-2 col-lg-5 ml-md-5 mt-md-4 ">	
							<div class=" embed-responsive embed-responsive-16by9 ">
								<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $row['urlVideo'] ?>" allowfullscreen></iframe>
							</div>
						</div>
				<?php
					}
				?>
			</div>
		</div>
		
		<footer class="offset-1 borderFooter">
			<img class="col-lg-1 col-3 col-md-2 img-fluid" src="img/plaComunitari.jpg">
			<img class="col-lg-1 col-3 col-md-2 img-fluid" src="img/centreCivic.jpg">
			<img class="col-lg-1 col-3 col-md-2 img-fluid" src="img/LogoAvMaresme.jpg">
			<img class="col-lg-1 col-3 col-md-2 img-fluid" src="img/cazcarra.jpg">
			<img class="col-lg-1 col-3 col-md-2 img-fluid" src="img/hotelSB.jpg">	
			<img class="col-lg-1 col-3 col-md-2 img-fluid" src="img/barcelonaForumDistrict.jpg">
			<img class="col-lg-1 col-3 col-md-2 img-fluid" src="img/Direccio_General_Accio_Civica.jpg">
			<img class="col-lg-1 col-3 col-md-2 img-fluid" src="img/bcnActiva.png">
			<img class="col-lg-1 col-3 col-md-2 img-fluid" src="img/casesOficis.png">
			<img class="col-lg-1 col-3 col-md-2 img-fluid" src="img/Logotipo_SOC.png">
			<img class="col-lg-1 col-3 col-md-2 img-fluid" src="img/logoGeneralitat.png">
			<img class="col-lg-1 col-3 col-md-2 img-fluid" src="img/MEYSS.jpg">	
		</footer>		
	</body>
</html>