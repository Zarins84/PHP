<?php
$visasolas = [];
for($i = 0; $i < 20; $i++) {
    $visasolas[$i] =  rand(40,70);
    echo "$visasolas[$i], ";

}
echo "\n";
foreach($visasolas as $ola) {
    echo "$ola, ";
}

$small = [];
$medium = [];
$large = [];
foreach($visasolas as $ola) {
    
    if($ola < 50) {
        array_push($small, $ola);
    }elseif($ola < 60) {
        array_push($medium, $ola);
    }elseif($ola < 70) {
        array_push($large, $ola);
    }
}

echo "\n";
echo "\n" .count($small) ." mazas olas:" .implode(",", $small);
echo "\n" .count($medium) ." viduejas olas:" .implode(",", $medium);
echo "\n" .count($large) ." lielas olas:" .implode(",", $large);
