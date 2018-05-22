<?php
ob_start('ob_gzhandler');
?>
<!doctype html>
<head>
	<?php
	$metaDescription = "";
	$metaKeywords = "";
	$metaTitle = "Paquetes Turísticos a la Isla de Coche";

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
					En Turismo Mar Caribe, C.A. ofrecemos varias alternativas a la hora de escoger el  alojamiento que más le conviene en la bella Isla de Coche en el Estado Nueva Esparta. Aquí existen hoteles y posadas donde se ofrecen casi siempre planes “Todo Incluído”. Nuestros proveedores en hotelería tienen como norte ofrecer excelente servicio a través de la experiencia  turística en todas las zonas costeras del Estado Nueva Esparta, como son las Isla de Margarita y Coche, donde nuestros visitantes, tanto nacionales como extranjeros, gozarán de buen trato, tranquilidad, privacidad y confort a precios muy razonables.
				</p>

				<p class="packP">
					La Isla de Coche es absolutamente apacible donde su actividad turística se concentra en Playa La Punta. La arena es blanca, el mar transparente, el sol implacable, motos de agua, kayaks y diversiones acuáticas por donde Ud. mire. También se ofrecen paseos por la isla en camioncitos, bicicletas montañeras y motos de 4 ruedas.
				</p>

				<p class="packP">
					Algo interesante sobre la Isla de Coche y es que al contrario de su hermana mayor, la isla de Margarita, no tiene grandes centros comerciales, ni tiendas, ni discotecas, ni casinos... Seguramente usted ya debe estar cambiando de parecer en cuanto a su deseo de visitar la isla, pero lo cierto es que la isla de Coche es realmente encantadora. Quienes la visitan por un par de días, terminan quedándose mucho más tiempo. Sus playas son espectaculares. Sus aguas son claras y sin oleaje, de un intenso color azul con espléndidos tonos turquesa; sus arenas, blancas y muy suaves al tacto, son barridas constantemente por los vientos alisios del noreste, los cuales soplan todo el año sobre la isla disminuyendo considerablemente la sensación de calor y los hermosos atardeceres que sólo Ud. disfrutará en ésta bella Isla.
				</p>
			</div>

			<div class="packInfo">
				<h2 class="packH2">Sitios de interés en la Isla de Coche</h2>

				<ul class="packUL">
					<li>
						El Cementerio de las Conchas
					</li>
					<li>
						Las Camaroneras
					</li>
					<li>
						Las Salinas
					</li>
					<li>
						La Cueva del Piache
					</li>
					<li>
						La Plaza Bolívar y su Iglesia
					</li>
				</ul>
			</div>

			<div class="packInfo">
				<?php
				include ("paquete-isla-de-coche-relacionados.php");
				?>
			</div>
		</div>

		<div class="space"></div>
	</div>

	<?php
	include ("footer.php");
	?>
</body>
