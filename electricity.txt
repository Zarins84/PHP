<?php
date_default_timezone_set('Europe/Riga');
echo "laiks tagad ir ";
echo date('H:i:s');
echo "\nuzgaidiet...\n";

$n = json_decode(file_get_contents('http://lax.lv//electricity-price-json/'), true);
//print_r($n);

$hour = $n['hourly'];
//print_r($hour);
$min = 1;
$index = -1;
$index2 = -1;
$diena = 'šodien';
$current = (int)date('G');

//echo "$current";
echo "\nelektrības cenas līdz rītdienai\n";
for($i = 0; $i <= 48; $i++){
    echo "$hour[$i]\n";
    if($hour[$i] < $min){
    $min = $hour[$i];
    $index = $i; 
    }
    elseif($hour[$i] > $max){
    $max = $hour[$i];
    $index2 = $i;
    }
    if($i == $current){
    echo "šī brīža cena ir $hour[$i]\n";
}
}
for($a = 0; $a <= 48; $a++){
    if($hourly[$a] == 0){
        $laiks = $a;
        break;
    }
}
for($a = 0; $a < $laiks; $a++){
if($hour[$a] < $min){;
$min = $hour[$a];
$index = $a;
}
}
if($index > 24){
    $laiks = $index;
    $laiks = $laiks - 24;
    $laiks = ($laiks * 3600) + 3600;
    $diena = 'rītdien';
   
}
else{
    $diena = 'šodien';
}

echo "mazākā cena ir $min: tā index ir $index: cena mainīsies $diena " .date('H:i:s', time()+ $laiks);
if($index2 >= 24){
    $laiks2 = $index2;
    $laiks2 = $laiks2 - 24;
    $laiks2 = ($laiks2 * 3600) + 3600;
    $diena = 'rītdien';
   
}
else{
    $diena = 'šodien';
}
echo "\nlielākā cena ir $max: tā index ir $index2: cena mainīsies $diena " .date('H:i:s', time()+ $laiks2);




