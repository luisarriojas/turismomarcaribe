<?php
ob_start('ob_gzhandler');
?>
<!doctype html>
<head>
    <?php
    $metaDescription = "";
    $metaKeywords = "";
    $metaTitle = "Paseo por Macanao";

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

                <h2 class="packH2">Museo Marino</h2>
                <p class="packP">
                    Al llegar a la Península de Macanao, Turismo Mar Caribe lo llevará primeramente al Museo Marino en la población de Boca del Río, un pueblo de pescadores. Acá encontrará acuarios al aire libre que contienen tiburones gatos, tortugas marinas y grandes estrellas de mar que se pueden ver desde muy cerca.
                </p>
                <p class="packP">
                    Hay salas de exhibición donde se narran y proyectan documentales relacionados con el mar y actividades pesqueras, También se encuentran especies marinas disecadas y una nueva e interesante maqueta sobre la isla de Cubagua y la primera ciudad de Venezuela, Nueva Cádiz de Cubagua, la cual fue destruida por la acción de los conquistadores y los piratas. En el Museo Marino podrás conocer acerca de los grandes mamíferos marinos,  los arrecifes de coral, la tradición marinera de nuestra bella Venezuela, la pesca artesanal, la construcción de embarcaciones, el esqueleto de la ballena sardinera de 14 metros de longitud, entre otros.
                </p>

                <h2 class="packH2">Laguna de La Restinga</h2>
                <p class="packP">
                    El Parque Nacional de La Restinga es un lugar  obligatorio para todos los que visitan a la Isla de Margarita. El mismo se da inicio abordando unas pintorescas lanchas para descubrir las bellezas de los manglares y de los múltiples canales que conforman el parque, hasta llegar al extremo norte donde se ubica la playa de La Restinga, la cual posee una arena conformada en gran parte por minúsculas conchas de mar y unas aguas tibias y azules. La Laguna de La Restinga está considerada como uno de los mejores y más grandes humedales del mundo con 75 km cuadrados de superficie; es decir, como una de las más destacadas superficies de agua de menos de 6 metros de profundidad que conserva ecosistemas marinos en su estado natural.
                </p>
            </div>

            <div class="packInfo">
                <h2 class="packH2"><?php echo $metaTitle; ?> ofrece</h2>

                <ul class="packUL">
                    <li>
                        Traslados ida y vuelta en transporte turístico de lujo
                    </li>
                    <li>
                        Traslado en lanchas en la laguna de La Restinga
                    </li>
                    <li>
                        Guía turístico
                    </li>
                    <li>
                        Entrada al Museo Marino
                    </li>
                    <li>
                        Entrada al Parque Nacional La Restinga
                    </li>
                </ul>

                <p class="packP">
                    Incluye: Almuerzo típico de la zona a base de pescado y mariscos
                </p>
            </div>

            <div class="packInfo">
                <?php
                include ("tour-margarita-relacionados.php");
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
                $base = "tour-margarita-paseo-macanao";
                $q = 7;

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