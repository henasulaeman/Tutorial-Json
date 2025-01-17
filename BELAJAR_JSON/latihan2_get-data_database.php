<?php

// Jika ingin mengambil data di database dan mengubahnya dari array ke JSOn bisa seperti ini:

// koneksian dulu ke Database, contoh pake PDO:
$dbh = new PDO('mysql:host=localhost;dbname=phpdasar','root','');
$db = $dbh->prepare('SELECT * FROM mahasiswa');
$db->execute();
// Merubah array menjadi array ASsociatif
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;

?>