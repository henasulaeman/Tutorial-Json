<?php

$data = file_get_contents('data.json'); //untuk mengambil data
 
// json_decode Untuk Merubah json ke array 
$mahasiswa = json_decode($data,true);

// json_encode Untuk merubah array ke json
$mahasiswa2 = json_encode($data);
var_dump($mahasiswa);

echo $mahasiswa[0]['Pembimbing']['pembimbing1'];


?>