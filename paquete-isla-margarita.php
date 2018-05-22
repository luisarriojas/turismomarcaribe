<?php
ob_start('ob_gzhandler');
?>
<!doctype html>
<head>
	<?php
	$metaDescription = "";
	$metaKeywords = "";
	$metaTitle = "Paquetes Turísticos a la Isla de Margarita";

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
					En Turismo Mar Caribe, C.A. ofrecemos varias alternativas a la hora de escoger el  alojamiento que más le conviene en la bella Isla de Margarita, cualquiera que sea el motivo de su viaje; Vacaciones, compras o negocios. Nuestros proveedores en hotelería tienen como norte ofrecer excelente servicio a través de la experiencia  turística en toda la zona costera del Estado Nueva Esparta, donde nuestros visitantes, tanto nacionales como extranjeros, gozarán de buen trato, tranquilidad, privacidad y confort a precios muy razonables.
				</p>

				<p class="packP">
					Es por eso que sus vacaciones en la Isla de Margarita serán mejores con Turismo Mar Caribe ya que contamos con varias opciones en hoteles y posadas alrededor de toda la isla porque tenemos las mejores ofertas; bien sea para paquetes “Todo Incluído” o sólo  por ocupación diaria.
				</p>

				<p class="packP">
					Margarita es una isla  situada en el Mar Caribe al Oriente de Venezuela. Es uno de los destinos turísticos preferidos de Venezuela y de creciente popularidad en varios países extranjeros. Margarita es reconocida por la calidad de sus playas y las actividades que se realizan anualmente a nivel internacional, tales como el Winsurfing y Kitesurfing. Existen playas para todos los gustos ya que cuentan con una gran diversidad de servicios para el turista.
				</p>

				<p class="packP">
					Por muchas razones, la Isla de Margarita es considerada como lugar excelente para pasear: Ofrece castillos, iglesias, atractivos naturales, excelentes restaurantes, bellos centros comerciales para realizar compras a muy buenos precios por su condición de puerto libre porque no se paga impuesto.
				</p>
			</div>

			<div class="packInfo">
				<?php
				include ("paquete-isla-margarita-relacionados.php");
				?>
			</div>
		</div>

		<div class="space"></div>
	</div>

	<?php
	include ("footer.php");
	?>
</body>
