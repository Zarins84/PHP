<?php
// 4 kases
//5, 10,20,50
//katra pa 10
//cik iesniegt..
//jazina vai ir nauda
//ja beidzas kada naida tad japazino
//ar komandu ADD viss resetojas (nauda)
// STATUSS parada cik nauda


$drawer = @json_decode(file_get_contents('banka.json'),true);
if(!is_array($drawer))
{
    $drawer = [10 ,10 ,10 ,10];
}
print_r($drawer);
$nauda = $drawer[0] * 5 + $drawer[1] * 10  + $drawer[2] * 20 + $drawer[3] * 50;
echo "bankomatā ir $nauda EUR \n";


//$drawer = [10 ,10 ,10 ,10];
echo "ATM : cik naudu vēlaties izņemt? \n";
$cash = fgets(STDIN);

if($nauda < $cash)
{
    echo "nepietiek banknotes\n";
}

$cik50 = (int)($cash / 50);

if($cik50 && $drawer[3] >= $cik50)
{
    $drawer[3] -= $cik50;
    echo "50 EUR: $cik50 \n";
}
elseif($cik50 > 0 && $drawer[3] > 0)
{
    $cik50 = $drawer[3] ;
    echo "50 EUR: $cik50 \n";
    $drawer[3] = 0;
}
else 
{
    $cik50 = 0;
}

$remains = $cash - ($cik50 * 50);

$cik20 = (int)($remains / 20);

if($cik20 && $drawer[2] >= $cik20)
{
    $drawer[2] -=$cik20;
    echo "20 EUR: $cik20 \n";
}
elseif($cik20 > 0 && $drawer[2] > 0)
{
    $cik20 = $drawer[2] ;
    echo "20 EUR: $cik20 \n";
    $drawer[2] = 0;
}
else 
{
    $cik20 = 0;
}

$remains = $remains - ($cik20 * 20);
$cik10 = (int)($remains / 10);

if($cik10 && $drawer[1] >= $cik10)
{
    $drawer[1] -=$cik10;
    echo "10 EUR: $cik10 \n";
}
elseif($cik10 > 0 && $drawer[1] > 0)
{
    $cik10 = $drawer[1] ;
    echo "10 EUR: $cik10 \n";
    $drawer[1] = 0;
}
else 
{
    $cik10 = 0;
}

$remains = $remains - ($cik10 * 10);
$cik5 = (int)($remains / 5);

if($cik5 && $drawer[1] >= $cik5)
{
    $drawer[0] -=$cik5;
    echo "5 EUR: $cik5 \n";
}
elseif($cik5 > 0 && $drawer[0] > 0)
{
    $cik5 = $drawer[0] ;
    echo "5 EUR: $cik5 \n";
    $drawer[0] = 0;
}
else 
{
    $cik5 = 0;
}

$remains = $remains - ($cik5 * 5);
if($remains)
{
    echo "nevaru izdot šos $remains EUR \n";
}
if($drawer[0] <= 0 && $drawer[1] <= 0 && $drawer[2] <= 0 && $drawer[3] <= 0) {
    $nauda = $drawer[0] * 5 + $drawer[1] * 10  + $drawer[2] * 20 + $drawer[3] * 50;
}

file_put_contents('banka.json', json_encode($drawer,JSON_PRETTY_PRINT));
