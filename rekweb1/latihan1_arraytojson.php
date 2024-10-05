<?php
// Membuat variabel array
$arrayData = [
    "mahasiswa" => "Iqbal",
    "nim" => "G.231.22.0104",
    "prodi" => "Teknik Informatika",
    "usia" => 23
];

// Encode array to format JSON
$jsonData = json_encode($arrayData);
echo "Data dalam format JSON: " . $jsonData;
?>