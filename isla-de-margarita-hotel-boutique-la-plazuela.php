<?php
ob_start('ob_gzhandler');
?>
<!doctype html>
<head>
    <?php
    $metaDescription = "";
    $metaKeywords = "";
    $metaTitle = "Hotel Boutique La Plazuela - La Asunción (5&#9733;)";

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
                    El Hotel Boutique La Plazuela es un lugar con características propias en donde nuestros visitantes tanto nacionales como extranjeros gozarán de buen servicio, tranquilidad, privacidad y confort.  Para ellos ofrecemos una infraestructura con muchas facilidades y comodidades; la primera de ellas es la ubicación, pues el Hotel se encuentra en un área estratégica para hacer negocio así como el turista que visita a la Isla de Margarita. Por ello, llegar al Hotel Boutique La Plazuela en La Asunción  es una experiencia placentera y productiva debido a que nos esforzamos cada día por ofrecer a nuestros clientes un servicio confortable, de lujo y con tecnología de avanzada ya que nuestra principal objetivo se fundamenta en el trato y el servicio personalizado.
                </p>
            </div>

            <div class="packInfo">
                <h2 class="packH2"><?php echo $metaTitle; ?> ofrece</h2>

                <ul class="packUL">
                    <li>
                        18 Habitaciones de Lujo
                    </li>
                    <li>
                        Restaurant
                    </li>
                    <li>
                        Lounge-Bar con agradable ambiente Chill-out
                    </li>
                    <li>
                        Pizzería
                    </li>
                    <li>
                        Piscina para adultos y niños
                    </li>
                    <li>
                        Terraza y Salón de Usos Múltiples completamente equipados
                    </li>
                    <li>
                        Estacionamiento
                    </li>
                    <li>
                        Salón de usos múltiples con capacidad de 70 personas.
                    </li>
                </ul>
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
                $base = "hotel-boutique-la-plazuela";
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