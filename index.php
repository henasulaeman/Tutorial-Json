<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donat Ma'Lampir</title>
</head>
<body>
    
<?php 
$MasterData=file_get_contents('data-donat.json');

$donat = json_decode($MasterData,true);

echo var_dump($donat);

echo $donat[0]['menu'][0]['kategori'];
echo "<br>";

echo $donat[0]['donat'][1]['nama'];

// Satu Array, jadi index pertama nilainya 0
// index kedua nilainya "menu"
// index ketiga sesuai dengan data indexnya 0 - n
// index kedua nilainya "donat"
// index ketiga sesuai dengan data indexnya 0 - n

?>
<script>
    
</script>
</body>
</html>