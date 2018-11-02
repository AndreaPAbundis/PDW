<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Corporativo</title>
	<link href="./styles/main.css" rel="stylesheet">
	<link rel="stylesheet" href="swiper/dist/css/swiper.min.css">
  </head>
  <!--<div id="carga">
    <img src="images/carga.gif"/>
  </div>  onload="setTimeout(cargar, 1200);"-->
  <body>

    <div class="ia-workspace" id="inicio">
        <?php include("navbar.php"); ?>
		<div class="hero-content">
   		<div class="hero-image">
			<img src="https://dummyimage.com/1200x800/000/fff">
       </div>
     </div>
		<div class="nosotros_content" id="nosotros">
			<div class="img">
			<img src="https://dummyimage.com/510x288/000/fff">
		</div>
			<div class="title_and_text">
				<h1>_Nosotros</h1>
				<p>Somos una empresa dedicada a brindar servicio a otras empresas y realizamos ventas de nuestros productos</p>
				<p>Desde 1990 estamos en el mercado y somos una empresa 100% mexicana.</p>
			</div>
		</div>
		<div class="servicios-content" id="servicios">
			<h1>_Servicios</h1>
			<div class="services">
			<div class="service">
				<img src="https://dummyimage.com/340x267/000/fff">
				<h2>Mantenimiento</h2>
				<p>Nos dedicamos a brindar mantenimiento y reparar cualquier tipo de elevador que desee.</p>
			</div>
			<div class="service">
				<img src="https://dummyimage.com/340x267/000/fff">
				<h2>Venta</h2>
				<p>Contamos con una gran variedad de modelos para que elijas la mejor opción para ti.</p>
			</div>
			<div class="service">
				<img src="https://dummyimage.com/340x267/000/fff">
				<h2>Consulta</h2>
				<p>Ayudamos a dar asesorias a empresas para auxiliarlos en cual es la mejor opción para su compra.</p>
			</div>
			</div>
		</div>
		<div class="slider" id="clientes">
   		 <h1>_CLIENTES</h1>
		<?php include("slider.php"); ?>
		</div>
    <?php include("footer.php"); ?>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="scripts/ripple.js"></script>
	<script src="scripts/header.js"></script>
	<script src="scripts/mobilMenu.js"></script>
    <script src="swiper/dist/js/swiper.min.js"></script>
</body>
</html>
