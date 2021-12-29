<?php
 
// 1 užduotis
 
/*Sukurkite 100 eilučių masyvą, kurio elementai yra atsitiktinio ilgio masyvai nuo 5 iki 20, 
o jų elementų reišmės atsitiktiniai skaičiai nuo 99 iki 11500. 
Masyvą konvertuokite į JSON formatą ir išssaugokite pasirinktame faile.*/
 
$array = array("arunas.kleinas@gmail.com","Pasaulis"); 
 
echo '<pre>';
print_r($array);
 
$json = json_encode($array);
 
$file = fopen('./users.json','w');
	if (fwrite($file,$json)) {
		echo 'Your loging data uploaded to the database file';
	}


?>