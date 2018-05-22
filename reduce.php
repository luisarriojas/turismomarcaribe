<?php

header('Content-type: image/jpeg');

//reduccion de imagen
list($width, $height) = getimagesize("img/" . $_GET['file']); //se determina el porcentaje de reduccion
$percent = 1;
$width_canvas = 104;
$height_canvas = 104;

if (($width_canvas / $width) >= ($height_canvas / $height)) {
    $percent = $width_canvas / $width;
} else {
    $percent = $height_canvas / $height;
}

$new_width = $width * $percent;
$new_height = $height * $percent;

$image_target = imagecreatetruecolor($width_canvas, $height_canvas); //se crea el canvas destino y se le coloca color blanco de fondo
imagefill($image_target, 0, 0, imagecolorallocate($image_target, 0xff, 0xff, 0xff));

$image_source = imagecreatefromjpeg("img/" . $_GET['file']);  //se importa la imagen origen y se redimensiona				
imagecopyresampled($image_target, $image_source, ($width_canvas - $new_width) / 2, ($height_canvas - $new_height) / 2, 0, 0, $new_width, $new_height, $width, $height);

imagejpeg($image_target, null, 75);
imagedestroy($image_source);
imagedestroy($image_target);
?>