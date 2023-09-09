<?php

// array sederhana
// $mahasiswa = [
// 	"nama"=>"Andre",
// 	"nrp"=>"12111077",
// 	"jurusan"=>"Teknik Informatika"

// ];

// Multiple Array
// $mahasiswa = 

// [
// 	[
// 	"nama"=>"Andre",
// 	"nrp"=>"12111077",
// 	"jurusan"=>"Teknik Informatika"

// 	],

// 	[
// 	"nama"=>"Andre",
// 	"nrp"=>"12111077",
// 	"jurusan"=>"Teknik Informatika"

// 	]

// ];


$dbh = new PDO('mysql:host=localhost;dbname=phpdasar','root','');
$db = $dbh->prepare('SELECT * FROM mahasiswa');
$db->execute();

$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

//var_dump($mahasiswa);

//json_encode Untuk merubah array ke json
$data = json_encode($mahasiswa);
 echo $data;


// $data2 = json_decode($data,true); // Merubah json ke array dengan fungsi json_decode(), true bertujuan agar menampilkan datanya menggunakan kurung kurawal array

// foreach ($data2 as $row) {
// 	echo $row['nama']."<br>";
// }



?>
