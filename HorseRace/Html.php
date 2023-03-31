<?php

$horse = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HorseRace</title>
    <link rel="stylesheet" href="Race.css">
</head>
<body><div class="Horses">';

for($id = 1; $id <= $horseCount; $id++){
    $horse .= '<img id="horse' . $id . '" src="https://s.hdnux.com/photos/01/21/60/50/21432834/4/1200x0.jpg" alt="Horse' . $id . '">';
}

$horse .= "\n" . '</div><div class="Line">';

for($t = 1; $t < $horseCount; $t++){
    $horse .= '<img src="https://th.bing.com/th/id/R.4d0825aef6a82595fac4eb927480648a?rik=4%2fiKnCnNk87qug&riu=http%3a%2f%2fwww.clipartbest.com%2fcliparts%2fnTB%2fErk%2fnTBErkErc.jpg&ehk=83SsusVrfaUhjIsuHy%2bS6b%2fj58pRy7ru4b6xGL%2fwdNY%3d&risl=&pid=ImgRaw&r=0" alt="FinishLine">';
}

$horse .= /*</div><div class="Medal">
<img src="https://th.bing.com/th/id/OIP._3PEJRMX_dj0QA7Z2q8gwwHaHa?pid=ImgDet&rs=1" alt="GoldMedal">
</div>*/
'</body>
</html>';

file_put_contents("HorseRace/Race.html", $horse);