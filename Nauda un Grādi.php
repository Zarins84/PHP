<?php
echo "sveiki! vēlaties pārveidot euro uz usd vai otrādi, vai arī fahrenheit uz celsius un otrādi?\n";
echo "tad lai pārveidotu eiro uz usd spidiet 1\n";
echo "ja vēlaties pārveidot usd uz eiro spiediet 2\n";
echo "ja vēlaties pārveidot fahrenheit uz celsius spiediet 3\n";
echo "ja vēlaties pārveidot celsius uz fahrenheit spiediet 4\n";


$sk = fgets(STDIN);
$sk = (int)($sk);

if ($sk == 1) {
    echo "pārveidosiet eiro uz usd! ievadiet naudas summu kuru gribat pārveidot\n";
    $eur = fgets(STDIN);
$eur = (int)($eur);
$us = $eur * 1.09650;

echo $us ."usd";
}
elseif($sk == 2) {
    echo "pārveidosiet usd uz eiro! ievadiet naudas summu kuru gribat pārveidot\n";
    $usd = fgets(STDIN);
$usd = (int)($usd);
$eu = $usd * 0.911990;
echo $eu ."euro";
}
elseif($sk == 3) {
    echo "pārveidosiet fahrenheit uz celsius! ievadiet fahrenheith lai pārveidotu\n";
    $fah = fgets(STDIN);
$fah = (int)($fah);
$ce = ($fah - 32) * 5/9;
echo $ce ."celsius";
}
elseif($sk == 4) {
    echo "pārveidosiet celsius uz fahrenheit! ievadiet celsius lai pārveidotu\n";
    $cel = fgets(STDIN);
$cel = (int)($cel);
$fa = $cel * 9/5 + 32;
echo $fa ."fahrenheit";
}
else {
    echo "nepareizi";
}
