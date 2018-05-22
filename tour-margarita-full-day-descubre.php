<?php
ob_start('ob_gzhandler');
?>
<!doctype html>
<head>
    <?php
    $metaDescription = "";
    $metaKeywords = "";
    $metaTitle = "Tour Descubre Margarita";

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

                <h2 class="packH2">Itinerario</h2>

                <p class="packP">
                    Comprende una serie de visitas a diferentes lugares que conforman la Isla de Margarita. Comenzaremos visitando el Castillo San Carlos de Borromeo en Pampatar donde podrá observar, desde esta fortaleza colonial, toda la belleza que ofrece la bahía. Seguidamente la Iglesia Del Cristo del Buen Viaje, cuya edificación fue construida en los años 1748. Allí reposa la imagen del Santo Cristo del Buen Viajero venerada principalmente por los pescadores de la isla. La iglesia posee varias obras de artes como famosos óleos de esa época. Se hará un recorrido hasta llegar a la capital del Estado Nueva Esparta, La Asunción, donde podrá entrar a la Catedral de La Asunción, segunda iglesia más antigua de Venezuela. También lo llevaremos al Castillo de Santa Rosa que desde lo alto podrá observar el camino de Pampatar a la Asunción, la costa del este, el Valle de Atamo y los cerros Guayamurí y Matasiete. En el pueblo de El Valle visitará la Basílica Menor de la Virgen del Valle, Patrona no sólo de los margariteños sino también de todos los pescadores de las costas venezolanas. Allí también podrá entrar al Museo Arquidiocesano y admirar sus cuadros, ofrendas y reliquias religiosas. A pocos minutos de allí iremos a Santa Ana, poblado de admirable tranquilidad y cuidado arquitectónico. Juangriego es el  otro lugar de parada obligatoria para observar su bella bahía con sus innumerables embarcaciones de pesca. Allí tendremos un almuerzo (No Incluído en el precio del tour) en un restaurant de la zona. Luego visitaremos el Fortín de La Galera, lugar donde se libró una importante batalla contra las tropas realistas. Conocerá Playa Galera al frente del Fortín de La Galera y Playa Caribe.
                </p>
            </div>

            <div class="packInfo">
                <h2 class="packH2"><?php echo $metaTitle; ?> ofrece</h2>

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
                        Visita al Castillo de San Carlos de Borromeo
                    </li>
                    <li>
                        Visita a la Iglesia del Cristo del Buen Viaje
                    </li>
                    <li>
                        Visita a la Catedral de la Asunción
                    </li>
                    <li>
                        Castillo de Santa Rosa
                    </li>
                    <li>
                        Museo Arquidiocesano
                    </li>
                    <li>
                        Basílica Menor Virgen del Valle
                    </li>
                    <li>
                        Fortín La Galera
                    </li>
                    <li>
                        Playas de Juangriego
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
                $base = "tour-descubre-margarita";
                $q = 5;

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