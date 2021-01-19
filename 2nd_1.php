<?php
$filename = 'image.png';
$new_width = 200;
$new_height = 100;
header('Content-Type: image/png');

list($width, $height) = getimagesize($filename);

$image_p = imagecreatetruecolor($new_width, $new_height);
$image = imagecreatefrompng($filename);
imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

imagepng ($image_p);

?>