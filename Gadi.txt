<?php
date_default_timezone_set('Europe/Riga');

$f = -1;
$date1=date_create("2001-08-30 05:30");
$date2=date_create("now");
$diff=date_diff($date1, $date2);

$i = time() + 5;
echo "esmu " .$diff->y ." Gadus, " .$diff->m ." Mēnešus, " .$diff->d ." Dienas, " .$diff->h ." Stundas, " .$diff->i ." Minūtes un " .$diff->s ." Sekundes vecs  \n";
while($i > time()) {
    $date2=date_create("now");
$diff=date_diff($date1, $date2);
    $f++;
    echo $f ."\n";
   sleep(1);
      }
      echo "kļuvu vecāks par: " .$diff->y ." Gadiem, " .$diff->m ." Mēnešiem, " .$diff->d ." Dienām, " .$diff->h ." Stundām, " .$diff->i ." Minūtēm, " .$diff->s ." Sekundēm,  \n";

   
