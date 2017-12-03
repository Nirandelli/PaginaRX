<!DOCTYPE html>
<html>
	<head>
		<?php include("header.php"); ?>
		<link rel="stylesheet" type="text/css" href="css/estilo_somos.css">
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
					<center><h1><font color="0c1a1e" face="arial"><strong>¿Quiénes somos?</strong></font></h1></center>
				</div>
				<div class="col-md-6">
					<div class="thumbnail" id="somos">
						
						<img src="img/Nosotros/QSomos.png" id="qsomos">
						<center><font color="0c1a1e" size="5"><strong>¿Quiénes somos?</strong></font></center></br>
						<p class="panel-body">
						<font color="0c1a1e">
							<strong>
								<i>
								Somos una empresa joven con experiencia de 10 años en el mercado, en crecimiento, comprometida con 
								la calidad y la seguridad, formadora de su personal, inculcando en ella la filosofía del bien hacer,
								cumpliendo con los estándares solicitados por el cliente respecto a puntualidad en los servicios y 
								entrega de reportes, así como en la veracidad de los resultados entregados.
								</i>
							</strong>
						</font>
						</p>
					</div>
				</div>
				
				<div class="col-md-6">
					<div class="thumbnail" id="somos">
						<img src="img/Nosotros/Hacemos.png"  id="qsomos">
						<center><font color="0c1a1e" size="5"><strong>¿Qué hacemos?</strong></font></center></br>
						<p class="panel-body">
						<font color="0c1a1e">
							<strong>
								<i>
								Estamos incursionando en generar la cultura preventiva en relación a la inspección en 
								ganchos de las grúas y elementos que estén sometidos a algún esfuerzo como las extensiones,
								estabilizadores y chasises. Es importante, ya que en primera instancia estamos salvaguardando 
								la integridad física de nuestros equipos, el de nuestros clientes y sobre todo, vidas que 
								pudieran estar en riesgo en caso de algún incidente.
								</i>
							</strong>
						</font>
						</p>
					</div></br>
				</div>
				
				<!--submenu-->
				<div class="btn-group btn-group-justified" role="group" aria-label="...">
				  <div class="btn-group" role="group">
					<a href="quienes_somos.php"> <button type="button" class="btn btn-info"><strong>¿Quiénes somos?</strong></button></a>
				  </div>
				  <div class="btn-group" role="group">
					<a href="mision_vision.php"> <button type="button" class="btn btn-info"><strong>Misión y Visión</strong></button></a>
				  </div>
				  <div class="btn-group" role="group">
					<a href="politica_salud.php"> <button type="button" class="btn btn-info"><strong>Política de salud</strong></button></a>
				  </div>
				</div></br>
			</div>			
					
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