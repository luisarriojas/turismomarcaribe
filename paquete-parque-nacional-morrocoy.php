<?php
ob_start('ob_gzhandler');
?>
<!doctype html>
<head>
	<?php
	$metaDescription = "";
	$metaKeywords = "";
	$metaTitle = "Paquetes Turísticos a la Parque Nacional Morrocoy";

	include ("metatags.php");

	include ("style-script.php");
	?>
</head>
<body>
	<?php
	include ("google-analytics.php");

	include ("header.php");
	?>

	<div id="packContainer">
		<div id="packColumn1">
			<div class="packInfo">
				<h1 id="packH1"><?php echo $metaTitle; ?></h1>

				<p class="packP">
					El Parque Nacional “Morrocoy” es un monumento natural venezolano conocido por sus hermosos arrecifes coralinos que se extienden por 32.090 hectáreas en la costa noroeste del país conocida como el Golfo Triste en el Estado Falcón. Aquí están representados varios de los ecosistemas más importantes del país. Morrocoy, como comúnmente se le llama, posee áreas naturales que no han sido alteradas por la acción humana y en donde las especies vegetales y animales, las condiciones geomorfológicas y los habitats son de especial interés para la ciencia, la educación y la recreación. Turismo Mar Caribe te lleva a éste hermoso parque natural donde podrás disfrutar de cómodos y convenientes alojamientos para todas las posibilidades económicas, desde posadas tipo estándar hasta hoteles cinco estrellas.
				</p>

				<p class="packP">
					Su temperatura promedio es de 30 grados centígrados, y posee playas ricas en arrecifes coralinos y aguas cristalinas de belleza incomparable. Playas, lagunas, cuevas, pantanos e islas son los componentes de este escenario rodeado de hermosos manglares. Entre los Cayos y Playas más famosos podemos encontrar a Cayo Borracho, Cayo Pelón, Cayo Sombrero, Cayo Sal, Playuela, Playuelita, Peraza, Punta Brava, Mallorquina, Los Muertos y Paiclá. Otros sitios interesantes a visitar son la "la Cueva de la Virgen" y "la Cueva del Indio", donde encuentran petroglifos hechos por indígenas venezolanos nativos de esa zona.
				</p>

				<p class="packP">
					Por su condición de parque terrestre, marino y submarino, Morrocoy ofrece una amplia y variada gama de actividades para la recreación al aire libre: ski acuático, submarinismo, windsurfing, kitesurfing, snorkeling y fotografía ecológica.
				</p>

				<p class="packP">
					El Parque Nacional Morrocoy  además de su agradable clima de playa con un sol tropical único, ofrece todo el año una gama de hoteles, posadas y restaurantes, de variados estilos para todos los gustos, por su ubicación cercana a las grandes ciudades del país, la costa oriental de Falcón es un destino de gran afluencia para el turismo nacional e internacional.
				</p>
			</div>

			<div class="packInfo">
				<?php
				include ("paquete-parque-nacional-morrocoy-relacionados.php");
				?>
			</div>
		</div>

		<div class="space"></div>
	</div>

	<?php
	include ("footer.php");
	?>
</body>