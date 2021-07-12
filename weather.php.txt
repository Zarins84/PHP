<?php

date_default_timezone_set("Europe/Riga");
echo "Šobrīd ir " .date("H:i:s") . " \n";

echo "Ielādēju Wetaher Cesis json data... \n\n";
$n = json_decode(file_get_contents('http://lax.lv/data/weather.php'),  true);

//echo "te ir visi weather dati. Redzam, ka masīvs ar 3 elementiem \n";
//print_r($n);

//echo "\nIzvadam tikai temperatūras datus:\n";
$temperatureData = $n[0]['data']; //dati par temperatūru atrodas masīva 0-tajā indexaa
$windData = $n[2]['data'];
//print_r($temperatureData); //šo nokomentē, kad esi iepazinies ar datu struktūru
//print_r($windData);

//izvadam kā piemēru sev 0-tā indexa laiku un temperaturu
// katrs elements satur asociatīvo masīvu, kur x ir timestamp, bet y ir vērtība

$min = 100;
$min2 = 100;
$max = 0;
$max2 = 0;
$avg = 600;
$avg2 = 600;
$num = 0;
$num2 = 0;
$max2 = 0;
$arrayx = 0;
$arrayx2 = 0;
$string = "bija šodien";
$strin = "bija šodien";
$string2 = "bija šodien";
$strin2 = "bija šodien";
$myTime = $temperatureData[0]['x'];
$myValue = $temperatureData[0]['y'];
$myTime2 = $windData[0]['x'];
$myValue2 = $windData[0]['y'];


for($i = 0; $i < count($temperatureData); $i++){
echo date('j.m.Y G:i',$temperatureData[$i]['x']) ." ir " .$temperatureData[$i]['y'] ."°C\n";
 if($temperatureData[$i]['y'] < $min){
    $min = $temperatureData[$i]['y'];
    $minTime = $temperatureData[$i]['x'];
    $minIn = $i;
    }
    if($temperatureData[$i]['y'] > $max){
    $max = $temperatureData[$i]['y'];
    $maxTime = $temperatureData[$i]['x'];
    $maxIn = $i;
    }
}
foreach($temperatureData as $av){
    //echo date('j', $av['x']);
if(date('j', $av['x']) < date('j')){
    $string = "bija vakar";
}
}

foreach($temperatureData as $av){
if(date('j', $av['x']) == date('j')){
    $num++;
$arrayx = $arrayx + $av['y'];

}
}
$avg = $arrayx / $num;

foreach($temperatureData as $dat){
    if(date('j', $dat['x']) == date('j')){
    if($dat['y'] <= 1){
        $raksturojums = "ārā ir vēss";
    }
    elseif($dat['y'] <= 15){
        $raksturojums = "ārā ir mērens";
    }
    elseif($dat['y'] >= 16){
        $raksturojums = "ārā ir silts";
    }
    else{
        $raksturojums = "nezinu";
    }
}
}
if($myValue <= 1){
        $rakst= "ārā ir vēss";
    }
    elseif($myValue <= 15){
        $rakst= "ārā ir mērens";
    }
    elseif($myValue >= 16){
        $rakst= "ārā ir silts";
    }
    else{
        $rakst= "nezinu";
    }

for($i = 0; $i < count($windData); $i++){
//echo date('j.m.Y G:i',$windData[$i]['x']) ." ir " .$windData[$i]['y'] ." m\s\n";
 if($windData[$i]['y'] < $min2){
    $min2 = $windData[$i]['y'];
    $minTime2 = $windData[$i]['x'];
    $minIn2 = $i;
    }
    if($windData[$i]['y'] > $max2){
    $max2 = $windData[$i]['y'];
    $maxTime2 = $windData[$i]['x'];
    $maxIn2 = $i;
    }
}
foreach($windData as $av){
if(date('j', $av['x']) < date('j')){
    $string2 = "bija vakar";
}
}

foreach($windData as $av){
if(date('j', $av['x']) == date('j')){
    $num2++;
$arrayx2 = $arrayx2 + $av['y'];

}
}
$avg2 = $arrayx2 / $num2;

foreach($windData as $dat){
    if(date('j', $dat['x']) == date('j')){
    if($dat['y'] == 0){
        $raksturojums2 = "bezvējš";
    }
    elseif($dat['y'] <= 1){
        $raksturojums2 = "viegls vējš";
    }
    elseif($dat['y'] <= 3){
        $raksturojums2 = "iespējams spēcīgs vējš";
    }
    else{
        $raksturojums2 = "spēcīgs vējš";
    }
}
}
if($myValue2 == 0){
        $rakst2= "bezvējš";
    }
    elseif($myValue2 < 1){
        $rakst2= "viegls vējš";
    }
    elseif($myValue2 <= 3){
        $rakst2= "iespējams spēcīgs vējš";
    }
    else{
        $rakst2= "spēcīgs vējš";
    }

echo "\ntagad ir " .date('j.M.Y G:i', $myTime) ." = " .$myValue .' °C ' ."$raksturojums\n"; //šo nokomentē, kad saprasts un nav tev vairs vajadzigs
echo "mazākie grādi $string " .date('j.m.Y G:i',$minTime) ." = $min °C\n";
echo "lielākie grādi $string " .date('j.m.Y G:i',$maxTime) ." = $max °C\n";
echo "vidējais gaisa siltums šodien ir " .round($avg,2), " °C\n";
echo "\ntagad ir " .date('j.M.Y G:i', $myTime2) ." = " .$myValue2 .' m\s ' ."$rakst2\n";
echo "mazākais vēja ātrums $string2 " .date('j.m.Y G:i',$minTime2) ." = $min2 m\s\n";
echo "lielākais vēja ātrums $string2 " .date('j.m.Y G:i',$maxTime2) ." = $max2 m\s\n";
echo "vidējais vēja ātrums šodien ir " .round($avg2,2), " m\s";
echo "\nŠodien cēsīs ir $raksturojums2 un $raksturojums";


/*$sk = fgets(STDIN);
if($sk >= 0){
    $myValue = $sk;
    
}
echo "$myValue";*/
/*
1. uztaisam ciklu, kas izdrukā visus masīva laikus un atbilstošās temperatūras tajos
2. Atrodam min / max temperatūras cēsīs izvadam tās kopā ar laiku, kad bija (arī dienu)
piemēram, šodien vai vakar.
3. atrodam vidējo gaisa temperatūru cēsīs šodien, līdz šim brīdim

777. to pašu ar vēja ātrumu un vēja brāzmām m/s

778. Uztaisiet human-easy izvadu, visu lieko aizkomentējot. piemeram, 
"šodien Cēsīs silts un mierīgs. Gaisa temp naktī ap 2 °C, bet dienā uzsilis līdz 10"
"Mierīgs vējš, ar ātrumu 2 m/s, lai gan brāzmās tas sasniedzis pat 8 m/s un tas bija"
"6:00 no rīta". apmeram tā- paši izdomā textu, lai interesanti

!!! uzdevumu daram pa posmiem, palīdzot tiem, kam nepieciešams - tikt līdzi
salīdziniet rezultātus ar kolēģiem- visiem beigu beigās jāsanāk vienādi

atveriet pārlūkā jaunu Tab un vievadiet adresi https://lax.lv/charts/weather.php lai redzētu grafiku
tā jūs varēsiet salīdzināt, vai esiet veikuši algoritmu pareizi
*/
//echo "\n te būs ko darīt :) \n";


