<?php
//echo "ciparu izvadīšana \"1\" ";
$arr = [];
$num = 0;
for($i = 0; $i <= 9; $i++) {
    $num++;
    $arr[$i] = rand(10, 99);
    //echo "\n$num. " .$arr[$i];
    //if($i == 5){
        //echo "$num. elements ir \"$arr[$i]\"\n";
   // }
}
    
print_r($arr);
$text = "slepenais elements ir $arr[5]\n";
for($i = 0; $i <= strlen($text); $i++){
echo $text[$i];
usleep(50000);
}
$summ = []; 
echo "ievadiet masīvu skaitu\n";
$sk = fgets(STDIN);
echo "ievadiet elementu skaitu\n";
$sk2 = fgets(STDIN);
for($c = 0; $c <= $sk; $c++){
    for($k = 0; $k <= $sk2; $k++){
        $rand++;
        $summ[$c][$k] = $rand;
    }
}
print_r($summ);
