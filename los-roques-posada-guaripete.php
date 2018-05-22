<?php
ob_start('ob_gzhandler');
?>
<!doctype html>
<head>
    <?php
    $metaDescription = "";
    $metaKeywords = "";
    $metaTitle = "Posada Guaripete (SUPERIOR)";

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
                    Esta posada dispone de 6 habitaciones y 1 triple o cuádruple, todas ellas con baño privado y aire acondicionado. El estilo de la posada es sencillo pero muy acogedor. Todas las habitaciones están en la planta baja. En la planta superior se pudo crear una terraza cubierta ideal para el relax, para retirarse en la lectura o degustar un trago.
                </p>

                <p class="packP">
                    Desde las 8:00  am los huéspedes podrán disfrutar del desayuno, a base de café, té, mantequilla, mermeladas, jugos naturales de frutas, pan tostado, galletas, huevos, etc.  Luego se partirá hacia los cayos seleccionados. La posada posee una embarcación a motor de 10 metros la cual permite organizar excursiones hacia todas las islas del archipiélago. Una vez llegado al destino, el marinero se encargará de desembarcar las sillas y las sombrillas de playa, así como la cava que contiene hielo, bebidas y alimentos a base de recetas frías. El lunch será variado todos los días y estará compuesto por  ensaladas diversas, emparedados, además de fruta fresca y galletas. Al regreso de la playa los huéspedes encontrarán una merienda a base de pizza, jugos naturales, café, etc. A las 7:00 pm será servida la cena. Esta contendrá un exquisito menú con marcada tendencia mediterránea con entrada, plato principal a base de pastas, pescado y contornos, además del postre. En este sentido, se busca ofrecer al huésped los productos que el mar proporciona diariamente. Por tanto en la mesa dominan los platos a base de pescado fresquísimo, acompañado de pasta, arroz, sopas, verduras, frutas y postres.
                </p>
            </div>

            <div class="packInfo">
                <h2 class="packH2"><?php echo $metaTitle; ?> ofrece</h2>

                <ul class="packUL">
                    <li>
                        6 habitaciones y 1 triple
                    </li>
                    <li>
                        Baño privado
                    </li>
                    <li>
                        Aire acondicionado
                    </li>
                    <li>
                        Desayunos, almuerzos, meriendas y cenas
                    </li>
                    <li>
                        Traslado a los cayos
                    </li>
                </ul>
            </div>

            <div class="packInfo">
                <h2 class="packH2">Planes en <?php echo $metaTitle; ?></h2>

                <ul class="packUL">
                    <li style="margin-bottom:5px;">
                        <span class="packLITitle">3 DIAS / 2 NOCHES</span>
                    </li>
                    <li style="margin-bottom:5px;">
                        <span class="packLITitle">2 DIAS/ 1 NOCHE</span>
                    </li>
                    <li style="margin-bottom:5px;">
                        <span class="packLITitle">PENSION COMPLETA</span>
                    </li>
                    <li style="margin-bottom:5px;">
                        <span class="packLITitle">MEDIA PENSION</span>
                    </li>
                    <li style="margin-bottom:5px;">
                        <span class="packLITitle">NOCHE ADICIONAL</span>
                    </li>
                    <li style="margin-bottom:5px;">
                        <span class="packLITitle">NOCHE Y DESAYUNO</span>
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
                $base = "posada-guaripete";
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