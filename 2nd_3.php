<?php
$filename = "image.png";

$newwidth = 200;
$newheight = 100;
header("Content-Type: image/png");

list($width, $height) = getimagesize($filename);

$newimg = imagecreatetruecolor($newwidth, $newheight);
$oldimg = imagecreatefrompng($filename);

imagecopyresized($newimg, $oldimg, 0, -20, 0, 0, $newwidth*2, $newheight*2, $width*2, $height );
imagepng($newimg);
?>
