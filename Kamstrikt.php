<?php

$pantins = ['akmens', 'šķēres', 'papīrīts', 'viens', 'divi', 'trīs'];

foreach($pantins as $word) {
    for($i = 0; $i < strlen($word); $i++) {
        echo $word[$i];
        usleep(80000);
    }
    echo "\n";
}

echo "\n";
usleep(30);
echo "rādam tagad!!! \n";
sleep(2);
echo "\n";
$computer = rand(0, 2);
echo "es saku: " .strtoupper($pantins[$computer]);

