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
        <h1>PARQUE NACIONAL ARCHIPIELAGO “LOS ROQUES”</h1>

        <p>Los Roques forma un hermoso marco de más de 50 cayos, muchísimos bancos de arena y arrecifes coralinos. Está considerado como el único atolón del Mar Caribe, lo que hace que sea  un sitio incomparable en este grupo insular del Mar Venezolano y el Caribe. Está situado entre las coordenadas  11º  44` 45`` y 11º 58´36´´ de latitud norte y los 66º 32´42´´ y 66º 52´27´´ de longitud oeste de Greenwich, a una distancia de aproximadamente 170 kilómetros al norte de Venezuela.</p>

        <p>Los Roques posee una estructura de atolón poco frecuente en el Mar Caribe pero típica del Océano Pacífico, con dos barreras externas formadas por comunidades coralinas, las cuales protegen al archipiélago de las corrientes fuertes; también, una laguna interna de aguas someras y fondos arenosos. Este parque está constituido por 40,61 km² de superficie, 1.500 km² de arrecifes, y 42 cayos de origen coralino que rodean una laguna central.</p>

        <p>El Archipiélago Los Roques, así como otras islas venezolanas, tales como La Orchila, Isla de Aves, La Blanquilla, La Tortuga, Los Testigos, Los Frailes, etc., por su posición con respecto a las costas venezolanas, funciona como barrera protectora de las marejadas y vientos originados por tormentas o huracanes de aparición anual en la zona del Caribe, ayudando a disminuir el efecto devastador que producen estos fenómenos meteorológicos. Entre todas las islas pertenecientes al archipiélago, la más importante es el Gran Roque, tanto por su extensión insular como por contener la mayor parte de la población.</p>

        <p>El relieve de la isla ofrece dos zonas bien diferentes, la primera es un pequeña cadena montañosa, de poco más de 2 Km. de extensión, que corre a lo largo de la costa septentrional, con una elevación mayor que abarca los 124 metros; la segunda zona comprende las dos terceras partes de la isla y está formado por terrenos bajos, arenosos y anegadizos, con lagunas de agua salada  en sus bordes y debido a la alta evaporación, sedimenta la sal. Al contacto con esta laguna aparece playones arenosos de cierta anchura.</p>

        <p>En resumen, puede decirse que en la mitad del norte de la isla, se desarrolla un paisaje de relieve que se extiende hacia el oeste hasta alcanzar el mar dando lugar a una costa abrupta sin playas  la isla en su vertiente norte: Así mismo, presenta una topografía abrupta con acantilados de fuertes pendientes hacia el mar.</p>

        <p>La forma más sencilla y rápida de llegar es por vía aérea. Hay vuelos comerciales y privados que salen desde Maiquetía, Porlamar y Valencia. Los horarios de los vuelos y las tarifas cambian regularmente por lo que le sugerimos consultar con su Operador Turístico sobre las promociones del momento. El vuelo desde el Aeropuerto de Maiquetía toma entre 35 y 45 minutos aproximadamente. Desde Valencia el vuelo tarde casi una hora Es importante entender bien las restricciones de las tarifas puesto que en algunos casos las más económicas ni siquiera permiten cambio en las fechas de regreso. </p>

        <h2>Como llegar a Los Roques</h2>

        <p>Si no conoce Los Roques, puede disfrutar un “FULL DAY” ( Día completo) o por fines de semana saliendo desde Maiquetía, Porlamar  ó Valencia, saliendo en la mañana y regresando en la tarde el mismo día, con todo incluido. La mayoría de la población se encuentra en el Gran Roque, donde también se encuentra la pista de aterrizaje.</p>

        <p>Aunque la variedad de flora y fauna es muy limitada en las áridas superficies terrestres, el archipiélago es un paraíso para los aficionados al buceo y snorkeling. La pesca del pez ratón o bonefish. Es una pesca interesante y de mucha acción.</p>

        <p>Las maravillosas arenas blancas y las aguas cristalinas brillan y le dan la bienvenida, junto a la gran variedad de especies que alberga el parque, ya que es uno de los ecosistemas marinos insulares más representativos del país, siendo ésta la razón para obtener los títulos de Parque Nacional y un humedal de importancia internacional declarado por RAMSAR, una convención mundial que promueve la conservación de los humedales del mundo para garantizar entre muchas cosas el agua, sus productos y la vida en el planeta.</p>

        <p style="text-align: left;">
            <?php
            $base = "parque-nacional-los-roques";
            $q = 8;

            for ($i = 1; $i <= $q; $i++) {
                echo '<a href = "../img/' . $base . '-' . $i . '.jpg" rel = "lightbox[package]" class = "package_a">
                        <img src = "reduce.php?file=' . $base . '-' . $i . '.jpg" class = "img_package" />
                      </a>';
            }
            ?>
        </p>
    </div>

    <?php
    $precio_cambiante = 1;
    include("footer.php");
    ?>
</body>