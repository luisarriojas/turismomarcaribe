<?php
ob_start('ob_gzhandler');
?>
<!doctype html>
<head>
    <?php
    $metaDescription = "";
    $metaKeywords = "";
    $metaTitle = "Posada La Corsaria (SUPERIOR)";

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
                    Posada La Corsaria  tiene una capacidad  para albergar 20 personas. En ella se combina sus muy amplios espacios de estilo colonial con una decoración moderna y elegante que incluye espacios para obras de arte, creando un ambiente único para su estadía en Los Roques. Es una casa amplia con un grato ambiente familiar, de techos altos lo que la hace que sea muy fresca.
                </p>

                <p class="packP">
                    Los turistas son recibidos en la pista por su personal y dirigidos a la posada donde dejarán su equipaje y serán trasladados al muelle donde partirán al cayo más cercano. En este alojamiento se ofrecen desayunos, almuerzos servidos en los paseos diarios a los cayos y su respectiva cena.
                </p>
            </div>

            <div class="packInfo">
                <h2 class="packH2"><?php echo $metaTitle; ?> ofrece</h2>

                <ul class="packUL">
                    <li>
                        Atención personalizada
                    </li>
                    <li>
                        Recibiento de turistas en la pista de aterrizaje
                    </li>
                    <li>
                        1 amplia habitación matrimonial, 4 habitaciones dobles y 3 habitaciones matrimóniales con cama individual (convertibles en triples)
                    </li>
                    <li>
                        Baño privado
                    </li>
                    <li>
                        Aire acondicionado
                    </li>
                    <li>
                        Caja de seguridad
                    </li>
                    <li>
                        Nevera ejecutiva
                    </li>
                    <li>
                        Traslados en lanchas a los cayos
                    </li>
                    <li>
                        Desayunos, almuerzos y cenas ( según el plan escogido)
                    </li>
                </ul>
            </div>

            <div class="packInfo">
                <h2 class="packH2">Planes en <?php echo $metaTitle; ?></h2>

                <ul class="packUL">
                    <li style="margin-bottom:5px;">
                        <span class="packLITitle">2 DIAS/  1 NOCHE</span>
                    </li>
                    <li style="margin-bottom:5px;">
                        <span class="packLITitle">3 DIAS/ 2 NOCHES</span>
                    </li>
                    <li style="margin-bottom:5px;">
                        <span class="packLITitle">PENSION COMPLETA SIN EXCURSIONES</span>
                    </li>
                    <li style="margin-bottom:5px;">
                        <span class="packLITitle">MEDIA PENSION</span>
                    </li>
                    <li style="margin-bottom:5px;">
                        <span class="packLITitle">BED AND BREAKFAST</span>
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
                $base = "posada-la-corsaria";
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