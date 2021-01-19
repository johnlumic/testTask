<?php
$filename = "image.png";

$newwidth = 200;
$newheight = 100;
header("Content-Type: image/png");

list($width, $height) = getimagesize($filename);

$newimg = imagecreatetruecolor($newwidth, $newheight);
$oldimg = imagecreatefrompng($filename);

$cord_w = $newwidth/4;
$cord_h = 0;

imagecopyresized($newimg, $oldimg, $cord_w, $cord_h, 0, 0, $newwidth, $newheight, $width*2, $height );
imagepng($newimg);
?>