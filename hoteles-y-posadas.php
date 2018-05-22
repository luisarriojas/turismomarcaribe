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
    ?>

    <div id="package_container">
        <h1>Lista de Hoteles y Posadas ofrecidas en Turismo Mar Caribe</h1>

        <h2 style="font-size:20px;">Posadas en "Los Roques"</h2>
        
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
        
        <h2 style="font-size:20px;">Hoteles en la Isla de Margarita</h2>
        
        <ul id="package_ul">
            <li class="package_li"><a href="isla-de-margarita-margarita-princess.php" class="package_a_ul" title="Margarita Princess">Margarita Princess (4 estrellas)</a></li> 
            <li class="package_li"><a href="isla-de-margarita-hotel-california.php" class="package_a_ul">HOTEL CALIFORNIA (3 estrellas)</a></li>
            <li class="package_li"><a href="isla-de-margarita-sunsol-hotel-caribbean-beach.php" class="package_a_ul">SUNSOL HOTEL CARIBBEAN BEACH- Playa El Agua (4 estrellas)</a></li>
            <li class="package_li"><a href="isla-de-margarita-sunsol-hotel-isla-caribe.php" class="package_a_ul">SUNSOL HOTEL ISLA CARIBE- Playa El Tirano  (4 estrellas))</a></li>
            <li class="package_li"><a href="isla-de-margarita-hotel-la-samanna-margarita.php" class="package_a_ul">HOTEL LA SAMANNA MARGARITA (5 estrellas)</a></li>
            <li class="package_li"><a href="isla-de-margarita-costa-caribe-beach-hotel-resort.php" class="package_a_ul">COSTA CARIBE  BEACH HOTEL & RESORT (3 estrellas)</a></li>
            <li class="package_li"><a href="isla-de-margarita-hotel-marina-bay.php" class="package_a_ul">HOTEL MARINA BAY (4 estrellas)</a></li>
        </ul>
        
        <h2 style="font-size:20px;">Posadas en la Isla de Margarita</h2>
        
        <ul id="package_ul">
            <li class="package_li"><a href="isla-de-margarita-posada-steviewonderland.php" class="package_a_ul">POSADA STEVIEWONDERLAND (VIP)</a></li> 
            <li class="package_li"><a href="isla-de-margarita-posada-casa-caracol.php" class="package_a_ul">POSADA CASA CARACOL (VIP)</a></li>
            <li class="package_li"><a href="isla-de-margarita-posada-la-cuadra-suites.php" class="package_a_ul">Posada LA CUADRA SUITES (SUPERIOR)</a></li>
        </ul>
        
        <h2 style="font-size:20px;">Hoteles en Isla de Coche</h2>
        
        <ul id="package_ul">
            <li class="package_li"><a href="isla-de-coche-sunsol-hotel-punta-blanca.php" class="package_a_ul">SUNSOL HOTEL PUNTA BLANCA- ISLA DE COCHE (4 estrellas)</a></li>
            <li class="package_li"><a href="isla-de-coche-hotel-coche-paradise.php" class="package_a_ul">HOTEL COCHE PARADISE- ISLA DE COCHE (4 estrellas)</a></li>
        </ul>
        
        <h2 style="font-size:20px;">Hoteles en Parque Nacional Morrocoy</h2>
        
        <ul id="package_ul">
            <li class="package_li"><a href="parque-nacional-morrocoy-hotel-gabon.php" class="package_a_ul">HOTEL GABON (CHICHIRIVICHE)    (3 ESTRELLAS)</a></li>
            <li class="package_li"><a href="parque-nacional-morrocoy-coral-suites-hotel.php" class="package_a_ul">CORAL SUITES HOTEL & SPA ( CHICHIRIVICHE) (5 ESTRELLAS)</a></li>
        </ul>
        
        <h2 style="font-size:20px;">Hoteles en Península Paraguaná</h2>
        
        <ul id="package_ul">
            <li class="package_li"><a href="peninsula-paraguana-hotel-villa-mar-suites.php" class="package_a_ul" title="Margarita Princess">HOTEL VILLA MAR SUITES -PUNTO FIJO (TRES ESTRELLAS) </a></li>
            
            <li class="package_li"><a href="peninsula-paraguana-hotel-cardon.php" class="package_a_ul" title="Margarita Princess">HOTEL CARDON (PUNTO FIJO) (4 estrellas)</a></li>
        </ul>
        
        <h2 style="font-size:20px;">Posadas en Península Paraguaná</h2>
        
        <ul id="package_ul">
            <li class="package_li"><a href="peninsula-paraguana-posada-aeropuerto-inn.php" class="package_a_ul" title="Margarita Princess">POSADA AEROPUERTO INN (PUNTO FIJO) (ESTANDAR)</a></li>
        </ul>
    </div>

    <?php
    $precio_cambiante=1;
    include("footer.php");
    ?>
</body>