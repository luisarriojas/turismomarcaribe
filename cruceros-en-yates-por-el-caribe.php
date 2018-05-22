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
        <h1>CRUCEROS EN YATE</h1>

        <p>Turismo Mar Caribe, C.A. le ofrece la oportunidad de tener el privilegio de viajar a sus anchas en uno de nuestros yates  o veleros por cualquier destino que escoja en las costas venezolanas o el Caribe, tales como el Archipiélago de Los Roques, Las Aves, Cubagua, La Tortuga, Mochima, Morrocoy,  Aruba, Curazao, Bonaire, entre otros. Estos cruceros le permitirán viajar a distintos destinos de la geografía marina nacional e internacional y realmente se sentirá privilegiado durante la travesía debido a la poca disponibildad y lo distante de estas regiones paradisíacas. </p>

        <p>A bordo encontrará todos los servicios de viaje VIP ya que  le ofrecemos el mejor servicio para que disfrute al máximo de su paseo.</p>

        <p>Ud. puede escoger entre pasar un fin de semana, celebrar cumpleaños, aniversario de bodas o cualquier ocasión especial de su conveniencia, siendo ésta una experiencia totalmente diferente. </p>

        <h2>YATE RELAX</h2>

        <p>MARCA AZIMUT (ESLORA 46.5 PIES)</p>
        <ul>
            <li>
                DESTINOS: Aruba, Curazao, Bonaire, Los Roques, Mochima
                <br />
                <span class="alert">Días de Navegación (mínimo 3 días)</span>
            </li>

            <li>
                DESTINOS: Isla de Aves, Costas Aragueñas
                <br />
                <span class="alert">Días de Navegación: Mínimo 2 días</span>
            </li>
        </ul>

        <p>La embarcación cuenta con:</p>

        <ul>
            <li>Lujosas áreas sociales</li>
            <li>Sala principal</li>
            <li>Baños</li>
            <li>Camarotes hasta 8 pasajeros</li>
            <li>Aire acondicionado en todas las áreas</li>
            <li>Nevera</li>
            <li>Cavas</li>
            <li>Microondas</li>
            <li>TV Plasma</li>
            <li>DVD, IPOD, MP4 o cualquier otro sistema  </li>
            <li>Sonido en todo el yate</li>
            <li>Plataforma </li>
            <li>Terraza</li>
            <li>Cómodas escaleras</li>
            <li>Colchonetas para tomar sol en proa y popa</li>
            <li>Ducha externa con agua dulce.</li>
            <li>Servicio de chef a bordo (Opcional)</li>
        </ul>

        <p>NOTA: Todos los zarpes salen del Parque Nacional Morrocoy</p>

        <h2>Características del yate:</h2>

        <p>Casco marca Azimut, eslora de 46.5 pies, 2 motores Caterpillar de 430 HP y alimentados por gasoil, sistemas de navegación, profundimetros, radio marino, GPS, sistemas de seguridad, póliza RCV.</p>

        <form id="form_quote" method="post" action="enviar_cotizacion.php">
            <input type="hidden" name="id" value="Cruceros en yate" />

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
            $base = "cruceros-en-yates-por-el-caribe";
            $q = 5;

            for ($i = 1; $i <= $q; $i++) {
                echo '<a href = "../img/' . $base . '-' . $i . '.jpg" rel = "lightbox[package]" class = "package_a">
                        <img src = "reduce.php?file=' . $base . '-' . $i . '.jpg" class = "img_package" />
                      </a>';
            }
            ?>
        </p>
    </div>
</div>

<?php
$precio_cambiante=1;
include("footer.php");
?>
</body>