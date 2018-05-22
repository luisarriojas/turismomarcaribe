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
        <h1>ALQUILER DE LANCHAS Y YATES </h1>

        <p>En Turismo Mar Caribe, C.A. siempre pensamos en todas las alternativas de turismo y recreación, como por ejemplo, alquiler de lanchas y veleros disponibles, listos para complacer los gustos y la seguridad de nuestros clientes. Por ello, tenemos embarcaciones ajustadas a sus necesidades o posibilidades económicas. Nuestras embarcaciones pueden ser contratadas por uno o varios días. </p>

        <h2>CONDICIONES DE CONTRATACION DE LANCHAS:</h2>

        <ul>
            <li>El alquiler comienza a partir desde las 8:30 a.m. hasta las 3:30p.m., hora donde la embarcación deberá estará llegando al muelle de zarpe</li>
            <li>La lancha es de uso exclusivo sólo para el grupo o persona que lo alquila y la lancha permanece con usted durante el tiempo contratado</li>
            <li>El permiso de navegación es dentro del Parque Nacional Morrocoy </li>
            <li>El usuario debe dirigirse a la marina asignada y pagar el estacionamiento de su vehículo</li>
            <li>El paseo es realizado con una ruta sugerida por el capitán o baqueano (Dependiendo del origen de    zarpe)</li>
            <li>La lancha es tripulada únicamente por el capitán o baqueano</li>
            <li>El capitán o baqueano permanece con usted durante el alquiler</li>
            <li>Nuestros planes de alquiler de lanchas puede o no contemplar  el suministro de almuerzos, bebidas no alcohólicas, sombrillas, toldos y snacks con un costo</li> adicional (Dependiendo del plan seleccionado)
            <li>En caso de no asistir el día y hora estipulada no se hará devolución de dinero</li>
            <li>En caso se retrase la salida de la embarcación o regrese la embarcación prematuramente por causas ajenas a nuestra voluntad, tales como lluvias, fuerte oleaje, tormenta, etc., no se devolverá el dinero </li>
            <li>En caso que no pueda salir la embarcación del muelle por falla en su operatividad, no es responsabilidad de nosotros encontrarle otra embarcación, sólo se le reintegrará el dinero a una cuenta bancaria que nos indique en día laborable</li>
            <li>En caso que se presente una falla en la embarcación durante el trayecto se le dejará en una cayo o isla mientras se corrige la falla, y de ser una falla significativa, se le buscará en otra embarcación y se le reintegrará el dinero previo ajuste de gastos.</li>
        </ul>

        <span class="alert">NOTA: Todas nuestras embarcaciones son fabricadas en fibra de vidrio y cumplen con todas las regulaciones del Instituto Nacional de los Espacios Acuáticos (INEA) en cuanto a seguridad marítima se refiere (licencia de navegación de la lancha o peñero, marinero con licencia de patrón deportivo o artesanal, dotación y certificado de radio, chalecos salvavidas, señales de emergencia, kit de primeros auxilios, etc.), seguro de responsabilidad civil, mantenimiento al día.</span>

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