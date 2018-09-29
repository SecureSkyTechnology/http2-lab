<?php
$start_x = 0;
$start_y = 0;
$cut = 16;
if(isset($_GET["x"]) && isset($_GET["y"]) && isset($_GET["cut"])) {
    $start_x = htmlspecialchars($_GET['x']);
    $start_y = htmlspecialchars($_GET['y']);
    $cut = htmlspecialchars($_GET['cut']);
}

$size = getimagesize(__DIR__."/img/performance/jiro.jpg");
$size_x = $size[0]/$cut;
$size_y = $size[1];
$base_image = imagecreatefromjpeg(__DIR__."/img/performance/jiro.jpg");
$crop_image = imagecrop($base_image, array('x' => $start_x, 'y' => $start_y, 'width' => $size_x, 'height' => $size_y));

if($crop_image !== FALSE) {
    header('Content-type: image/jpg');
    imagejpeg($crop_image);
    imagedestroy($crop_image);
}
?>
