<?php
ob_start('ob_gzhandler');
?>
<!doctype html>
<head>
	<?php
	$metaDescription = "";
	$metaKeywords = "";
	$metaTitle = "Paquetes Turísticos al Archipiélago \"Los Roques\"";

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
					En Turismo Mar Caribe, C.A.  lo lleva al Archipiélago de Los Roques, uno de los destinos más buscado por los que conocen las playas del mundo. Es un conjunto de cayos hermosísimos que conforman el único atolón de toda la América. Allí encontrará belleza, relax, excelente comida y bebidas y lo más importante, el trato cálido de sus habitantes, la mayoría de ellos pescadores llegados de la Isla de Margarita.
				</p>

				<p class="packP">
					Desde su llegada, lo llevaremos a cualquier de los cayos, bien sea Madrisquí ó Francisquí donde abundan los servicios de comida, buceo, snorkeling, pesca en botes, windsurfing y alquiler de veleros. Conocerá El Gran Roque con sus bellas posadas, restaurantes con comida de mar fresquísima; la capilla del Gran Roque, el antiguo Faro, la Fundación Científica Los Roques donde observará la cría de bellas y protegidas tortugas, el Paradero Arqueológico, entre otras cosas interesantes.
				</p>
			</div>

			<div class="packInfo">
				<h2 class="packH2">Itinerario de <?php echo $metaTitle; ?></h2>

				<ol class="packOL">
					<li>
						Vuelo en la mañana hacia Los Roques, dependiendo de la programación del vuelo (existen vuelos desde el Aeropuerto  Internacional Simón Bolívar (Terminal Nacional) en Maiquetía, Aeropuerto Internacional Santiago Mariño (Isla de Margarita) y Aeropuerto Internacional Arturo Michelena (Valencia).
					</li>
					<li>
						Llegada al Archipiélago de Los Roques donde será recibido por un guía políglota y trasladado al muelle para tomar una  lancha a los cayos cercanos al Gran Roque.
					</li>
					<li>
						Servicio de sillas, toldos y toallas (de acuerdo al plan seleccionado).
					</li>
					<li>
						Se ofrecerá un paseo en lancha para visitar uno o dos cayos alrededor del Gran Roque y podrá disfrutar de una fabulosa playa de arenas blancas y aguas cristalinas. Desde allí, las personas que así lo deseen, serán trasladadas hacia alguno de los multicolores arrecifes coralinos que rodean a estos cayos para realizar la actividad acuática de snorkeling o buceo (costo adicional)
					</li>
					<li>
						Al mediodía será servido el almuerzo tipo lunch (de acuerdo al plan seleccionado)
					</li>
					<li>
						Alojamiento en posadas en cómodas habitaciones (de acuerdo al plan seleccionado).
					</li>
					<li>
						Desayunos y cenas servidos en el restaurante de la posada (de acuerdo al plan seleccionado).
					</li>
					<li>
						Traslados diarios a los cayos más cercanos
					</li>
					<li>
						Visitas a zonas de interés en el Archipiélago Los Roques.
					</li>
					<li>
						El último día de estadía en el Gran Roque será conducido al aeropuerto en horas de la tarde.
					</li>
					<li>
						Despegue hacia el aeropuerto de su destino (aproximadamente entre 4:00 y 4:30 p.m).
					</li>
					<li>
						Llegada al aeropuerto de origen.
					</li>
				</ol>
			</div>

			<div class="packAlert">
				<p class="packP">
					"NO INCLUYE BOLETO AEREO".
					<br />
					El pasaje aéreo se cotiza por separado.
				</p>

				<p class="packP">
					Nota: Cada pasajero podrá llevar en el avión máximo hasta 10 kg. de equipaje. Es muy importante llevar efectivo para el pago de impuestos, pago de entrada al Parque Nacional Archipiélago “Los Roques", propinas, etc.
				</p>
			</div>

			<div class="packInfo">
				<?php
				include ("paquete-los-roques-relacionados.php");
				?>
			</div>
		</div>

		<div id="packColumn2">
			<div id="packPhotos">
				<?php
				$base = "los-roques";
				$q = 4;

				include ("album-fotos.php");
				?>

				<div class="space"></div>
			</div>
		</div>

		<div class="space"></div>
	</div>

	<?php
	include ("footer.php");
	?>
</body>