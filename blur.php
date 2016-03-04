<?
set_time_limit(60);

$width = intval($_REQUEST["w"]);
$height = intval($_REQUEST["h"]);

if ($width <= 0 || $width > 1920) {
    $width = 1920;
}
if ($height <= 0 || $height > 1080) {
    $height = 1080;
}

$image = new \Imagick();
$image->newPseudoImage($width, $height, "plasma:fractal");
//$image->blurImage(0,100);
$image->setImageFormat("png");
header("Content-Type: image/png");
echo $image->getImageBlob();