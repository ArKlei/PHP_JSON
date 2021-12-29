<?php
 
// 2 užduotis
 
/*Atsidarykite failą kuriame įrašytas masyvas, 
konvertuokite JSON stringą į masyvą ir iš jo 
pašalinkite visus elementus kurių skaitinės reikšmės 
didenesnės nei 6500. 
Masyvą konvertuokite į JSON formatą ir vėl išssaugokite faile.*/

//if(isset[$_GET['action']) AND $_GET['action'] == 'show_data') { 

$target='./db.json';
$target2='./db2.json';
$file = fopen($target, 'r');
$read = fread($file,filesize($target));
$json = json_decode($read,true);
echo '<pre>';
print_r($json);	

foreach ($json as $array => $inside_array) {
	
	echo '<pre>';
	print_r($inside_array);
	
	foreach ($inside_array as $index => $value) {
		
		if ($value > 6500) {
			unset($json[$array][$index]);
		}
		
	}
	
	
}

echo '<pre>Po pakeitimo:';
print_r($json);	

$json2 = json_encode($json);
$file2 = fopen($target2,'w');

echo '<p>Kodo pabaiga'.$json.'gale';	



?>