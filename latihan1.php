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

$data = json_encode($mahasiswa);

echo $data;




?>