<?php
$imagesDir = 'memes/';
$images = glob($imagesDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
$randomImage = $images[array_rand($images)];
$type = pathinfo($randomImage, PATHINFO_EXTENSION);
header("Content-Type: image/{$type}");
readfile($randomImage);
?>
