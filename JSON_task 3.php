<?php
 
// 3 užduotis
 
/*Pakartokite antrają užduotį, tačiau su sąlyga: 
Jei masyvo elemento reikšmė yra skaičius ir jis mažesnis nei 500, 
jo reikšmę pakeiskite masyvu su atsitiktiniu kiekiu elementų nuo 3 iki 500, 
o jų reikšmės atsitiktiniai skaičiais nuo 500 iki 6500 */

//if(isset[$_GET['action']) AND $_GET['action'] == 'show_data') { 

$target='./db.json';
$target2='./db2.json';
$file = fopen($target, 'r');
$read = fread($file,filesize($target));
$json = json_decode($read,true);
$add_array=[];

echo '<pre>';
print_r($json);	

foreach ($json as $array => $inside_array) {
	
	echo '<pre>';
	print_r($inside_array);
	
	foreach ($inside_array as $index => $value) {
		
		
			if ($value < 500) {
				
				for ($i=0; $i<rand(3,500); $i++) {
					
					$add_array[]=rand(500,6500);
					$json[$array][$index] = $add_array;
				}
			}
	}
	
	
}

echo '<pre>Po atmetimo:';
print_r($json);	

$json2 = json_encode($json);
$file2 = file_put_contents($target2,$json2);


//}
?>