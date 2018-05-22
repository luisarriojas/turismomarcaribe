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
        <h1>PEÑERO “EL RESPLANDOR” -TUCACAS</h1>

        <p>Descripción:</p>

        <ul>
            <li>Peñero de 7 mts de eslora y 2 mts de manga</li>
            <li>1 motor marca Yamaha de 140 HP</li>
            <li>Capacidad para 12 pasajeros</li>
            <li>Música para Ipod, MP3, MP4 </li>
            <li>Bomba de achique</li>
            <li>Toldo</li>
            <li>Piso doble fondo anti-resbalante</li>
            <li>Botiquín de primeros auxilios</li>
        </ul>
        
        <span class="alert">NOTA: Todas nuestras embarcaciones son fabricadas en fibra de vidrio y cumplen con todas las regulaciones del Instituto Nacional de los Espacios Acuáticos (INEA) en cuanto a seguridad marítima se refiere (licencia de navegación de la lancha o peñero, marinero con licencia de patrón deportivo o artesanal, dotación y certificado de radio, chalecos salvavidas, señales de emergencia, kit de primeros auxilios, etc.), seguro de responsabilidad civil, mantenimiento al día.</span>

        <form id="form_quote" method="post" action="enviar_cotizacion.php">
            <input type="hidden" name="id" value="Alquiler de lanchas - El Resplandor" />

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
            Observaciones:
            <br />
            <textarea name="form_observaciones"></textarea>
            <br /><br />

            <input type="submit" value="Solicitar información" />
        </form>
        
        <p style="text-align: left;">
            <?php
            $base = "lanchas-yates-mar-caribe-el-resplandor";
            $q = 1;

            for ($i = 1; $i <= $q; $i++) {
                echo '<a href = "../img/' . $base . '-' . $i . '.jpg" rel = "lightbox[package]" class = "package_a">
                        <img src = "reduce.php?file=' . $base . '-' . $i . '.jpg" class = "img_package" />
                      </a>';
            }
            ?>
        </p>
        
        <h2 style="font-size:20px;">Lanchas y Yates para alquilar</h2>

        <ul id="package_ul">
            <li class="package_li"><a href="lanchas-yates-mar-caribe-virgen-del-valle.php" class="package_a_ul">PEÑERO “VIRGEN DEL VALLE”-TUCACAS</a></li> 
            <li class="package_li"><a href="lanchas-yates-mar-caribe-el-resplandor.php" class="package_a_ul">PEÑERO “EL RESPLANDOR”-TUCACAS</a></li>
            <li class="package_li"><a href="lanchas-yates-mar-caribe-la-corsaria.php" class="package_a_ul">LANCHA “LA CORSARIA”-TUCACAS</a></li>
            <li class="package_li"><a href="lanchas-yates-mar-caribe-neptuno.php" class="package_a_ul">CATAMARAN "NEPTUNO"-ISLA DE MARGARITA</a></li> 
        </ul>
    </div>

    <?php
    $precio_cambiante=1;
    include("footer.php");
    ?>
</body>