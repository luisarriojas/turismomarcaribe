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
        <h1>CATAMARAN “NEPTUNO” (ISLA DE MARGARITA)</h1>

        <p>Descripción:</p>
        <ul>
            <li>Eslora 42 pies</li>
            <li>Manga 19 pies</li>
            <li>25.194 lbs. De desplazamiento</li>
            <li>210 galones de combustible</li>
            <li>206 galones de agua dulce</li>
            <li>2 Motores de 110 HP c/u</li>
            <li>4 camarotes </li>
            <li>10 camas</li>
            <li>3 duchas</li>
            <li>Solarium</li>
            <li>Música para Ipod, MP3, MP4 </li>
            <li>Bar</li>
            <li>Aire Acondicionado </li>
            <li>Cocina</li>
            <li>Fregadero</li>
            <li>Micro-ondas </li>
            <li>Escalera de borda</li>
            <li>Botiquín de primeros auxilios</li>
            <li>Puede contratarse por varios días</li>
        </ul>
        
        <form id="form_quote" method="post" action="enviar_cotizacion.php">
            <input type="hidden" name="id" value="Alquiler de lanchas - Neptuno" />

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
            $base = "lanchas-yates-mar-caribe-neptuno";
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
    $precio_cambiante = 1;
    include("footer.php");
    ?>
</body>