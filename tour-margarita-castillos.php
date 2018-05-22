<?php
ob_start('ob_gzhandler');
?>
<!doctype html>
<head>
    <?php
    $metaDescription = "";
    $metaKeywords = "";
    $metaTitle = "Excursión de los Castillos";

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
                    Este es un tour histórico donde viviremos momentáneamente el pasado de estos fortines y observar su bellezas arquitectónicas.
                </p>
            </div>

            <div class="packInfo">
                <h2 class="packH2">Iniciaremos el tour con la visita a:</h2>

                <ul class="packUL">
                    <li>
                        <h2 class="packH2">Castillo San Carlos de Borromeo</h2>
                        Fue consatruído con el objetivo de defender el importante puerto de mercado y la población de Pampatar.
                    </li>

                    <li>
                        <h2 class="packH2">Castillo de Santa Rosa</h2>
                        Las obras se inician en la primera mitad del siglo XVII y según consta en la lápida del dintel de las entrada del castillo, se concluye en 1.862. El castillo tiene frentes defensivos, aljibe, cuarteles y capillas. Allí fue inicialmente detenida la heroína venezolana Luisa Cáceres de Arismedi antes de ser llevada al Castillo de San Carlos de Borromeo.
                    </li>

                    <li>
                        <h2 class="packH2">Fortín de La Galera</h2>
                        En lo más alto de la bahía de Juangriego se encuentra el Fortín de la Galera, construido en 1.811, por la Junta Provisional de Margarita. Su batería de cañones está conformada por cuatro piezas de artillería que apuntan hacia la bahía. En ese castillo se efectuaron batallas decisivas que determinaron la libertad del pueblo margariteño. Fue allí, el 8 de agosto de 1.817, donde se libró el combate entre el ejército del realista Pablo Morillo y los insulares que defendieron al fuerte. Almuerzo en restaurant en Juangriego (No Incluído)
                    </li>

                    <li>
                        <h2 class="packH2">Fortín de La Caranta</h2>
                        Se encuentra en Pampatar en el cerro más alto de La Caranta, hacia el lado este del Castillo San Carlos de Borromeo. Este es un castillo antiquísimo y está documentado que su construcción fue realizada hacia el año de 1596.  En 1.626 es invadido por los corsarios holandeses y en 1.816 por el ejército de Urreiztieta. La Caranta estuvo ubicado en un lugar estratégico: se concibió para que su artillería defendiera la bahía y cruzara sus fuegos con los del Castillo de San Carlos de Borromeo.
                    </li>

                    <li>
                        <h2 class="packH2">Fortín de Santa Ana</h2>
                        Está ubicado en una colina cercana a Santa Ana, en un punto muy estratégico entre la Asunción y Juangriego. Este fuerte se comunicaba con las dos baterías del Castillo de La Galera a través de disparos de salva a cambio de luces producidas por espejo. Su objetivo principal era proteger la entrada de Santa Ana del Norte de los atacantes procedentes de Juangriego y Pedro González. Su construcción data del siglo XVII.
                    </li>
                </ul>
            </div>

            <div class="packInfo">
                <h2 class="packH2">El tour incluye</h2>

                <ul class="packUL">
                    <li>
                        Transporte ida y vuelta en vehículos turísticos de lujo con aire acondicionado desde hoteles
                    </li>
                    <li>
                        Visita dirigida a todos los lugares mencionados
                    </li>
                    <li>
                        Guía bilingüe
                    </li>
                    <li>
                        Agua mineral y snacks
                    </li>
                    <li>
                        Visita al Castillo de San Carlos de Borromeo - Pampatar
                    </li>
                    <li>
                        Visita al Castillo de Santa Rosa - La Asunción
                    </li>
                    <li>
                        Visita al Fortín de La Galera - Juangriego
                    </li>
                    <li>
                        Visita al Fortín de La Caranta - Pampatar
                    </li>
                    <li>
                        Fortín de Santa Ana - Santa Ana
                    </li>
                    <li>
                        Almuerzo en restaurant local
                    </li>
                </ul>
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
                $base = "tour-margarita-castillos";
                $q = 6;

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