<!DOCTYPE html>
<html>
	<head>
		<?php include("header.php"); ?>
		<link rel="stylesheet" type="text/css" href="css/estilo_capacitaciones.css">
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
					<center><h1><font color="0r1c1e" face="Arial"><strong>¿Quién nos capacita y suministra insumos-equipos?</strong></font></h1></center></br>
				</div>
			
				
			</div> <!--Fin Container-->
			
			<div class="container">
				<!--carrusel galeria-->
				<div id="main_area"></br>
					<!-- Slider -->
					<div class="row">
						<div class="col-sm-6" id="slider-thumbs">
							<!-- Bottom switcher of slider -->
							<ul class="hide-bullets">
								<li class="col-sm-3">
									<a class="thumbnail" id="carousel-selector-0">
										<img src="img/capacitaciones/mycarru0.jpg">
									</a>
								</li>

								<li class="col-sm-3">
									<a class="thumbnail" id="carousel-selector-1"><img src="img/capacitaciones/mycarru1.jpg"></a>
								</li>

								<li class="col-sm-3">
									<a class="thumbnail" id="carousel-selector-2"><img src="img/capacitaciones/mycarru2.jpg"></a>
								</li>

								<li class="col-sm-3">
									<a class="thumbnail" id="carousel-selector-3"><img src="img/capacitaciones/mycarru3.jpg"></a>
								</li>

								<li class="col-sm-3">
									<a class="thumbnail" id="carousel-selector-4"><img src="img/capacitaciones/mycarru4.jpg"></a>
								</li>

								<li class="col-sm-3">
									<a class="thumbnail" id="carousel-selector-5"><img src="img/capacitaciones/mycarru5.jpg"></a>
								</li>
								<li class="col-sm-3">
									<a class="thumbnail" id="carousel-selector-6"><img src="img/capacitaciones/mycarru6.jpg"></a>
								</li>

								<li class="col-sm-3">
									<a class="thumbnail" id="carousel-selector-7"><img src="img/capacitaciones/mycarru7.jpg"></a>
								</li>

								<li class="col-sm-3">
									<a class="thumbnail" id="carousel-selector-8"><img src="img/capacitaciones/mycarru8.jpg"></a>
								</li>

								<li class="col-sm-3">
									<a class="thumbnail" id="carousel-selector-9"><img src="img/capacitaciones/mycarru9.jpg"></a>
								</li>
								<li class="col-sm-3">
									<a class="thumbnail" id="carousel-selector-10"><img src="img/capacitaciones/mycarru10.jpg"></a>
								</li>
							</ul>
						</div>
						<div class="col-sm-6">
							<div class="col-xs-12" id="slider">
								<!-- Top part of the slider -->
								<div class="row">
									<div class="col-sm-12" id="carousel-bounding-box">
										<div class="carousel slide" id="myCarousel">
											<!-- Carousel items -->
											<div class="carousel-inner">
												<div class="active item" data-slide-number="0">
													<a href="http://trainiter.com.mx/" target="black"><img src="img/capacitaciones/mycarru0.jpg"></a></div>

												<div class="item" data-slide-number="1">
													<a href="http://www.alsadosimetria.com.mx/" target="black"><img src="img/capacitaciones/mycarru1.jpg"></a></div>

												<div class="item" data-slide-number="2">
													<a href="http://www.capacitacionypnd.com/" target="black"><img src="img/capacitaciones/mycarru2.jpg"></a></div>

												<div class="item" data-slide-number="3">
													<img src="img/capacitaciones/mycarru3.jpg"></div>

												<div class="item" data-slide-number="4">
													<a href="http://www.llogsa.mx/" target="black"><img src="img/capacitaciones/mycarru4.jpg"></a></div>

												<div class="item" data-slide-number="5">
													<a href="http://www.mazeca.com.mx/" target="black"><img src="img/capacitaciones/mycarru5.jpg"></a></div>
												
												<div class="item" data-slide-number="6">
													<a href="http://tlalnepantla.mexicored.com.mx/suplitec-de-mexico-sa-de-cv.html" target="black"><img src="img/capacitaciones/mycarru6.jpg"></a></div>
												
												<div class="item" data-slide-number="7">
													<a href="http://directory.petrolpost.com/villahermosa/ccti-capacitacion-y-consultoria-en-tecnologia-de-inspeccion-sa-de-cv/training-education/272" target="black"><img src="img/capacitaciones/mycarru7.jpg"></a></div>
												
												<div class="item" data-slide-number="8">
													<a href="http://www.enlazadot.com/S5849/servicios-integrales-ndt-sa-de-cv.html" target="black"><img src="img/capacitaciones/mycarru8.jpg"></a></div>
												
												<div class="item" data-slide-number="9">
													<a href="http://vicont.com.mx/comercializadora/" target="black"><img src="img/capacitaciones/mycarru9.jpg"></a></div>
												
												<div class="item" data-slide-number="10">
													<a href="http://www.zion-ndt.mx/" target="black"><img src="img/capacitaciones/mycarru10.jpg"></a></div>
											</div>
											<!-- Carousel nav -->
											<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
												<span class="glyphicon glyphicon-chevron-left"></span>
											</a>
											<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
												<span class="glyphicon glyphicon-chevron-right"></span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div></br>
				</div></br>
			</div><!--fin container-->

		</section>
		
		<!-- Footer -->
		<footer>
				<?php include("footer.php"); ?>
		</footer>
		
		<!-- Librerias js-->
		<script src="js/jquery-1.12.2.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		
		<!--js de galeria-->
		<script>
			jQuery(document).ready(function($) {

					$('#myCarousel').carousel({
							interval: 5000
					});
			 
					//Handles the carousel thumbnails
					$('[id^=carousel-selector-]').click(function () {
					var id_selector = $(this).attr("id");
					try {
						var id = /-(\d+)$/.exec(id_selector)[1];
						console.log(id_selector, id);
						jQuery('#myCarousel').carousel(parseInt(id));
					} catch (e) {
						console.log('Regex failed!', e);
					}
				});
					// When the carousel slides, auto update the text
					$('#myCarousel').on('slid.bs.carousel', function (e) {
							 var id = $('.item.active').data('slide-number');
							$('#carousel-text').html($('#slide-content-'+id).html());
					});
			});
		</script>
	</body>
</html>