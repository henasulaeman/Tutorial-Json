<?php

// Array Assosiatif
$mahasiswa = 
[
    [
        "nama"=>"Hena Sulaeman",
        "nrp"=>"12111077",
        "email"=> "hena@gmail.com"
    ],
    [
        "nama"=>"Sulaeman",
        "nrp"=>"234234234",
        "email"=> "Sulaeman@gmail.com"
    ]
];

// konversi ke json
$data = json_encode($mahasiswa);
echo $data;

?>