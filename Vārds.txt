<?php

echo ucfirst ("kā tevi sauc?\n");
$name = ucfirst (trim (fgets(STDIN)));
$varda_garums = strlen($name);
$uzruna = ucfirst ("Sveiks");
if($name[$varda_garums -1]== " "){
$uzruna = ucfirst ("Sveiks");
}else if ($name[$varda_garums -1]== "a") {
$uzruna = ucfirst ("Sveika");
}
if(empty($name)){
echo ucfirst ("nepareizi");
}else{
echo ucfirst ("$uzruna, $name! Prieks iepazities\n");
}
