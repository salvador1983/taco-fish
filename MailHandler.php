<?php 

/*
$name = $_POST['name']; 
$email = $_POST['email']; 


$header = 'From: ' . $email . " \n"; 
$header .= "X-Mailer: PHP/" . phpversion() . " \n"; 
$header .= "Mime-Version: 1.0 \n"; 
$header .= "Content-Type: text/plain";

$message .= "Mensaje: " . $_POST['message'] . " \n"; 

$para = 'contacto@oystersco.co';
$asunto = 'Oysters an Co. - Contacto desde la web'; 
 
if(@mail($para, $asunto, utf8_decode($message), $header))
{
  print "<script>document.location.href='gracias.html';</script>";
*/
  // Created by Future Tutorials
/*
}else{
  echo "Error! Please try again.";
}
*/

/* echo 'estatus=OK';  */
?> 



<?php
include ('smtp/class.phpmailer.php');

$nombre = $_POST['name'];
$telefono = $_POST['telefono'];
$texto = $_POST['texto']; 
$mail = $_POST['mail']; 

$mensaje = "Este mensaje fue enviado por " . $nombre . " <br>"; 
$mensaje .= "Su e-mail es: " . $mail . " <br>"; 
$mensaje .= "Telefono: " . $telefono . " <br>"; 
$mensaje .= "Mensaje: " . $texto . " <br>"; 
$mensaje .= "Enviado el " . date('d/m/Y', time()); 

$para = 'contacto@tacofishlapaz.com.mx';
$asunto = 'Contacto desde la web'; 


if (empty($_POST['name'])){
   $respuesta ="Es necesario completar el formulario de contacto";
}else{
	$mail = new PHPMailer();
	
	$mail->IsSMTP();
	$mail->IsHTML(true);

	$mail->Host = "tacofishlapaz.com.mx";
	
	$mail->From = "contacto@tacofishlapaz.com.mx";
	
	$mail->SMTPAuth = true;
	
	$mail->Username = "contacto@tacofishlapaz.com.mx";
	$mail->Password = "lapaz2016";
	
	$mail->Subject = $asunto;
	
	$body = $mensaje;
	
	$mail->FromName = "WEB oysters and co.";
	
	$mail->MsgHTML($body);
	
	$mail->AddAddress($para);
	
	if(!$mail->Send()) {
		$respuesta = "Error enviando: " . $mail->ErrorInfo;
	} else {
		$respuesta = "Gracias sus datos han sido recibidos";
	}
}

 
?> 



<!doctype html>
<html class="no-js" lang="mx">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TacoFish La Paz – Tacos de Pescado, Camarón y tostadas en Guadalajara</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/flexslider.css" />
    <link rel="stylesheet" href="css/elegant-icons.css" />
    <link rel="stylesheet" href="css/line-icons.css" />
    <link rel="stylesheet" href="css/jquery-ui.min.css" />
    <link rel="stylesheet" href="css/lightbox.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700%7CKristi%7CNixie+One' rel='stylesheet' type='text/css'>
    <script src="js/vendor/modernizr.js"></script>

  </head>
  <body>
	
							<nav class="logo-center nav-overlay">
			  	<div class="row">
					<div class="medium-5 columns text-right">
						<ul class="menu">
							<li><a href="#">Concepto</a></li>
							<li><a href="#">Menú</a></li>
							<!-- <li><a href="#">Menu</a></li> -->
						</ul>
					</div>
				
					<div class="medium-2 columns text-center">
						<img alt="taco-fish-guadalajara" src="img/logo.png" class="logo medium-10">
						<img alt="taco-fish" src="img/logo-dark.png" class="logo logo-dark medium-10">
					</div>
				
					<div class="medium-5 columns text-left">
						<ul class="menu">
							<li><a href="#">Productos del mar</a></li>
							<!-- <li><a href="#">Reservations</a></li> -->
							<li><a href="#">Contacto</a></li>
						</ul>
					</div>
					<div class="nav-toggle"><i class="icon icon_menu"></i></div>
			  	</div>
			  </nav>
					
			<div class="nav-container"></div>
			<div class="main-container">
			
			</div>
			<div class="footer-container"></div>	
		
						<section class="divider-background">
					<div class="background-image-holder parallax-background">
						<div class="overlay background-dark-grey"></div>
						<img alt="Divider Background" class="background-image" src="img/hero2.jpg">
					</div>
						<div class="row">
							<div class="medium-12 columns text-center">
								<div class="headline-style">
									<h1 class="text-white">Tacos de Pescado la Paz en Guadalajara</h1>
										<h2 class="text-white">-25 años de tradición-</h2>
									<span class="sub-title text-white">Estilo las Paz Baja California</span>
									<div class="line"></div>
								</div>
							</div>
						</div>
				  </section>

	<section class="background-mid-grey pad-small-bottom">
					<div class="row">
						<div class="medium-10 medium-centered columns text-center">
							<h3>Deliciosos Tacos de pescado y marisco en Guadalajara</h3>
							<div class="medium-6 columns text-left push-large">
								<p>
									El mejor sabor del mar para tu paladar
Contamos con la más amplia gama de tacos de mariscos, con sus distintas preparaciones, ya sean fritos, cocidos o simplemente naturales, pero con el toque único de la casa.
								</p>
							</div>
							
							<div class="medium-6 columns text-left push-large">
								<p>
									¡Qué delicia y con el mejor sabor!
Ricos cortes de pescado, camarón y una amplia gama de sabores del mar. 

Contamos con una gran selección de bebidas naturales y cervezas que harán combinan perfecto con nuestros deliciosos tacos.
								</p>
							</div>
							
							<img alt="tacofishlapaz" src="img/signature.png" class="small-2 push-top">
						</div>
					</div>
				</section>
						<section class="no-pad">
			  
					<div class="photo-container medium-5 left-align divider-background">
						<div class="background-image-holder parallax-background">
							<img class="background-image" alt="Attica Restaurant Template" src="img/side2.jpg">
						</div>
					</div>
			  
					<div class="row">
					
						<div class="medium-6 columns right no-left-pad">
							<h3>Somos un un concepto fresco de tacos de pescado y mariscos, especialistas en productos del mar, como base los tacos estilo la Paz Baja California.</h3>
							<span class="sub-title sub-title">FRESCO/NATUAL Y CON DELICIOSO SABOR</span>
							<hr>
							
							<h3>Especialidades</h3>
							<p class="text-left">
							Sabores que cautivan tu paladar como Chile relleno de marlin<br/>
Un delicioso chile Güero capeado y relleno de marlin, lo llamamos el torito un especial de Tacofish la Paz.</p>
<p>Contamos con la más amplia gama de especialidades de mariscos con sus distintas preparaciones, ya sean fritos, cocidos o simplemente naturales.</p>

					<!--
		<p class="medium-6 columns no-left-pad">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
							</p>
						
							<p class="medium-6 columns no-right-pad">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
							</p>
-->
						</div>
					</div>
				
				  </section>

	<section class="no-pad">
			  
					<div class="photo-container medium-5 right-align divider-background">
						<div class="background-image-holder parallax-background">
							<img class="background-image" alt="tacofish la paz" src="img/side1.jpg">
						</div>
					</div>
			  
					<div class="row">
					
						<div class="medium-6 columns">
							<h3>TACO FISH LA PAZ</h3>
							<span class="sub-title sub-title">- SÓLO EL MEJOR SABOR DEL MAR -</span>
							<hr>
							<!--
<h3>Ostras & ostiones</h3>
							<p class="text-left">
							Sabores que cautivan tu paladar<br/>
Contamos con la más amplia gama de platillos de ostiones con sus distintas preparaciones, ya sean fritos, cocidos o simplemente naturales, pero con el toque único de la casa.
							</p>
-->
							<h3>fresco y natural</h3>
							<p class="text-left">
								
¡Qué delicia y con el mejor sabor!<br/>
Contamos ademas con quesadillas de camarón, toritos y deliciosas tostadas de camarón y toda una amplia gama de sabores del mar.							</p>
<h3></h3>
<p class="text-left">
<br/>
					</p>
							<img alt="Signautre" src="img/signature.png" class="medium-4 small-6">
						</div>
					</div>
				
				  </section>

	<section>
					<div class="container">
						<div class="row">
							<div class="medium-12 columns text-center">
								<div class="page-title">
									<h3>Tacos de Pescado & Especiales de Mariscos en Guadalajara</h3>
									<span class="sub-title">Conoce Nuestro Deliciosos Tacos</span>
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="image-gallery">
							
								<div class="medium-4 columns vgn">
										<a class="vgm" href="img/hero1.jpg" data-lightbox="true">
											<div class="lightbox-image-holder">
												<div class="background-image-holder">
													<img class="background-image lightbox-image" alt="Lightbox Gallery Image" src="img/hero1.jpg">
												</div>
											</div>
										</a>
								</div>
								
								<div class="medium-4 columns vgn">
										<a class="vgm" href="img/hero2.jpg" data-lightbox="true">
											<div class="lightbox-image-holder">
												<div class="background-image-holder">
													<img class="background-image lightbox-image" alt="Lightbox Gallery Image" src="img/hero2.jpg">
												</div>
											</div>
										</a>
								</div>
								
								<div class="medium-4 columns vgn">
										<a class="vgm" href="img/hero3.jpg" data-lightbox="true">
											<div class="lightbox-image-holder">
												<div class="background-image-holder">
													<img class="background-image lightbox-image" alt="Lightbox Gallery Image" src="img/hero3.jpg">
												</div>
											</div>
										</a>
								</div>
								
								<div class="medium-4 columns vgn">
										<a class="vgm" href="img/hero4.jpg" data-lightbox="true">
											<div class="lightbox-image-holder">
												<div class="background-image-holder">
													<img class="background-image lightbox-image" alt="Lightbox Gallery Image" src="img/hero4.jpg">
												</div>
											</div>
										</a>
								</div>
								
								<div class="medium-4 columns vgn" data-scroll-reveal="enter bottom and move 30px">
										<a class="vgm" href="img/gallery1.jpg" data-lightbox="true">
											<div class="lightbox-image-holder">
												<div class="background-image-holder">
													<img class="background-image lightbox-image" alt="Lightbox Gallery Image" src="img/gallery1.jpg">
												</div>
											</div>
										</a>
								</div>
								
								<div class="medium-4 columns vgn" data-scroll-reveal="enter bottom and move 30px">
										<a class="vgm" href="img/gallery2.jpg" data-lightbox="true">
											<div class="lightbox-image-holder">
												<div class="background-image-holder">
													<img class="background-image lightbox-image" alt="Lightbox Gallery Image" src="img/gallery2.jpg">
												</div>
											</div>
										</a>
								</div>
								
							
							</div>
							
						</div>
					
						
					</div>
				</section>
				<a id="press" class="in-page-link"></a>

<section class="divider-background">
<!--being video divider-->

<div class="background-image-holder parallax-background">
<div class="overlay background-dark-grey"></div>
<img alt="Divider Background" class="background-image" src="img/hero3.jpg"></div>

<div class="video-wrapper">
<video autoplay="" muted="" loop="">

<source src="video/video.webm" type="video/webm">
<source src="video/video.mp4" type="video/mp4">
<source src="video/video.ogv" type="video/ogg"></video>
<div class="overlay background-dark-grey"></div>
</div>

<div class="row">
<div class="medium-12 columns text-center">
<div class="headline-style-2">
<!--
<h3 class="text-white">
“Para ”</h3>
-->
<!-- &amp; accolades -->

<span class="sub-title text-red">TACO FISH LA PAZ</span>
<!-- /* <div class="line"></div>
*/ -->
</div>
</div>
</div>
</section>

<section class="no-pad">

       <!-- formulario -->
  <a id="contacto"></a>

<section class="contact center no-pad">

<div class="map-overlay padded dark">
<div class="container">

	<div class="row">
		<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
			<h3 class="contact-title">Contacto</h3>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12 col-lg-10 col-lg-offset-1">
			<form method="post" action="MailHandler.php" name="contactform" id="contactform" class="clearfix">
				<fieldset>
					<div class="float-left">
						<div class="form-field name wow fadeInUp" data-wow-delay="0.5s">
							<label for="name">Nombre</label>
							<span>
								<input type="text" name="name" id="name" onfocus="if(this.value == 'Your Name') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Nombre completo'; }" value="Nombre completo"/>
							</span>
						</div>
						<div class="form-field email wow fadeInUp" data-wow-delay="0.8s">
							<label for="email">Correo electrónico</label>
							<span>
								<input type="email" name="email" id="email" onfocus="if(this.value == 'correo@dominio.com') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'correo@dominio.com'; }" value="correo@dominio.com"/>
							</span>
						</div>
					</div>
					<div class="float-right">
						<div class="form-field message wow fadeInUp" data-wow-delay="1s">
							<label for="message">Mensaje</label>
							<span>
								<textarea name="message" id="message" onfocus="if(this.value == 'Escríbenos tus dudas, quejas o sugerencias y con gusto te contactaremos de inmediato.') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Escríbenos tus dudas, quejas o sugerencias y con gusto te contactaremos de inmediato.'; }">Escríbenos tus dudas, quejas o sugerencias y con gusto te contactaremos de inmediato.
								</textarea>
							</span>
						</div>
					</div>
				</fieldset>
				<div class="form-click wow fadeInUp" data-wow-delay="1s">
					<button id="submit">Enviar</button>
				</div>
				<div id="alert">
					<div class="notification error clearfix">
						<p> <strong>Atención</strong>
							Por favor escribe un mensaje.
						</p>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
</div>

<!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script> -->
<script async defer src="https://maps.googleapis.com/maps/api/js key=AIzaSyD6qcYCJSCA2uXCc2CLp54MkAYEjDFYA0U&callback=initMap"
  type="text/javascript"></script>
<script type="text/javascript">
		            function initialize() {
					  var myLatlng = new google.maps.LatLng(20.675342, -103.374646);
					  var mapOptions = {
					    zoom: 18,
					    scrollwheel: true,
					    center: myLatlng,
					    mapTypeId: google.maps.MapTypeId.ROADMAP
					  }
					  var map = new google.maps.Map(document.getElementById('map'), mapOptions);

					  var marker = new google.maps.Marker({
					      position: myLatlng,
					      map: map,
					      title: 'Form'
					  });
					}

					google.maps.event.addDomListener(window, 'load', initialize);
					google.maps.event.addDomListener(window, 'resize', initialize);
			</script>
<div id="map" class="clearfix"></div>
	</section>
</div>

	<footer class="footer-contact">
				  	<div class="row">
				  		<div class="medium-12 columns text-center">
							<div class="logo-holder">
								<img alt="Logo" src="img/logo-dark.png">
							</div>
							<hr>
				  		</div>
				  	</div>
				  	
				  	<div class="row">
				  		<div class="medium-4 columns text-center">
				  			<span class="sub-title">Horario</span>
				  			<p>
				  				
				  				Lun - Sab: 9:00am - 4:30pm<br>
				  				Dom - cerrado
				  			</p>
				  		</div>
				  		
				  		<div class="medium-4 columns text-center">
				  			<span class="sub-title">Miguel de Cervantes Saavedra 50,</span>
				  			<p>
				  				Lafayette, 44140 Guadalajara, JAL<br>
				  				T: (0133) 36-15-27-59<br>
				  				E: hola@tacofishlapaz.com.mx
				  				
				  				
				  			</p>
				  		</div>
				  		
				  		<div class="medium-4 columns text-center">
				  			<span class="sub-title">Social</span><br>
				  			<ul class="social-profiles">
								<li><a href="https://www.facebook.com/tacofishvallarta/?fref=ts"><i class="icon social_facebook"></i></a></li>
								<li><a href="https:#"><i class="icon social_twitter"></i></a></li>
								<li><a href="#"><i class="icon social_instagram"></i></a></li>
							</ul>
				  		</div>
				  	</div>
				  </footer>
					
	<script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/smooth-scroll.js"></script>
    <script src="js/skrollr.min.js"></script>
    <script src="js/spectragram.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.flexslider-min.js"></script>  
    <script src="js/scripts.js"></script>
	<script src="js/lightbox.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>


								
