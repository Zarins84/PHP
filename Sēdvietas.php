<?php
$jsonST = @json_decode(file_get_contents('occupSeats.json'), true);
if(!is_array($jsonST))
{
    $jsonST = makeArrayNew();
}

echo "Fails, kas nolasīts izskatās šādi: \n";
print_r ($jsonST);

$OG = count($jsonST) - array_sum($jsonST);
if ($OG > 0){
echo "mums ir " .$OG ." brīvas vietas";
}
else {
    echo "sorry nav vietas";
    $jsonST = makeArrayNew();
file_put_contents('occupSeats.json', json_encode($jsonST,JSON_PRETTY_PRINT));
}
/*elseif($OG > $OG) {
    echo "sorry nav vietas";
}*/



echo "\ncik vietas gribēsiet?\n";

$sk = fgets(STDIN);
$sk = (int)($sk);

if ($sk > 0 && $sk <= 4 && $sk <= $OG) {
    echo "ok šeit būs $sk biļetes \n";
    }
else {
    echo "nevaru šo izdarīt";
    exit();
}

for($i = 0; $i < 10; $i++) {
    if($jsonST[$i] == 0) {
        $jsonST[$i] = 1;
        echo "vieta Nr: " .($i+1) ."\n";
        $sk--;
    }
    if(!$sk) { //tas pats kas if($sk == 0);
        break;
    }
}


file_put_contents('occupSeats.json', json_encode($jsonST,JSON_PRETTY_PRINT));
echo "\nvietas saglabātas";
function makeArrayNew()
{
    $arr = [];
    for ($i = 0; $i < 10; $i++)
    {
        //$rand = rand(0, 1);
         $arr[] = 0;
    }
    return $arr;
}



