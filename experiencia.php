<!DOCTYPE html>
<html>
	<head>
		<?php include("header.php"); ?>
	</head>
	<body>			
		<!-- Header -->
		<header>
			<?php include("navbar.php"); ?>
			<link rel="stylesheet" type="text/css" href="css/estilo_experiencia.css">
		</header>
		
		<!-- Content -->
		<section>
			<div class="container"> <!-- Inicio Container-->
			
				<!--Eslogan-->
				<div class="col-md-12">
					<center><h1><font color="0r1c1e"><strong>Experiencia Laboral</strong></font></h1></center>
				</div>
			
				<div class="col-md-6">
					<div class="panel panel-default" id="cpanel"></br>
					  <h4><center><font color="0r1c1e"><strong>POR QUÉ CONTRATARNOS?</strong></font></center></h4>
					  <div class="panel-body">
						<font color="#0r1c1e">
							<i>
							Somos una empresa joven con experiencia de 9 años en el mercado, en crecimiento, comprometida
							con la calidad y la seguridad, formadora de su personal, inculcando en ella la filosofía del
							bien hacer, cumpliendo con los estándares solicitados por el cliente respecto a puntualidad en
							los servicios y entrega de reportes, así como en la veracidad de los resultados entregados.</br></br>

							Rayos X y Servicios Industriales S.A. de C.V. cuenta con todos los permisos otorgados por la
							Secretaría de Energía, a través de nuestro organismo regulador la CNSNS (Comisión Nacional de 
							Seguridad Nuclear y Salvaguardas), por lo que nuestros integrantes son POE (Personal
							Ocupacionalmente Expuesto) autorizados.</br></br>
							
							Nuestro equipo de trabajo es joven, propositivo, innovador, han adquirido la experiencia necesaria
							para estar al frente de los trabajos, ya que han pasado por un proceso de formación en campo, 
							complementada por la parte teórica de la capacitación en aulas de empresas acreditadas para impartir cursos 
							de Ensayos No Destructivos.</br></br></br></br>
							</i>
						</font>
					  </div>
					</div>
				</div>	

				<!--video-->
				<div class="col-md-6">
					<div class="panel panel-default responsive hidden-xs" id="panelvideo"></br>
						<h4><center><font color="0r1c1e"><strong>Experiencia Laboral</strong></font></center></h4>
						<!--<object type="application/x-shockwave-flash" width="560" height="450" data="img/Diapositiva.swf">
						</object>
						<param name="movie" value="img/Diapositiva.swf">
						</param>
						<video src="img/NS-464.mp4" type="video/mp4" poster="img/servicio.jpg" width="550" height="450" autoplay loop controls></video>
						-->
						<center><video src="img/experiencia.mp4" type="video/mp4" width="535" height="418" autoplay loop></video></center>
					</div>
					<div class="panel panel-default responsive visible-xs" id="panelvideo"></br>
						<h4><center><font color="0r1c1e"><strong>Experiencia Laboral</strong></font></center></h4>
						<center><video src="img/experiencia.mp4" type="video/mp4" width="200" height="180" autoplay loop></video></center>
					</div></br>
				</div>
				
			</div> <!--fin Container-->
		</section>
		<!-- Footer -->
		<footer>
				<?php include("footer.php"); ?>
		</footer>
		
		<!-- Librerias js-->
		<script src="js/jquery-1.12.2.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	
	</body>
</html>