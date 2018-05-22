<?php
session_start();
?>
<!doctype html>
<head>
    <?php
    $meta_description = "";
    $meta_keywords = "";
    $meta_title = "Home";

    include("metatags.php");

    include("style-script.php");
    ?>
<!--    <script type="text/javascript" src="../js/prototype.js"></script>
    <script type="text/javascript" src="../js/scriptaculous.js?load=effects,builder"></script>
    <script type="text/javascript" src="../js/lightbox.js"></script>
    <link href="../css/lightbox.css" rel="stylesheet" type="text/css" media="screen" />-->
</head>
<body>
    <?php
    include("google-analytics.php");

    include("header.php");

    if (isset($_SESSION['error_message'])) {
        echo '<div id="error">';
        echo '<div id="content">';
        echo $_SESSION['error_message'];
        echo '<div id="close_button">';
        echo '<input type="button" value="OK" onclick="div_delete(\'error\')" />';
        echo '</div>';
        echo '<div id="space"></div>';
        echo '</div>';
        echo '</div>';
        unset($_SESSION['error_message']);
    }
    ?>

    <div id="package_container">
        <h1>EXCURSIONES “FULL DAY” A LA ISLA DE COCHE</h1>

        <p>Juntos iremos navegando por las aguas cristalinas del Mar Caribe hacia la isla de Coche. Nuestra cálida y atenta tripulación se encargará de guiarles para que pasen un día inolvidable y disfruten de una exótica experiencia de acuerdo a su escogencia de tour, experimentando la belleza y las riquezas naturales e históricas que guarda ésta bella isla. </p>

        <p>Nuestras tarifas incluyen el servicio de transporte en unidades semiprivadas desde su alojamiento en  la isla de Margarita hasta nuestro terminal de embarque en La Isleta y retorno.</p>

        <p>Adicionalmente todo en un mismo lugar!!!</p>

        <ul>
            <li>Snack ligero al embarcar.</li>
            <li>Bebidas alcohólicas nacionales, refrescos, jugos y agua incluidos a bordo de nuestros catamaranes durante toda la excursión.</li>
            <li>Servicio de toldos y sillas en nuestra exclusiva área de playa.</li>
            <li>Actividades recreativas y juegos.</li>
            <li>Almuerzo tipo buffet completo y variado en nuestro restaurante ubicado en la churuata más grande, fresca y acogedora de la Isla de Coche.</li>
            <li>Atención personalizada y bar abierto durante su estadía en la playa.</li>
            <li>Servicio de Baños.</li>
        </ul>
        
        <p><span class="alert">Recomendaciones: Traer toalla, traje de baño, protector solar, cámara fotográfica, camiseta extra y sobre todo muchas ganas de divertirse y pasar un día bien diferente.</span></p>
        
        <div id="plans">
            <h2>Planes</h2>

            <ul>
                <li style="margin-bottom:5px;">
                    <span style="color:#2e91e9; font-weight: bold;">2 DIAS / 1 NOCHE</span>
                    <br />
                    Incluye: alojamiento y desayuno.
                </li>
                <li style="margin-bottom:5px;">
                    <span style="color:#2e91e9; font-weight: bold;">2 DIAS /1 NOCHE</span>
                    <br />
                    Incluye: alojamiento, desayuno y cena.
                </li>
                <li style="margin-bottom:5px;">
                    <span style="color:#2e91e9; font-weight: bold;">2 DIAS/ 1 NOCHE</span>
                    <br />
                    Incluye: alojamiento, desayuno, lunch y cena.
                </li>
                <li style="margin-bottom:5px;">
                    <span style="color:#2e91e9; font-weight: bold;">MEDIA PENSION (2 DIAS/ 1 NOCHE)</span>
                    <br />
                    Incluye: alojamiento, desayuno, lunch, cena y traslados.
                </li>
                <li style="margin-bottom:5px;">
                    <span style="color:#2e91e9; font-weight: bold;">BED AND BREAKFAST (2 DIAS/ 1 NOCHE)</span>
                    <br />
                    Incluye: alojamiento, desayuno y traslados.
                </li>
                <li style="margin-bottom:5px;">
                    <span style="color:#2e91e9; font-weight: bold;">BED AND BREAKFAST (2 DIAS/ 1 NOCHE)</span>
                    <br />
                    Incluye: alojamiento, desayuno, cena y traslados.
                </li>
            </ul>
        </div>   

        <form id="form_quote" method="post" action="enviar_cotizacion.php">
            <input type="hidden" name="id" value="Paquete Turístico - Los Roques - Posada El Botuto" />

            <span class="bold">Cotizador online:</span>
            <br />
            Nombres y Apellidos: 
            <br />
            <input type="text" name="form_name" />
            <br />
            Teléfono:
            <br />
            <input type="text" name="form_phone" />
            <br />
            Email:
            <br />
            <input type="text" name="form_email" />
            <br />
            Fecha de Entrada:
            <br />
            <input type="text" name="form_check_in_date" class="textbox" />
            <br />
            Fecha de Salida:
            <br />
            <input type="text" name="form_check_out_date" class="textbox" />
            <br />
            Cantidad de ocupantes en Habitación Sencilla:
            <br />
            <input type="text" name="form_q_sencilla" class="textbox" />
            <br />
            Cantidad de ocupantes en Habitación Doble:
            <br />
            <input type="text" name="form_q_doble" class="textbox" />
            <br />
            Cantidad de ocupantes en Habitación Triple:
            <br />
            <input type="text" name="form_q_triple" class="textbox" />
            <br />
            Cantidad de ocupantes en Habitación Cuadruple:
            <br />
            <input type="text" name="form_q_cuadruple" class="textbox" />
            <br />
            Cantidad de Adultos:
            <br />
            <input type="text" name="form_q_adultos" class="textbox" />
            <br />
            Cantidad de Niños entre 0 y 2 años:
            <br />
            <input type="text" name="form_q_ninos_0_2" class="textbox" />
            <br />
            Cantidad de Niños entre 3 y 5 años:
            <br />
            <input type="text" name="form_q_ninos_3_5" class="textbox" />
            <br />
            Cantidad de Niños entre 6 y 12 años:
            <br />
            <input type="text" name="form_q_ninos_6_12" class="textbox" />
            <br />
            Observaciones:
            <br />
            <textarea name="form_observaciones"></textarea>
            <br /><br />

            <input type="submit" value="Solicitar información" />
        </form>

        <p style="text-align: left;">
            <?php
            $base = "posada-el-botuto";
            $q = 8;

            for ($i = 1; $i <= $q; $i++) {
                echo '<a href = "../img/' . $base . '-' . $i . '.jpg" rel = "lightbox[package]" class = "package_a">
                        <img src = "reduce.php?file=' . $base . '-' . $i . '.jpg" class = "img_package" />
                      </a>';
            }
            ?>
        </p>

        <h2 style="font-size:20px;">Otras posadas en "Los Roques"</h2>

        <ul id="package_ul">
            <li class="package_li"><a href="los-roques-posada-arrecife.php" class="package_a_ul">Posada Arrecife (VIP)</a></li> 
            <li class="package_li"><a href="los-roques-posada-acuarela.php" class="package_a_ul">Posada Acuarela (VIP)</a></li>
            <li class="package_li"><a href="los-roques-posada-natura-viva.php" class="package_a_ul">Posada Natura Viva (VIP)</a></li>
            <li class="package_li"><a href="los-roques-posada-malibu.php" class="package_a_ul">Posada Malibú (VIP)</a></li>
            <li class="package_li"><a href="los-roques-posada-cayo-luna.php" class="package_a_ul">Posada Cayo Luna (SUPERIOR)</a></li>
            <li class="package_li"><a href="los-roques-posada-el-paraiso-azul.php" class="package_a_ul">Posada El Paraíso Azul (SUPERIOR)</a></li>
            <li class="package_li"><a href="los-roques-posada-la-corsaria.php" class="package_a_ul">Posada La Corsaria (SUPERIOR)</a></li>
            <li class="package_li"><a href="los-roques-posada-guaripete.php" class="package_a_ul">Posada Guaripete (SUPERIOR)</a></li>
            <li class="package_li"><a href="los-roques-posada la-quigua.php" class="package_a_ul">Posada La Quigua (SUPERIOR)</a></li>
            <li class="package_li"><a href="los-roques-casa-tramonto.php" class="package_a_ul">Casa Tramonto (SUPERIOR)</a></li>
            <li class="package_li"><a href="los-roques-posada-el-botuto.php" class="package_a_ul">Posada El Botuto (SUPERIOR)</a></li>
        </ul>
    </div>

    <?php
    $precio_cambiante=1;
    include("footer.php");
    ?>
</body>