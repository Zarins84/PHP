<?php
$num = 0;
$sum = 0;
 
 
for($i = 0; $i <=8; $i++) {
 $r = rand(10, 100);
 $num++;
$sum= $sum + $r;
 $sk[$i] = $r;
 echo "$num: $r \n";
}
 $max = max($sk);
 echo "biggest number is= $max \n";
 $min = min($sk);
 echo "lowest number is= $min \n";
 $average = array_sum($sk)/count($sk);
 echo "average of numbers is= $average \n";
echo "all number amount is= $sum";

