<?php

$data = file_get_contents('coba.json');

// decode dari json ke array 
// $mahasiswa = json_decode($data);


// decode dari json ke array asosiatif
$mahasiswa = json_decode($data,true);

var_dump($mahasiswa);

echo $mahasiswa[0]['nama']."<br>";
echo $mahasiswa[0]['umur']."<br>";

echo "<b>";

echo $mahasiswa[1]['hobby'][0];
?>