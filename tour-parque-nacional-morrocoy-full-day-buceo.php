<?php
ob_start('ob_gzhandler');
?>
<!doctype html>
<head>
    <?php
    $metaDescription = "";
    $metaKeywords = "";
    $metaTitle = "Full Day de Buceo (Parque Nacional Morrocoy)";

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
                    Turismo Mar Caribe, C.A. ofrece excursiones “FULL DAY” de buceo al Parque Nacional Morrocoy. Unase a nosotros y pase un día distinto haciendo ecoturismo, conociendo amigos, nadando en aguas cálidas y cristalinas, sumergiéndose en aguas profundas, realizando buceo o snorkeling, respirando aire de mar, sintiendo como nunca antes a la naturaleza. Contamos con un staff de instructores submarinistas CERTIFICADOS DE PRIMERA LÍNEA, siempre actualizados en sus conocimientos sobre el tema. Nuestros instructores tienen certificación de la Agencia Internacional de Buceo, S.S.I. LA., Scuba Schools International, Latin America, con sede en Palm Beach, Florida, USA y con Divisiones en muchas regiones y países del mundo.
                </p>

                <ul class="packUL">
                    <li>
                        <span class="packLITitle">Cayo Sur</span>
                        <br />
                        Pequeño islote rodeado de una extensa barrera de coral. Profundidad Máxima: 16 metros.
                    </li>
                    <li>
                        <span class="packLITitle">Cayo Medio</span>
                        <br />
                        Islote ubicado entre Cayo Sur y Cayo Norte con gran variedad de fauna y corales. Como atractivo principal encontrrá un pequeño naufragio y diversos objetos de gran interés. Profundidad Máxima: 22 metros.
                    </li>
                    <li>
                        <span class="packLITitle">Cayo Norte</span>
                        <br />
                        Sitio que se caracteriza por su excelente visibilidad y variedad de flora y fauna marina. Espectacular para inmersiones nocturnas. Profundidad Máxima: 26 metros. Fondo Coralino y arenoso. Atractivos: Virgen, Cristo, Símil del Titanic, Jardín, Plaza submarina.
                    </li>
                    <li>
                        <span class="packLITitle">Excursión al Barco Hundido</span>
                        <br />
                        Sumérjase con nosotros y visite un barco pesquero de hierro y haga el recorrido por las diferentes vistas de esta embarcación entre los Cayos Medio y Sur a una profundidad de 23 metros. Visibilidad entr 9 y 12 metros. Temperatura Aproximada: 25º C. Fondo constituido por Arena y coral.
                    </li>
                    <li>
                        <span class="packLITitle">Excursiones a otros cayos</span>
                        <br />
                        Además también lo podemos llevar a Paiclas, Mero, Playuela, Playuelita, Tucupido, Boca Grande, Boca Seca, Los Juanes, Pescadores, Sombrero, Bajo Esperanza y Bajo Grande.
                    </li>
                </ul>
            </div>

            <div class="packInfo">
                <h2 class="packH2"><?php echo $metaTitle; ?> ofrece</h2>

                <ul class="packUL">
                    <li>
                        Salida de los botes a las 8:45 a.m. desde un embarcadero de la población de Tucacas, Estado Falcón para 2 inmersiones en sitios previamente designados.
                    </li>
                    <li>
                        Traslado en bote para 8 o 15 personas
                    </li>
                    <li>
                        Acompañantes de guías certificados
                    </li>
                    <li>
                        Tanques
                    </li>
                    <li>
                        Refrigerio (Frutas y agua potable)
                    </li>
                    <li>
                        Regreso
                    </li>
                    <li>
                        Regreso a las 23:00 p.m. al embarcadero
                    </li>
                </ul>

                <span class="alert">NOTA:</span> Se alquilan a un costo adicional otros equipos para las inmersiones, tales como reguladores, snorkels, chalecos, trajes, aletas o el equipo completo.

            </div>

            <div class="packAlert">
                <p class="packP">
                    REQUISITO: SER BUZO CERTIFICADO
                </p>
            </div>

            <div class="packInfo">
                <?php
                include ("tour-parque-nacional-morrocoy-relacionados.php");
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
                $base = "tour-parque-nacional-morrocoy-full-day-buceo";
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