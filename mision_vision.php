<!DOCTYPE html>
<html>
	<head>
		<?php include("header.php"); ?>
		<link rel="stylesheet" type="text/css" href="css/estilo_mision_vision.css">
		<style>
    #slides {
      display: none
    }

    #slides .slidesjs-navigation {
      margin-top:5px;
    }

    a.slidesjs-next,
    a.slidesjs-previous,
    a.slidesjs-play,
    a.slidesjs-stop {
      background-image: url(img/btns-next-prev.png);
      background-repeat: no-repeat;
      display:block;
      width:12px;
      height:18px;
      overflow: hidden;
      text-indent: -9999px;
      float: left;
      margin-right:5px;
    }

    a.slidesjs-next {
      margin-right:10px;
      background-position: -12px 0;
    }

    a:hover.slidesjs-next {
      background-position: -12px -18px;
    }

    a.slidesjs-previous {
      background-position: 0 0;
    }

    a:hover.slidesjs-previous {
      background-position: 0 -18px;
    }

    a.slidesjs-play {
      width:15px;
      background-position: -25px 0;
    }

    a:hover.slidesjs-play {
      background-position: -25px -18px;
    }

    a.slidesjs-stop {
      width:18px;
      background-position: -41px 0;
    }

    a:hover.slidesjs-stop {
      background-position: -41px -18px;
    }

    .slidesjs-pagination {
      margin: 7px 0 0;
      float: right;
      list-style: none;
    }

    .slidesjs-pagination li {
      float: left;
      margin: 0 1px;
    }

    .slidesjs-pagination li a {
      display: block;
      width: 13px;
      height: 0;
      padding-top: 13px;
      background-image: url(img/pagination.png);
      background-position: 0 0;
      float: left;
      overflow: hidden;
    }

    .slidesjs-pagination li a.active,
    .slidesjs-pagination li a:hover.active {
      background-position: 0 -13px
    }

    .slidesjs-pagination li a:hover {
      background-position: 0 -26px
    }

    #slides a:link,
    #slides a:visited {
      color: #333
    }

    #slides a:hover,
    #slides a:active {
      color: #9e2020
    }
  </style>
   
	</head>
	<body>
		<!-- Header -->
		<header>
			<?php include("navbar.php"); ?>
		</header>
		
		<!-- Content -->
		<section>
			<div class="container"> <!-- Inicio Container-->
			
				<!--Eslogan-->
				<div class="col-md-12">
					<center><h1><font color="0c1a1e" face="arial"><strong>Misión y Visión</strong></font></h1></center>
				</div>
			
				<div class="col-md-6">
					<div class="panel panel-default">
					  <div class="panel-body" id="m_v">
						<font color="#0c1a1e">
							<strong>
								<center><h2>Misión</h2></center></br>
								<i>
								<font color="0c1a1e">
								Generar servicios, transformar y comercializar  en forma eficiente el Servicio de Inspección No Destructiva, 
								así como nuestros productos a la Industria Nacional, fomentando la diversificación productiva que propicie 
								un valor agregado a cada uno de nuestros Clientes, siendo promotores de la tecnología de punta y apuntalando 
								la economía tanto del Estado como del País.</br>
								</font>
								</i>
							</strong>
						</font>
					  </div>
					</div>
					
					<div class="panel panel-default">
					  <div class="panel-body" id="m_v">
						<font color="#0c1a1e">
							<strong>
								<center><h2>Visión</h2></center></br>
								<i>
								<font color="0c1a1e">
								Posicionar a Rayos X y Servicios Industriales S.A. de C.V. como empresa líder en la aplicación de 
								Ensayos No Destructivos y soluciones vía el suministro a las instalaciones petroleras y de la 
								iniciativa privada en la República Mexicana, proporcionando el servicio requerido, dentro de las 
								normas de calidad y seguridad que  satisfagan a todos nuestros Clientes.
								</font>
								</i>
							</strong>
						</font>
					  </div>
					</div>
				</div>
				
				<!--slides-->
				<div class="col-md-6">
					<div id="slides">
						<img src="img/Nosotros/MV1.jpg" alt="" height="100%" width="40%">
						<img src="img/Nosotros/MV2.jpg" alt="" height="100%" width="40%">
						<img src="img/Nosotros/MV3.jpg" alt="" height="100%" width="40%">
						<img src="img/Nosotros/MV4.jpg" alt="" height="100%" width="40%">
					</div></br></br>
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
			</div> <!--Fin Container-->
		<!-- Footer -->
		<footer>
				<?php include("footer.php"); ?>
		</footer>
		
		<!-- Librerias js-->
		<script src="js/jquery-1.12.2.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.slides.min.js"></script>
		<script>
			$(function() {
			  $('#slides').slidesjs({
				width: 940,
				height: 710,
				play: {
				  active: true,
				  auto: true,
				  interval: 4000,
				  swap: true
				}
			  });
			});
		</script>
		
	</body>
</html>