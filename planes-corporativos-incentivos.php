<?php
ob_start('ob_gzhandler');
?>
<!doctype html>
<head>
    <?php
    $metaDescription = "";
    $metaKeywords = "";
    $metaTitle = "Planes de Incentivos";

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

                <p class="packP">Turismo Mar Caribe planifica, coordina y realiza eventos relacionados con el incentivo para el personal de cualquier organización empresarial a través de planes y viajes de incentivos, tales como:</p>

                <ul class="packUL">
                    <li>Premios a los empleados más destacados</li>
                    <li>Reconocimiento por liderazgo</li>
                    <li>Pre-jubilaciones, etc.</li>
                </ul>
            </div>

            <div class="packInfo">
                <h2 class="packH2"><?php echo $metaTitle; ?> ofrece</h2>

                <p class="packP">Ofrecemos viajes nacionales e internacionales, celebraciones en salones de eventos y en hoteles de categoría (recepciones, fiestas, almuerzos, cenas, cocteles, etc.) donde su inversión en nuestros servicios se retribuirá en grandes beneficios para su empresa. Nos encargamos de toda la organización y realización de estos eventos.</p>
            </div>

            <div class="packInfo">
                <h2 class="packH2"><?php echo $metaTitle; ?> le ayudarán a</h2>

                <ul>
                    <li>Abrir nuevas cuentas</li> 
                    <li>Motivar a su equipo de ventas </li>
                    <li>Mejorar el rendimiento de las ventas y del servicio al cliente </li>
                    <li>Lanzar nuevos productos </li>
                    <li>Estimular las ventas de productos especiales </li>
                    <li>Reducir costos operativos y asegurar el control de calidad </li>
                    <li> Aumentar la productividad de sus empleados </li>
                    <li>Premiar el rendimiento de sus empleados </li>
                </ul>
            </div>

            <div class="packAlert">
                <p class="packP">Nos adaptamos a su presupuesto.</p>
            </div>

            <div class="packInfo">
                <?php
                include ("planes-corporativos-convenciones-eventos-relacionados.php");
                ?>
            </div>
        </div>

        <div id="packColumn2">
            <?php
            $formUrl = $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF'];
            include ("cotizador.php");
            ?>

            <div id="packPhotos">
                <?php
                $base = "planes-corporativos-incentivos";
                $q = 4;

                include ("album-fotos.php");
                ?>

                <div class="space"></div>
            </div>
        </div>

        <div class="space"></div>
    </div>

    <?php
    include("footer.php");
    ?>
</body>