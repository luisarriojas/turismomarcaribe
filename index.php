<?php
ob_start('ob_gzhandler');
?>
<!doctype html>
<head>
    <?php
    $metaDescription = "";
    $metaKeywords = "";
    $metaTitle = "Home";

    include("metatags.php");

    include("style-script.php");
    ?>
    <script type="text/javascript">
        $(document).ready(function () {
            $(".container2").wtRotator({
                width: 640,
                height: 320,
                thumb_width: 24,
                thumb_height: 24,
                button_width: 24,
                button_height: 24,
                button_margin: 5,
                auto_start: true,
                delay: 3000,
                play_once: false,
                transition: "random",
                transition_speed: 300,
                auto_center: true,
                easing: "easeInOutBounce",
                cpanel_position: "inside",
                cpanel_align: "BR",
                timer_align: "top",
                display_thumbs: true,
                display_dbuttons: true,
                display_playbutton: true,
                display_thumbimg: false,
                display_side_buttons: false,
                display_numbers: true,
                display_timer: true,
                mouseover_select: false,
                mouseover_pause: true,
                cpanel_mouseover: false,
                text_mouseover: false,
                text_effect: "left",
                text_sync: true,
                tooltip_type: "text",
                shuffle: false,
                block_size: 75,
                vert_size: 55,
                horz_size: 50,
                block_delay: 25,
                vstripe_delay: 75,
                hstripe_delay: 180
            });
        });
    </script>
</head>
<body>
<?php
include("google-analytics.php");

include("header.php");
?>

<div id="menuVertContainer2">
    <!--<div id="menuVert">
    <ul class="menuVertUL">
    <li class="menuVertLI">
    <a href="hoteles-y-posadas.php" class="menuVertA">Hoteles / Posada</a>
    </li>
    <li class="menuVertLI">
    <a href="alquiler-lanchas-yates.php" class="menuVertA">Alquiler de Lanchas y Yates</a>
    </li>
    <li class="menuVertLI">
    <a href="cruceros-en-yates-por-el-caribe.php" class="menuVertA">Cruceros en Yate</a>
    </li>
    <li class="menuVertLI">
    <a href="##" class="menuVertA">Pesca de Altura</a>
    </li>
    </ul>

    <h2 class="menuVertH2">Conozca a Venezuela</h2>

    <ul class="menuVertUL">
    <li class="menuVertLI">
    <a href="parque-nacional-los-roques.php" class="menuVertA">Parque Nacional Archipiélago "Los Roques"</a>
    </li>
    <li class="menuVertLI">
    <a href="parque-nacional-morrocoy.php" class="menuVertA">Parque Nacional "Morrocoy"</a>
    </li>
    <li class="menuVertLI">
    <a href="parque-nacional-medanos-de-coro.php" class="menuVertA">Parque Nacional "Médanos de Coro"</a>
    </li>
    <li class="menuVertLI">
    <a href="parque-nacional-mochima.php" class="menuVertA">Parque Nacional "Mochima"</a>
    </li>
    <li class="menuVertLI">
    <a href="isla-de-margarita.php" class="menuVertA">Isla de Margarita</a>
    </li>
    </ul>
    </div>-->

    <div class="container2">
        <div class="wt-rotator">
            <div class="screen">
                <noscript>
                    <a href="paquete-los-roques.php" title="Viaje a Los Roques"><img src="../img/container1/1.jpg"
                                                                                     alt="Viaje a Los Roques"/></a>
                </noscript>
            </div>
            <div class="c-panel">
                <div class="thumbnails">
                    <ul>
                        <!--                            <li>
                        <a href="img/container2/1.jpg" title="Los Roques"></a>
                        <a href="tour-los-roques-full-day.php" title="Viaje al Archipiélago Los Roques"></a>
                        </li>-->
                        <li>
                            <a href="img/container2/2.jpg" title="Cabo San Román"></a>
                            <a href="tour-paraguana-guiado.php" title="Viaje a Cabo San Román"></a>
                        </li>
                        <li>
                            <a href="img/container2/3.jpg" title="Cruceros en el Caribe"></a>
                            <a href="tour-isla-coche-catamaranes-yates.php" title="Tome un Crucero en el Caribe"></a>
                        </li>
                        <li>
                            <a href="img/container2/4.jpg" title="Castillos de Margarita"></a>
                            <a href="tour-margarita-full-day-descubre.php"
                               title="Visite los Castillos de Margarita"></a>
                        </li>
                        <li>
                            <a href="img/container2/5.jpg" title="Los Roques"></a>
                            <a href="tour-parque-nacional-morrocoy-full-day-tucacas.php"
                               title="Viaje al Archipiélago Los Roques"></a>
                        </li>
                        <!--                            <li>
                        <a href="img/container2/6.jpg" title="Alquiler de Lancha"></a>
                        <a href="alquiler-lanchas-yates.php" title="Alquiler de Lancha en el Caribe"></a>
                        </li>-->
                    </ul>
                </div>
                <div class="buttons">
                    <div class="prev-btn"></div>
                    <div class="play-btn"></div>
                    <div class="next-btn"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="space"></div>
</div>

<div id="promosContainer">
    <div class="promo">
        <a href="javascript:void(0)" class="promoA">
            <div class="promoPhoto" id="promo1"></div>
            <div class="promoText">
                <h1 class="promoH1">Isla de Margarita</h1>

                <h2 class="promoH2">Paquetes turísticos desde 3 días / 2 noches en hoteles de su elección. Planes "Todo
                    Incluído”, todas las comidas y bebidas, snacks, club de playa, show nocturnos. Tenemos todas las
                    opciones posibles.</h2>
            </div>
        </a>
    </div>
    <div class="promo">
        <a href="javascript:void(0)" class="promoA">
            <div class="promoPhoto" id="promo2"></div>
            <div class="promoText">
                <h1 class="promoH1">Los Roques</h1>

                <h2 class="promoH2">2 días/ 1 noche, Plan “Todo Incluido” en posadas VIP, Superior y Económicas con alojamiento, todas comidas y paseos a los cayos.</h2>
            </div>
        </a>
    </div>
    <div class="promo">
        <a href="javascript:void(0)" class="promoA">
            <div class="promoPhoto" id="promo3"></div>
            <div class="promoText">
                <h1 class="promoH1">Isla La Tortuga</h1>

                <h2 class="promoH2">Paquetes turísticos desde 2 días/ 1 noche, Plan “Todo Incluído” con traslados en yate, alojamiento, todas las comidas, bebidas, hidratación.</h2>
            </div>
        </a>
    </div>
    <div class="promo">
        <a href="bodas-playeras.php" class="promoA">
            <div class="promoPhoto" id="promo4"></div>
            <div class="promoText">
                <h1 class="promoH1">¿Quieres casarte en la playa?</h1>

                <h2 class="promoH2">Realizamos bodas de playa en diferentes lugares:</h2>

                <h2 class="promoH2">Ofrecemos todos los servicios para la celebración de su boda (locaciones, catering, personal, decoración, hora loca, grupos musicales, DJ, animador, servicio de fotografía/ filmación, asistencia personalizada).</h2>

                <h2 class="promoH2">Comunícate con nosotros para orientarte, conversar acerca de todo lo que ofrecemos y ajustar el presupuesto de acuerdo a tu gusto y posibilidades.</h2>
            </div>
        </a>
    </div>
    <div class="promo">
        <a href="javascript:void(0)" class="promoA">
            <div class="promoPhoto" id="promo5"></div>
            <div class="promoText">
                <h1 class="promoH1">Morrocoy</h1>

                <h2 class="promoH2">Paquetes turísticos en hoteles y posadas. Paseos “Full Day” por el Parque con “Todo Incluido”. “Full Day” Buceo y Snorkeling.  Alquiler de embarcaciones.</h2>
            </div>
        </a>
    </div>
    <div class="promo">
        <a href="javascript:void(0)" class="promoA">
            <div class="promoPhoto" id="promo6"></div>
            <div class="promoText">
                <h1 class="promoH1">Isla de Coche</h1>

                <h2 class="promoH2">Excursiones “Full Day a  Isla de Coche en catamaranes, alojamiento con Planes “Todo Incluido” en hoteles 4 y 5 estrellas.</h2>
            </div>
        </a>
    </div>

    <div class="space"></div>

    <h3 id="promoH3">* Precios sujetos a cambio sin previo aviso. No incluye IVA.</h3>
</div>

<?php
include("footer.php");
?>
</body>