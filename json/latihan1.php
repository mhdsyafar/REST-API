<?php

// $mahasiswa = [
//     [
//         "nama" => "Muhammad syafar",
//         "nim" => "2217020125",
//         "email" => "syafarm28@gmail.com"
//     ],
//     [
//         "nama" => "M.irfandi atarza",
//         "nim" => "2217020155",
//         "email" => "irfandi28@gmail.com"
//     ],
//     [
//         "nama" => "awal saputra",
//         "nim" => "2217020100",
//         "email" => "awal28@gmail.com"
//     ]
// ];

$dbh = new PDO('mysql:host=localhost; dbname=wpu_rest', 'root', 
''); 
$db = $dbh->prepare('SELECT * FROM mahasiswa'); 
$db->execute(); 
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;
?>
