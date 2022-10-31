<?php

function getCoboidVolume($vertical, $beside, $height) {
    $volume = $vertical * $beside * $height;
    print "直方体の体積は".$volume."c㎥";
}

echo getCoboidVolume(5, 10, 8);

?>