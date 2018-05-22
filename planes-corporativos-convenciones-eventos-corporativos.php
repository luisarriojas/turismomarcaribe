<?php
ob_start('ob_gzhandler');
?>
<!doctype html>
<head>
    <?php
    $metaDescription = "";
    $metaKeywords = "";
    $metaTitle = "Convenciones y Eventos Corporativos";

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

                <p class="packP">En Turismo Mar Caribe compartimos con el desarrollo productivo de las empresas a través de eventos corporativos de cualquier organización empresarial. Es por ello que consideramos la importancia que tiene el desarrollo y capacitación del capital humano para obtener los niveles productivos deseados.</p>

                <p class="packP">Nuestra empresa realiza la organización y realización de convenciones, seminarios, congresos, talleres, lanzamiento de productos y eventos especiales. Así que de manera fácil, sencilla y práctica ayudamos a las empresas y organizaciones a la realización de estas actividades.</p>
            </div>

            <div class="packInfo">
                <h2 class="packH2"><?php echo $metaTitle; ?> ofrece</h2>

                <ul class="packUL">
                    <li>Organización de todo lo relacionado con convenciones, seminarios, congresos, talleres, lanzamiento de productos en cualquier parte del territorio nacional</li>
                    <li>Reservación de los hoteles escogidos tanto para la realización del evento como para el alojamiento de facilitadores y los participantes</li>
                    <li>Reservación y decoración de los salones para almuerzos o cenas de bienvenida, de gala y banquetes</li>
                    <li>Reservación de restaurantes dentro y fuera del hotel</li>
                    <li>Elaboración de menús para las comidas  </li>
                    <li>Elaboración de distintivos e identificadores de equipaje</li>
                    <li>Elaboración del material promocional necesario para el evento, tales como franelas, libretas, maletines, bolígrafos, carnets, placas y diplomas de reconocimiento grabado con nombre y logo requerido</li>
                    <li>Elaboración de las pancartas ilustrativas para su utilización en el recibimiento de participantes en aeropuertos, salones y áreas del evento</li>
                    <li>Contratación de equipos de sonido, audiovisuales, audífonos, micrófonos, grabación, etc.</li>
                    <li>Instalación de computadoras e impresoras en el área del evento</li>
                    <li>Elaboración de programas adicionales como tours por la ciudad, traslados a centros de compras y visitas a los sitios de interés turístico</li>
                    <li>Atención a las reconfirmaciones, nuevas reservaciones, cambios de vuelos, fechas y rutas de vuelos</li>
                    <li>Contratación de personal para trabajar en los eventos, tanto secretarial como de protocolo</li>
                    <li>Contratación de unidades de transporte ejecutivo de lujo y vehículos protocolares para los traslados hacia o desde cualquier sitio o ciudad designada por la empresa contratante</li>
                    <li>Contratación de conjuntos musicales, grupos de baile, shows especiales y artistas de variado género</li>
                </ul>
            </div>

            <div class="packAlert">
                <p class="packP">Nos adaptamos a su presupuesto.</p>

                <p class="packP">Contáctenos para realizar una visita y atender sus requerimientos.</p>
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
                $base = "planes-corporativos-convenciones-eventos-corporativos";
                $q = 3;

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