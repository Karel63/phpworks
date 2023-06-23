<?php
$data = "
gT áu natp tnkiuč clěl   tii ipoen edc,bd tynoa čoču  hdeabhr
vprrsečnyaě oveě_íi udrůacdk rlvevcěu evs evččee íetkatt oj k
tůoa ekíat nldapée tnlontlíooppipbr ujdc.t ctíibdpo ěuca ndin
ormjao  ššaa .llupelvsěiy pgé dod_noěe íěPká totaubo,k ljěcek
ča oesllynÚblesŠdne_íosbřčlčdv.chvhirevil o kýollesSáe uáa  l
lTílpoz ěk onpyaěnb st oiée a nPirtoríá nzib b o pýanin lBrie
 anteasbo. npya.ý  oot níttpíj o.  a _sčnea  kzštnu.ttíitilnš
aek.btodlže dt  omrtjue páoealuícČlcmectiharudeldd epk inaí.o
s_ěev u yijniíns.sřmbmnlaurnol n loauučtencn  eouhb yhté nnor
l nnPláhce d d ypi lš onkoskisutízdk er_ehnovrnkvu dá.c detbs
niáějoe áhrbtsycoazMoťb o vti vcd nonvěpepbí eleneas zsh ykye
e.zvájiknni   eoyeite_karaiprěhiyopm  uepo oyabvoce Roleort  
 eědanpčice vor  rnptoěckv e,ízeelvlčtesalŠj
dhilár áe luťaisookžv.r ědaě i kiét á evék o
boo e pin eys eclziohano lu  _caos aprard.en
yrobvi zčb,sa ekíkmmSiuncčsáuelylsdted nl.e";

$y = 4;
$sizey = 4 * 4;
$x = 4;
$sizex = 16 * 4;
$letters = [];
$n = 0;
$tmp = [];
$cipher1 = [[1, 0, 1, 1],[0, 1, 1, 1],[1, 0, 1, 1],[1, 1, 1, 0]];
$cipher2 = [[1, 1, 1, 0],[1, 0, 1, 1],[0, 1, 1, 1],[1, 0, 1, 1]];
$cipher3 = [[1, 0, 1, 1],[1, 1, 1, 0],[1, 0, 1, 1],[0, 1, 1, 1]];
$cipher4 = [[0, 1, 1, 1],[1, 0, 1, 1],[1, 1, 1, 0],[1, 0, 1, 1]];

$lines = explode("\n", $data);
foreach($lines as $line){
    $lines[$n] = str_split($line);
    $n++;
}

for($yn = 0; $yn < $sizey; $yn += $y){
    for($xn = 0; $xn < $sizex; $xn += $x){
        
    }
}

var_dump($tmp);
