<?php

$data_donat=file_get_contents("data-donat.json");

$data = json_decode($data_donat,true);

//echo $data_donat;
// var_dump($data['donat'][0]);
for ($i=0; $i<=count($data); $i++) { 
	echo $data['donat'][$i];
}

?>