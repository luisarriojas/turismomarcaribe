<div id="packForm">
	<form method="post" action="enviar-cotizacion.php">
		<input type="hidden" name="id" value="<?php echo $metaTitle; ?>" />
		<input type="hidden" name="url" value="<?php echo $formUrl; ?>" />

		<h3 class="packH3">Cotizador online</h3>

		<input type="text" name="contactName" placeholder="Nombres y Apellidos (OBLIGATORIO)" class="contactInput" title="Nombres y Apellidos (OBLIGATORIO)" />
		<input type="text" name="contactPhone" placeholder="Teléfono (OBLIGATORIO)" class="contactInput" title="Teléfono (OBLIGATORIO)" />
		<input type="text" name="contactEmail" placeholder="Email (OBLIGATORIO)" class="contactInput" title="Email (OBLIGATORIO)" />
		<?php
			if (isset($formFull)) {
				echo '<input type="text" name="formCheckInDate" placeholder="Fecha de Entrada (OBLIGATORIO)" class="contactInput" title="Fecha de Entrada (OBLIGATORIO)" />';
				echo '<input type="text" name="formCheckOutDate" placeholder="Fecha de Salida (OBLIGATORIO)" class="contactInput" title="Fecha de Salida (OBLIGATORIO)" />';
				echo '<input type="text" name="formQAdults" placeholder="Cantidad de Adultos (OPCIONAL)" class="contactInput" title="Cantidad de Adultos (OPCIONAL)" />';
				echo '<input type="text" name="formQChilds" placeholder="Cantidad de Niños (OPCIONAL)" class="contactInput" title="Cantidad de Niños (OPCIONAL)" />';
			}
		?>
		<textarea name="contactObservations" placeholder="Observaciones (OBLIGATORIO)" class="contactInput" title="Observaciones (OBLIGATORIO)"></textarea>				
        
 <input type="submit" value="Solicitar información" id="contactSubmit" />
	</form>
</div>