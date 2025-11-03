<?php
$src = imagecreatefromjpeg("image.jpg");
$new_width = 200;
$src_width = imagesx($src);
$src_height = imagesy($src);
$ratio = $src_height / $src_width;
$new_height = $new_width * $ratio;

$new = imagescale($src, $new_width, $new_height);

header("Content-type: image/jpeg");
imagejpeg($new);

imagedestroy($src);
imagedestroy($new);
?>
