<?php

$css = "
body{
    background-color: gray;
    margin: 0;
    overflow: hidden;
}
img{
    width: 10%;
    animation-name: racing;
    display: flex;
    flex-direction: column;
}
.Horses{
    z-index: 2;
    position: absolute;
}
.Line{
    z-index: 1;
    padding-left: 900px;
    position: absolute;
    width: 200%;
}";/*
.Medal{
    z-index: 3;
    position: absolute;
    padding-left: 1200px;
    width: 200%;
    visibility: hidden;
}" . "\n";*/

for($id = 1; $id <= $horseCount; $id++){
    $random = mt_rand(1000, 2000);
    $css .= "#horse" . $id . "{
        animation-duration: " . $random / 100 . "s;
    }" . "\n";
}

$css .= "@keyframes racing{
    from {transform: translateX(0);}
    to {transform: translateX(1000px);}
}";

file_put_contents("HorseRace/Race.css", $css);