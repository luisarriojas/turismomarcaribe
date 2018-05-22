<?php
ob_start('ob_gzhandler');
?>
<!doctype html>
<head>
    <?php
    $metaDescription = "";
    $metaKeywords = "";
    $metaTitle = "Bodas Playeras";

    include("metatags.php");

    include("style-script.php");
    ?>
</head>
<body>
<?php
include("google-analytics.php");

include("header.php");

if (isset($_SESSION['error_message'])) {
    include("error-message.php");
}
?>

<div id="packContainer">
    <div id="packColumn1">
        <div class="packInfo">
            <h1 id="packH1"><?php echo $metaTitle; ?></h1>

            <p class="packP">En Turismo Mar Caribe, C.A. nos especializamos en la coordinación y realización de Bodas
                Playeras y nuestro objetivo es que usted disfrute a plenitud de uno de los momentos más importantes de
                su vida. La boda perfecta que siempre recordará con orgullo y felicidad.<br><br></p>

            <p class="packP">Nuestra misión es crear un evento inolvidable para usted y sus invitados con una
                planificación impecable y de excelente calidad.</p>

            <p class="packP">Nuestro ámbito de actuación es Morrocoy (Tucacas / Chichiriviche), Los Roques, Isla de
                Margarita y Carenero, porque sólo conociendo profundamente en las áreas en las que trabajamos y a los
                profesionales que operan en la misma, podemos ofrecer un servicio con todas las garantías. Turismo Mar
                Caribe y sus proveedores son sinónimos de calidad, exclusividad, profesionalismo, dedicación y trato
                personalizado.</p>
        </div>

        <div class="packInfo">
            <h2 class="packH2"><?php echo $metaTitle; ?> ofrece en los hermosos escenarios de Morrocoy lo
                siguiente:</h2>

            <ul class="packUL">
                <li>Celebración de la Boda a orillas del mar</li>
                <li>Decoración de toda el área del evento</li>
                <li>Sillas y mesas decoradas para los novios y sus invitados</li>
                <li>Mesa decorada para la torta y para el brindis</li>
                <li>Instalación de toldos decorativos</li>
                <li>Decoración para la mesa del banquete</li>
                <li>Brindis</li>
                <li>Catering: servicio de buffet para todo tipo de comidas, pasapalos (consultar opciones)</li>
                <li>Estaciones de comida</li>
                <li>Pastel de bodas</li>
                <li>Mesa de quesos</li>
                <li>Maquillaje y peluquería profesional</li>
                <li>Música: Orquestas, conjuntos musicales, grupo de tambores, grupos de samba, DJ´s, animadores o la
                    música de su agrado
                </li>
                <li>Hora Loca estilo playero</li>
                <li>Fotos y videos digitalizados entregados en CD</li>
                <li>Traslados de los novios y sus invitados (según su selección en yates, lanchas, peñeros)</li>
                <li>Hospedaje en hoteles y posadas</li>
                <li>Fuegos artificiales – Espectáculos pirotécnicos (Opcional)</li>
                <li>Regalos o souvenirs para los invitados</li>
                <li>Coordinadores de bodas</li>
                <li>Planificación de su Luna de Miel</li>
            </ul>
        </div>

        <div class="packInfo"
             style="-moz-column-count: 1; -webkit-column-count: 1; -o-column-count: 1; column-count: 1;">
            <h1 id="packH1">Requisitos para contraer matrimonio</h1><br>

            <h2 class="packH2">Matrimonio Civil</h2>
            <ul class="packUL">
                <li>Constancia de Residencia</li>
                <li>Si alguno o ambos contrayentes es divorciado, deberá consignar copia certificada de la sentencia
                    firme que declare nulo o disuelto el matrimonio anterior, con la constancia de estar ejecutoriada.
                </li>
                <li>Si alguno o ambos contrayentes tienen hijos menores de edad, deberán presentar:
                    <ul>
                        <li>La respectiva Curatela acordada por el Tribunal de Protección del Niño y el Adolescente</li>
                        <li>Original y Copia de las Cédulas de Identidad</li>
                        <li>Original y Copia de la Cédula de Identidad de los Testigos</li>
                        <li>Copia de las Partidas de Nacimiento</li>
                    </ul>
                </li>
            </ul>
            <br>

            <h2 class="packH2">Matrimonio Eclesiástico</h2>
            <ul class="packUL">
                <li>Ambos deben estar bautizados y presentar Fé de Bautismo actualizada</li>
                <li>Haber hecho la Confirmación y presentar el acta de la misma</li>
                <li>Presentar constancia de Matrimonio Civil</li>
                <li>Asistir al Curso Prematrimonial</li>
                <li>No haber estado casados antes por la Iglesia</li>
                <li>Presentarse ante el Párroco para que autorice la ceremonia</li>
            </ul>
        </div>

        <div class="packInfo"
             style="-moz-column-count: 1; -webkit-column-count: 1; -o-column-count: 1; column-count: 1;">
            <h1 id="packH1">Decoración y Arte Floral</h1><br>

            <p class="packP">En Turismo Mar Caribe ofrecemos detalles únicos que realzan ese estilo inconfundible para
                el momento inolvidable de su boda, tales como la decoración , el arte floral, el catering, la música y
                entretenimiento y la planificación de su Luna de Miel.</p>

            <br>

            <h2 class="packH2">Arte Floral</h2>

            <p class="packP">Turismo Mar Caribe ofrece una gran variedad de artes florales para su Boda de Playa.
                Contamos con arreglos florales elaborados especialmente para estos eventos de mar y garantizan la
                belleza, realce y durabilidad durante el evento. Contamos con:</p>
            <ul class="packUL">
                <li>Diseños florales</li>
                <li>Centros de mesa</li>
                <li>Decoración de mesones</li>
                <li>Detalles en las sillas</li>
                <li>Decoración de salones</li>
                <li>Bouquets de novias</li>
                <li>Boutonnier de novio</li>
                <li>Bouquets madrinas de honor</li>
                <li>Rosas personalizadas</li>
                <li>Decoración Nave Central Iglesia</li>
                <li>Decoración del Altar</li>
                <li>Arcos de flores</li>
                <li>Gazebos</li>
                <li>Camino de pétalos</li>
                <li>Camino de antorchas</li>
                <li>Decoración para Bodas en yate o catamarán</li>
                <li>Decoración para Bodas en la Playa</li>
            </ul>

            <br>

            <?php
                $base = "bodas-playeras-arte-floral";
                $q = 4;

                include("album-fotos.php");
            ?>
            <div class="space"></div>
        </div>

        <div class="packInfo"
                     style="-moz-column-count: 1; -webkit-column-count: 1; -o-column-count: 1; column-count: 1;">
            <h2 class="packH2">Decoración</h2>

            <p class="packP">Ofrecemos diversas alternativas en cuanto a decoración se refiere. Tenemos:</p>
            <ul class="packUL">
                <li>Toldos de diversos tamaños (con o sin aire acondicionado)</li>
                <li>Pisos de parquet</li>
                <li>Finas sombrillas con bases de madera</li>
                <li>Jardines con diversas plantas naturales</li>
                <li>Iluminación inteligente y luz indirecta para la locación de su Boda de Playa</li>
                <li>Caminerías y ambientación de exteriores</li>
            </ul>

            <br>

            <?php
            $base = "bodas-playeras-decoracion";
            $q = 7;

            include("album-fotos.php");
            ?>

            <div class="space"></div>
        </div>

        <div class="packInfo"
                     style="-moz-column-count: 1; -webkit-column-count: 1; -o-column-count: 1; column-count: 1;">
            <h2 class="packH2">Catering</h2>

            <br>

            <?php
            $base = "bodas-playeras-catering";
            $q = 15;

            include("album-fotos.php");
            ?>

            <div class="space"></div>

            <h2 class="packH2">Música</h2>
        </div>

        <div class="packInfo"
                     style="-moz-column-count: 1; -webkit-column-count: 1; -o-column-count: 1; column-count: 1;">
            <h2 class="packH2">Luna de Miel</h2>

            <p class="packP">En Turismo Mar Caribe planificamos y realizamos la Luna de Miel de los recién casados dando
                una experiencia única, inigualable. Tú escoges el destino, bien sea nacional o internacional; nosotros
                realizamos todos los trámites de alojamiento, boletos aéreos, paseos o tours guiados, espectáculos,
                etc.</p>

            <p class="packP">Conversa con nosotros para orientarte de acuerdo a tus requerimientos y posibilidades
                económicas.</p>

            <?php
            $base = "bodas-playeras-luna-de-miel";
            $q = 4;

            include("album-fotos.php");
            ?>
            <div class="space"></div>
        </div>
    </div>

    <div id="packColumn2">
        <?php
        $formUrl = $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF'];
        include("cotizador.php");
        ?>

        <div id="packPhotos">
            <?php
            $base = "bodas-playeras";
            $q = 8;

            include("album-fotos.php");
            ?>

            <div class="space"></div>
        </div>
    </div>

    <div class="space"></div>
</div>

<?php
include("footer.php");
?>
</body>