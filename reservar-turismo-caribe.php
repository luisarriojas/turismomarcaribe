<?php
ob_start('ob_gzhandler');
?>
<!doctype html>
<head>
	<?php
	$metaDescription = "";
	$metaKeywords = "";
	$metaTitle = "Contáctenos";

	include ("metatags.php");

	include ("style-script.php");
	?>
</head>
<body>
	<?php
	include ("google-analytics.php");

	include ("header.php");

	if (isset($_SESSION['error_message'])) {
		echo '<div id="error">';
		echo '<div id="content">';
		echo $_SESSION['error_message'];
		echo '<div id="close_button">';
		echo '<input type="button" value="OK" onclick="div_delete(\'error\')" />';
		echo '</div>';
		echo '<div id="space"></div>';
		echo '</div>';
		echo '</div>';
		unset($_SESSION['error_message']);
	}
	?>

	<div id="contactContainer">
		<h1 id="contactH1">Contáctenos</h1>
		<p class="contactP">
			Puede comunicarse con nosotros por los siguientes medios.
		</p>

		<h2 class="contactH2">Horario de atención</h2>
		<p class="contactP">
			De Lunes a Viernes de 8:30am - 12:00m, y de 2:00pm - 5:00pm
		</p>

        <br><br><br><br><br><br><br><br>
		<h2 class="contactH2">Correos</h2>
		<ul class="contactUL">
			<li>
				Ventas, pago y facturación:
				<p class="contactP">
					turismomarcaribe.ve@gmail.com
				</p>
			</li>
		</ul>

		<h2 class="contactH2">Teléfonos</h2>
		<ul class="contactUL">
			<li>
				<p class="contactP">
					+58(241)921.4103
				</p>
			</li>
			<li>
				<p class="contactP">
					+58(412)848.2879
				</p>
			</li>
<li>
				<p class="contactP">
					+58(412)449.1995
				</p>
			</li>
		</ul>

		<br />
		<br />

		<br><br><br><br><br><br>
		<form id="contactForm" method="post" action="enviar-cotizacion.php">
			<span id="contactTitle">Cotizador online</span>

			<input type="hidden" name="id" value="<?php echo $metaTitle; ?>" />
			<?php
			include ("cotizador.php");
			?>
		</form>
	</div>

	<?php
	include ("footer.php");
	?>
</body>
