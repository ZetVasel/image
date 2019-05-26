<?php
create_image();


function  create_image(){
    $width = $_GET['width'];
    $heght = $_GET['height'];
    $radius = $_GET['radius'];
    $circles = $_GET['circles'];
    $im = @imagecreate($width, $heght) or die("Cannot Initialize new GD image stream");
    $background_color = imagecolorallocate($im, 255, 255, 255);
    $red = [255,0,0];
    $green =[124,252,0];
    $black =[0,0,0];
    $blue =[30,144,255];
    $colors =array ($red,$green,$black,$blue);
    for($i = 0;$i<$circles;$i++){
        $randomX = mt_rand(0+$radius,$width-$radius);
        $randomY = mt_rand(0+$radius,$heght-$radius);
        $randCol = mt_rand(0,3);
        $collor = imagecolorallocate($im,$colors[$randCol][0],$colors[$randCol][1],$colors[$randCol][2]);
        imagefilledellipse($im,$randomX,$randomY,$radius*2,$radius*2,$collor);

    }
    imagejpeg($im,"image.jpg");
    imagedestroy($im);
    header("Location: http://exercise-master/Html/");
}