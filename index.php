<!DOCTYPE html>
<html>
	<head>
		<title>Tu si que vales</title>
		<link rel="icon" href="img/favicon.png" type="image/x-icon">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="js/functions.js"></script>
		
		
	</head>
	<body>
		<!-- TODO: menu principal -->
		<header>
			<div class="container d-flex">
		    	<div class="mr-auto p-2">
		    		<a class="textBlack" href="#">Home <span class="sr-only">(current)</span></a>	
		    	</div>
		    	<div class="mr-auto p-2">
		    		<a class="textBlack" href="#">Page 1</a>
		    	</div>
		    	<div class="mr-auto p-2">
		    		<a class="textBlack" href="#">Page 2</a>
		    	</div>
		      	<div class="mr-auto p-2">
					<a>
		      			<h1>Tu Si Que Vales!</h1>
		      		</a>
		      	</div>
				<div class="ml-auto p-2">
					<a class="textBlack" href="#">ESP</a>
				</div>
  				<div class="ml-auto p-2">
  					<a class="textBlack" href="#">CAT</a>
  				</div>
		    </div>	
		</header>


		<!-- inicio Normatives del concurs________________________________________________________________ -->
		<div class="row">
			<div class="col-sm text-center" >
				<h1>
					<span class="CA" style="display: none">Tu si que vales</span>
					<span class="ES" >Tu si que vales</span>
				</h1>
				<span class="ES">Concursos de talentos del barrio el Besòs i el Maresme Viernes 15 de junio de 20h a 23h Rambla Prim con c. Ferrer Bassa</span><br>
				<span class="ES">(Metro Besòs Mar-L4)</span><br>
				<span class="ES">Si tienes alguna habilidad, talento, tocas algún instrumento, te gusta bailar, cantar,hacer playback, circo, teatro, magia o cualquier cosa estrambótica no te lo pienses y </span><br>
				<span class="ES">¡apúntate! Concurso con premios!</span><br>
				<span class="ES">¿Deseas leerlo en otro idioma? lo tenemos en  català, castellà, àrab, xinés i wolof<br><a href="documents/TSQVDptc.pdf" target="_blank">Pulsa aqui</a></span><br>	
			</div>
		</div>
		<div class="row">
			<div class="col-sm text-center">
					<span class="ES">3 CATEGORÍAS:</span><br>
					<span class="ES"><i class="fas fa-child"></i>Infantil (hasta 12 años)</span><br>
					<span class="ES"><i class="fas fa-graduation-cap"></i>Juvenil (hasta 25 años)</span><br>
					<span class="ES"><i class="fas fa-male"></i>Adulta (mayores 25 años)</span>
			</div>
		</div><br>
		<div class="row">
			<div class="col-sm text-center" >
				<span class="ES text-center">INSCRIPCIONES</span><br>
				<span class="ES">Hasta el 10 de junio, presencialmente en el Centre Cívic Besòs(rambla Prim 87-89,
				 Metro L4 Besòs Mar)	o enviando un mail a tusiquevales.bm@gmail.com
				Más info al 93 256 49 01 / 617 252 908</span>
			</div>
		</div>
	</div>
<!-- 		fi de normatives_______________________________________________________________________________________
 -->



		<!--*************************************COMIENZO VIDEOS*******************-->
		<div class="row">
			<div id="idVideos">

			<!-- inicio form -->
				<div class="row">
					<button onclick="muestraDivVideo('vid')" class=" far fa-plus"></button>
					<form id="formVideo" class="col-12">
						Introdueix el link del video:<br>
						<input type="text" name="urlVideo">
						
						<input type="submit" name="subirVideo" value="Pujar video">
					</form>
				</div>
			<!-- fin form -->	
			<!--****-COMIENZO VIDEOS***-->
			<!--***-FINAL VIDEOS**-->
			</div>
		</div>

		<!-- inicio footer -->
		<footer class="mx-5 borderFooter">
			<img class="col-1 img-fluid" src="img/logo PDC.jpg">
			<img class="col-1 img-fluid" src="img/logocalco2_sense_marc.jpg">
			<img class="col-1 img-fluid" src="img/cazcarra.jpg">
			<img class="col-1 img-fluid" src="img/BFD_DEFINITIVO.jpg">
			<img class="col-1 img-fluid" src="img/Logo_DTASF-Direccio_General_Accio_Civica_Comunitaria (1).jpg">
			<img class="col-1 img-fluid" src="img/Aj+basa_2014_rodona_color-fonsblanc.png">
			<img class="col-1 img-fluid" src="img/Logo-CasesOficis-2018- color.png">
			<img class="col-1 img-fluid" src="img/Logotipo_SOC_color_png.png">
			<img class="col-1 img-fluid" src="img/Logo Generalitat color_png.png">
			<img class="col-1 img-fluid" src="img/MEYSS_color.jpg">
		</footer>
		<!-- fin footer -->


		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>