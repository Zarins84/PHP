<?php

//vārdu apgriešana
echo strrev("?alus ari ira sula!");
echo "\n";

$text = "svarīgi svarīgi ir iemācīties dzīvot mainīgā pasaulē";

//vārdu saskaitīšana
$arr = explode(" ", $text);
echo "teikuma ir " .count($arr) ." latviešu izcelsmes vārdi \n";

//wtf
$text = strtolower($text);
$text = str_replace(',', '', $text);
$text = str_replace(',', '', $text);

$word = str_word_count($text, 1);
$word_f = array_count_values($word);
arsort($word_f);
print_r($word_f);

