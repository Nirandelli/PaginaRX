<!DOCTYPE html>
<html>
	<head>
		<?php include("header.php"); ?>
		<link rel="stylesheet" type="text/css" href="css/estilo_contacto.css">
		<script src='https://www.google.com/recaptcha/api.js'></script>
	</head>
	<body>
		<!-- Header -->
		<header>
			<?php include("navbar.php"); ?>
		</header>

		<!-- Content -->
		<section>
			<div class="container">
				<div class="col-md-12">
					<div class="thumbnail" id="contacto">
						<div class="col-md-6">
							<h1><font color="0c1a1e"><strong>Contáctanos</strong></font></h1>
						</div>
						<div class="col-md-6">
							<img class="responsive hidden-xs" src="img/iconocon.png" align="right" width="100" height="70"/>
							<img class="responsive visible-xs" src="img/iconocon.png" align="right" width="0" height="0"/>
						</div>
						<form action="send_form_email.php" method="post" name="Contacto">
							<div class="col-md-6">
								<label><font color="#0c1a1e"><strong>Nombre de Empresa:</strong></font></label>
								<input type="text" name="Empresa"  class="form-control" placeholder="Empresa"  required/><br/>
							</div>

							<div class="col-md-6">
								<label><font color="#0c1a1e"><strong>Ubicacion:</strong></font></label>
								<input type="text" name="Ubicacion"  class="form-control" placeholder="Ubicacion"  required/><br/>
							</div>

							<div class="col-md-6">
								<label><font color="#0c1a1e"><strong>Nombre:</strong></font></label>
								<input type="text" name="Nombre" class="form-control"  placeholder="Nombre"  required/><br/>
							</div>

							<div class="col-md-6">
								<label><font color="#0c1a1e"><strong>Puesto:</strong></font></label>
								<input type="text" name="Puesto"  class="form-control" placeholder="Puesto"  required/><br/>
							</div>

							<div class="col-md-6">
								<label><font color="#0c1a1e"><strong>Teléfono:</strong></font></label>
								<input type="tel" name="Telefono" maxlength="10" class="form-control"  placeholder="Teléfono"  required/><br/>
							</div>

							<div class="col-md-6">
								<label><font color="#0c1a1e"><strong>Correo Electrónico:</strong></font></label>
								<input type="email" name="Correo"  class="form-control" placeholder="E-mail"  required/><br/>
							</div>


							<div class="col-md-12">
								<label><font color="#0c1a1e" size="6"><strong>Describa su producto...</strong></font></label>
							</div>

							<div class="col-md-4">
								<label for="email"><font color="#0c1a1e"><strong>Productos:</strong></font></label>
								<input type="text" name="Productos"  class="form-control" placeholder="Producto"  required/><br/>
							</div>

							<div class="col-md-4">
								<label><font color="#0c1a1e"><strong>Diametro:</strong></font></label>
								<input type="text" id="des"  name="Diametro" class="form-control" placeholder="Describalo en '' ó mm"/>
							</div>

							<div class="col-md-4">
								<label><font color="#0c1a1e"><strong>Longitud:</strong></font></label>
								<input type="text" id="des2" name="Longitud" class="form-control"placeholder="Describalo en mts ó ft"/></br>
							</div>

							<div class="col-md-4">
								<label><font color="#0c1a1e"><strong>Presión:</strong></font></label>
								<input type="text" id="des4" name="Presion" class="form-control" placeholder="Describalo en psi ó bar"/>
							</div>

							<div class="col-md-4">
								<label><font color="#0c1a1e"><strong>Fluido:</strong></font></label>
								<input type="text" id="des6" name="Fluido" class="form-control" placeholder="Tipo de fluido"/><br/>
							</div>

							<div class="col-md-4">
								<label><font color="#0c1a1e"><strong>Conexiones:</strong></font></label>
								<input type="text" id="des7" name="Conexiones" class="form-control" placeholder="Conexiones"/><br/>
							</div>

							<div class="col-md-4">
								<label><font color="#0c1a1e"><strong>Temperatura:</strong></font></label>
								<input type="text" id="des8" name="Temperatura" class="form-control" placeholder="Describalo en ºC ó ºF"/><br/>
							</div>

							<div class="col-md-12">
								<label for="asunto"><font color="#0c1a1e"><strong>Comentario:</strong></font></label>
								<textarea type="text" rows="10"  class="form-control" name="Comentario"  id="Comentario"  placeholder="Comentario"></textarea>
								<!--<script> CKEDITOR.replace ('Comentario') </script>-->
								</br>
							</div>
							<div class="col-md-12" style="display: flex; justify-content: center; margin-bottom: 10px;">
								<div class="g-recaptcha" data-sitekey="6LdMOXUUAAAAAFbo7hR4j_-gisHChQcZSYR7FA2B"></div>
							</div>
							<div class="col-md-12">
								<center>
									<button type="submit" class="btn btn-success" rel="tooltip" title="Verifique que sus datos sean correctos"><i class="fa fa-send"></i> Enviar</button>
									<button type="reset" class="btn btn-danger"><i class="fa fa-times"></i> Cancelar</button>
								</center>
							</div>
						</form></br>
					</div>
				</div>


				<div class="col-md-5">
					<div class="thumbnail" id="contacto">
							<center><font color="0c1a1e" size="5"><strong>Servicios al Cliente:</strong></font></center></br>
							<img src="img/banner-contactenos.png"/>

							<font color="0c1a1e">
								<center><strong>Contacto Servicios:</strong> </center></br>
								<strong>Director General:</strong> Ing. Francisco Mar del Ángel</br>
								<strong>Teléfono:</strong> (993) 383 4319</br>
								<strong>Correo electrónico:</strong> fmar@rayosxyservicios.com.mx</br></br>

								<strong>Gerencia Operativa:</strong> Ing. Jonathan J. Mar Velázquez</br>
								<strong>Teléfono:</strong> (993) 267 4097</br>
								<strong>Correo electrónico:</strong> Jonathan.mar@rayosxyservicios.com.mx</br></br>

								<center><strong>Contacto Suministro:</strong> </center>
								</br>
								<strong>Director General:</strong> Ing. Francisco Mar del Ángel</br>
								<strong>Teléfono:</strong> (993) 383 4319</br>
								<strong>Correo electrónico:</strong> fmar@rayosxyservicios.com.mx</br></br>

								<strong>Gerencia General:</strong> M.A. Francisco Mar Velázquez</br>
								<strong>Teléfono:</strong> (993) 267 6505</br>
								<strong>Correo electrónico:</strong> Francisco.marv@rayosxyservicios.com.mx</br></br>

								<strong>Ventas:</strong> Arturo Pérez</br>
								<strong>Teléfono:</strong> (993) 3995427</br>
								<strong>Correo electrónico:</strong> arturo.perez@rayosxyservicios.com.mx

							</font>
					</div>
				</div>

				<!-- mapa -->
				<div class="col-md-7">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3780.4012877277223!2d-91.84363198553979!3d18.64598018733609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85f1a82fdf1ef711%3A0x16e7cb5d5df7447b!2sPallas%2C+Cd+del+Carmen%2C+Camp.%2C+M%C3%A9xico!5e0!3m2!1ses!2s!4v1491340158428" width="100%" height="620" frameborder="0" style="border:0" allowfullscreen></iframe>
					</br></br>
				</div>
			</div>
		</section>
		<!-- Footer -->
		<footer>
			<?php include("footer.php"); ?>
		</footer>

		<!-- Librerias js-->
		<script src="js/jquery-1.12.2.min.js"></script>
		<script src="js/bootstrap.min.js"></script>

		<script>
			function habilitar(value){
				if(value=="6"){
					document.getElementById("des").disabled=true;
					document.getElementById("des1").disabled=true;
					document.getElementById("des2").disabled=true;
					document.getElementById("des3").disabled=true;
					document.getElementById("des4").disabled=true;
					document.getElementById("des5").disabled=true;
					document.getElementById("des6").disabled=true;
					document.getElementById("des7").disabled=true;
					document.getElementById("des8").disabled=true;
					document.getElementById("des9").disabled=true;
					alert("Describa su producto en comentario")
				}else {
					document.getElementById("des").disabled=false;
					document.getElementById("des1").disabled=false;
					document.getElementById("des2").disabled=false;
					document.getElementById("des3").disabled=false;
					document.getElementById("des4").disabled=false;
					document.getElementById("des5").disabled=false;
					document.getElementById("des6").disabled=false;
					document.getElementById("des7").disabled=false;
					document.getElementById("des8").disabled=false;
					document.getElementById("des9").disabled=false;

				}
			}
		</script>
	</body>
</html>
