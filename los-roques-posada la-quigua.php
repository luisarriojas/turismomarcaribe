<?php
ob_start('ob_gzhandler');
?>
<!doctype html>
<head>
    <?php
    $metaDescription = "";
    $metaKeywords = "";
    $metaTitle = "Posada La Quigua (SUPERIOR)";

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
                    Esta posada está fabricada con un estilo totalmente tradicional  venezolano, con su estructura de madera de teca, y de todas las aplicaciones modernas necesarias para disfrutar de su estancia. Esta posada  cuenta con 6 habitaciones con capacidad máxima para 14 personas. Hay 2 habitaciones triples (Una cama KING y una cama individual), 3 habitaciones dobles, con 1 cama Queen size y 1 habitación con 2 camas individuales. Todas ellas con baño privado, aire Acondicionado y ventilador de techo.
                </p>

                <p class="packP">
                    En cuanto a gastronomía se refiere tienen una excelente cocina mixta preparada por el chef. A los huéspedes se les prepara  las 3 comidas al día y todas las bebidas se incluyen con vino en la cena.
                </p>

                <p class="packP">
                    Durante al paseo a la playa se incluye almuerzo, cavas con hielo y bebidas nacionales, toldos y sillas de playa, traslados a cayos cercanos al Gran Roque.  La cena está siempre llena de opciones, dependiendo de lo más fresco, pero siempre hay  pescado o carne, y un plato de pasta o de arroz, así como de ensaladas y postres. Las comidas son compartidas en torno a los huéspedes alojados en la mesa con capacidad para doce invitados.
                </p>
            </div>

            <div class="packInfo">
                <h2 class="packH2">Planes en <?php echo $metaTitle; ?></h2>

                <ul class="packUL">
                    <li style="margin-bottom:5px;">
                        <span class="packLITitle">2 DIAS 1 NOCHE</span>
                    </li>
                    <li style="margin-bottom:5px;">
                        <span class="packLITitle">NOCHE ADICIONAL </span>
                    </li>
                    <li style="margin-bottom:5px;">
                        <span class="packLITitle">PENSION COMPLETA SIN EXCURSIONES</span><br /><br />
                    </li>
                    <li style="margin-bottom:5px;">
                        <span class="packLITitle">MEDIA PENSION</span>
                    </li>
                    <li style="margin-bottom:5px;">
                        <span class="packLITitle">BED AND BREAKFAST</span>
                    </li>
                    <li style="margin-bottom:5px;">
                        <span class="packLITitle">PLAN TODO INCLUIDO</span>
                    </li>
                </ul>
            </div>

            <div class="packInfo">
                <?php
                include ("paquete-los-roques-relacionados.php");
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
                $base = "posada-la-quigua";
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