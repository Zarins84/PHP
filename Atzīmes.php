<?php
$num = 0;
$big = 0;
$sum = 0;
 
echo "ierakstiet savas atzīmes \n";
 for($i = 0; $i = 10; $i++) {
  $num++;
  echo "$num.";
 $cip = (trim(fgets(STDIN)));
 $sum = $sum + $cip;
 if ($cip > $big) {
   $big = $cip;
 }
  if ($num==5)
   {
       break;
   }
  }
  $vid = $sum / $num;
echo "lielaka atzime ir= $big \n";
echo "videja atzime ir= $vid";
