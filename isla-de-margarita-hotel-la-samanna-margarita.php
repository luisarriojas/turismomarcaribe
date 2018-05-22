<?php
ob_start('ob_gzhandler');
?>
<!doctype html>
<head>
    <?php
    $metaDescription = "";
    $metaKeywords = "";
    $metaTitle = "Hotel La Samanna Margarita (5&#9733;)";

    include ("metatags.php");

    include ("style-script.php");
    ?>
</head>
<body>
    <?php
    include ("google-analytics.php");

    include ("header.php");

    if (isset($_SESSION['error_message'])) {
        include ("error-message.php");
    }
    ?>

    <div id="packContainer">
        <div id="packColumn1">
            <div class="packInfo">
                <h1 id="packH1"><?php echo $metaTitle; ?></h1>

                <p class="packP">
                    Es un hotel de lujo proyectado según los más altos estándares europeos. Las habitaciones, todas con terrazas con vista al mar, ofrecen un sofisticado confort
                </p>

                <p class="packP">
                    El Centro de Thalassoterapia en La Samanna de Margarita está dotado de equipos de la más avanzada tecnología, y de un personal instruido y capacitado en Francia.
                </p>

                <p class="packP">
                    A través de los programas personalizados de Thalassoterapia y estética, se logra un perfecto equilibrio del cuerpo y el espíritu, combinando los efectos del mar, del aire y de productos marinos 100% naturales.
                </p>
            </div>

            <div class="packInfo">
                <h2 class="packH2"><?php echo $metaTitle; ?> ofrece</h2>

                <ul class="packUL">
                    <li>
                        67 habitaciones y suites. Entre ellas está la Suite Paraiso en el P.H. en un área de 200 mts. cuadrados, 03 habitaciones, 03 baños, cocina, star tipo churuata, bar, piscina privada tipo jacuzzi y vista al mar.
                    <li>
                        Restaurante Acuapazza que ofrece toda la variedad de comida Nacional e Internacional. Ubicado al lado de la piscina y abierto las 24 horas del día.
                    </li>
                    <li>
                        Teléfono
                    </li>
                    <li>
                        Secador de cabello
                    </li>
                    <li>
                        Bañeras esmaltadas con agua dulce y agua de mar
                    </li>
                    <li>
                        Televisión satelital de 20"
                    </li>
                    <li>
                        Mini bar con nevera
                    </li>
                    <li>
                        Caja de seguridad
                    </li>
                    <li>
                        Aire acondicionado central y balcones.
                    </li>
                    <li>
                        Restaurant Nikkei, exclusivo restaurante con un menú exótico y saludable basado en una maravillosa mezcla de las culturas japonesa y peruana. Platos especializados en pescados y mariscos en la mejor tradición de la cocina internacional. Tiene capacidad para 80 personas aproximadamente más una sala para eventos privados para 24 personas .
                    </li>
                    <li>
                        Salón de conferencias con capacidad máxima de 250 personas.
                    </li>
                    <li>
                        Bar Naturista con jugos y ensaladas de frutas naturales
                    </li>
                    <li>
                        Total seguridad.
                    </li>
                </ul>
            </div>

            <div class="packAlert">
                <p class="packP">
                    "NO INCLUYE BOLETO AEREO".
                </p>
                <p class="packP">
                    El pasaje aéreo se cotiza por separado.
                </p>
            </div>

            <div class="packInfo">
                <?php
                include ("paquete-isla-margarita-relacionados.php");
                ?>
            </div>
        </div>

        <div id="packColumn2">
            <?php
            $formFull = TRUE;
            $formUrl = $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF'];
            include ("cotizador.php");
            ?>

            <div id="packPhotos">
                <?php
                $base = "hotel-la-samanna-de-margarita";
                $q = 8;

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