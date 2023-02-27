<?php
$profilArray = [
    "nama" => "Abiyyu",
    "semester" => 4
];

echo $profilArray['nama'] . "<br>";
echo $profilArray['semester'] . "<br>";


$profilMultiArray = [
    [
        "nama" => "Abiyyu",
        "semester" => 4
    ], [
        "nama" => "Fulan",
        "semester" => 7
    ]
];

foreach($profilMultiArray as $profile) {
        echo $profile['nama'] . "<br>";
        echo $profile['semester'] . "<br>";
}
