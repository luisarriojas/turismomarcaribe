<?php
ob_start('ob_gzhandler');
?>
<!doctype html>
<head>
	<?php
	$metaDescription = "";
	$metaKeywords = "";
	$metaTitle = "Paquetes Turísticos a la Península de Paraguaná";

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
					Turismo Mar Caribe te lleva a Paraguaná en el Estado Falcón con opciones para que Ud. y su familia conozcan y disfruten de bellos paisajes, hermosas playas y puedan realizar compras de artículos importados a precios de Puerto Libre.
				</p>

				<p class="packP">
					La Península de Paraguaná se ubica en la zona noroccidental de Venezuela, al extremo norte del Estado Falcón.  Constituye la porción del territorio continental sudamericano más septentrional y adentrado al Mar Caribe, con una población de cerca de 880.000 habitantes. Por su posición geográfica, frente al Mar Caribe, con más de 280 Kilómetros de costas, numerosos atractivos naturales y arquitectónicos, aunado a la calidad de los servicios que se ofertan, la Península de Paraguaná se ha convertido en unos de los lugares más  atractivos del país para el disfrute en familia y amigos.
				</p>

				<p class="packP">
					En la Península de Paraguaná se encuentra Coro, capital del Estado Falcón, declarado por la UNESCO como Patrimonio Histórico de la Humanidad, los Médanos de Coro, la Refinería de Amuay, el con su complejo refinador de petróleo más grande del mundo, las salinas de Curimagua con su color rojizo, el Cerro de Santa Ana, iglesias coloniales que datan del siglo XVI, variedad de artesanía y gastronomía que deleita los paladares, hacen de Paraguaná el lugar ideal para disfrutar de sus vacaciones. Pero no sólo Ud. disfrutará de sus bellezas naturales sino que podrá realizar compras a precios de Zona Libre ya que cuenta con un régimen fiscal especial que la hace única en Venezuela.
				</p>

				<p class="packP">
					Esta región representa una alternativa para el turismo familiar, ecológico, deportivo y cultural que hacen de ella un sitio ideal por excelencia.
				</p>
			</div>

			<div class="packInfo">
				<?php
				include ("paquete-peninsula-paraguana-relacionados.php");
				?>
			</div>
		</div>

		<div class="space"></div>
	</div>

	<?php
	include ("footer.php");
	?>
</body>