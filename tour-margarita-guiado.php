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
        <h1>Tours a Margarita</h1>
        <h2>TOUR “DESCUBRE  MARGARITA”</h2>

        <p>ITINERARIO</p>

        <p>Comprende una serie de visitas a diferentes lugares que conforman la Isla de Margarita. Comenzaremos visitando el Castillo San Carlos de Borromeo en Pampatar donde podrá observar, desde esta fortaleza colonial, toda la belleza que ofrece la bahía. Seguidamente la Iglesia Del Cristo del Buen Viaje, cuya edificación fue construida en los años 1748. Allí reposa la imagen del Santo Cristo del Buen Viajero venerada principalmente por los pescadores de la isla. La iglesia posee varias obras de artes como famosos óleos de esa época. Se hará un recorrido hasta llegar a la capital del Estado Nueva Esparta, La Asunción, donde podrá entrar a la Catedral de La Asunción, segunda iglesia más antigua de Venezuela. También lo llevaremos al Castillo de Santa Rosa que desde lo alto podrá observar el camino de Pampatar a la Asunción, la costa del este, el Valle de Atamo y los cerros Guayamurí y Matasiete. En el pueblo de El Valle visitará la Basílica Menor de la Virgen del Valle, Patrona no sólo de los margariteños sino también de todos los pescadores de las costas venezolanas. Allí también podrá entrar al Museo Arquidiocesano y admirar sus cuadros, ofrendas y reliquias religiosas. A pocos minutos de allí iremos a Santa Ana, poblado de admirable tranquilidad y cuidado arquitectónico. Juangriego es el  otro lugar de parada obligatoria para observar su bella bahía con sus innumerables embarcaciones de pesca. Allí tendremos un almuerzo (No Incluído en el precio del tour) en un restaurant de la zona. Luego visitaremos el Fortín de La Galera, lugar donde se libró una importante batalla contra las tropas realistas. Conocerá Playa Galera al frente del Fortín de La Galera y Playa Caribe.</p>

        <p>El tour incluye:</p>

        <ul>
            <li>Transporte ida y vuelta en vehículos turísticos de lujo con aire acondicionado desde hoteles</li>
            <li>Visita dirigida a todos los lugares mencionados</li>
            <li>Guía bilingüe</li>
            <li>Agua mineral y snacks</li>
            <li>Visita al Castillo de San Carlos de Borromeo</li>
            <li>Visita a la Iglesia del Cristo del Buen Viaje</li>
            <li>Visita a la Catedral de la Asunción</li>
            <li>Castillo de Santa Rosa</li>
            <li>Museo Arquidiocesano</li>
            <li>Basílica Menor Virgen del Valle</li>
            <li>Fortín La Galera</li>
            <li>Playas de Juangriego</li>
        </ul>

        <form id="form_quote" method="post" action="enviar_cotizacion.php">
            <input type="hidden" name="id" value="Paquete Turístico - Peninsula de Paraguaná - Hotel Cardón " />

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
            $base = "";
            $q = 8;

            for ($i = 1; $i <= $q; $i++) {
                echo '<a href = "../img/' . $base . '-' . $i . '.jpg" rel = "lightbox[package]" class = "package_a">
                        <img src = "reduce.php?file=' . $base . '-' . $i . '.jpg" class = "img_package" />
                      </a>';
            }
            ?>
        </p>

        <h2 style="font-size:20px;">Otros hoteles en la Isla de Margarita</h2>

        <ul id="package_ul">
            <li class="package_li"><a href="isla-de-margarita-margarita-princess.php" class="package_a_ul" title="Margarita Princess">Margarita Princess (4 estrellas)</a></li> 
            <li class="package_li"><a href="isla-de-margarita-hotel-california.php" class="package_a_ul">HOTEL CALIFORNIA (3 estrellas)</a></li>
            <li class="package_li"><a href="isla-de-margarita-sunsol-hotel-caribbean-beach.php" class="package_a_ul">SUNSOL HOTEL CARIBBEAN BEACH- Playa El Agua (4 estrellas)</a></li>
            <li class="package_li"><a href="isla-de-margarita-sunsol-hotel-isla-caribe.php" class="package_a_ul">SUNSOL HOTEL ISLA CARIBE- Playa El Tirano  (4 estrellas))</a></li>
            <li class="package_li"><a href="isla-de-margarita-hotel-la-samanna-de-margarita.php" class="package_a_ul">HOTEL LA SAMANNA DE MARGARITA (5 estrellas)</a></li>
            <li class="package_li"><a href="isla-de-margarita-costa-caribe-beach-hotel-resort.php" class="package_a_ul">COSTA CARIBE  BEACH HOTEL & RESORT (3 estrellas)</a></li>
            <li class="package_li"><a href="isla-de-margarita-hotel-marina-bay.php" class="package_a_ul">HOTEL MARINA BAY (4 estrellas)</a></li>
        </ul>

        <h2 style="font-size:20px;">Otras posadas en la Isla de Margarita</h2>

        <ul id="package_ul">
            <li class="package_li"><a href="isla-de-margarita-posada-steviewonderland.php" class="package_a_ul">POSADA STEVIEWONDERLAND (VIP)</a></li> 
            <li class="package_li"><a href="isla-de-margarita-posada-casa-caracol.php" class="package_a_ul">POSADA CASA CARACOL (VIP)</a></li>
            <li class="package_li"><a href="isla-de-margarita-posada-la-cuadra-suites.php" class="package_a_ul">Posada LA CUADRA SUITES (SUPERIOR)</a></li>
        </ul>
    </div>

    <?php
    $precio_cambiante=1;
    include("footer.php");
    ?>
</body>