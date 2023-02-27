<?php
$arrayBuah = ["Jeruk", "Mangis", "Apel", "Duku"];

//mengurutkan array
sort($arrayBuah);

//menghapus value array yang paling akhir
array_pop($arrayBuah);

//menghapus variabel yang di urut
unset($arrayBuah[2]);

//menambahkan value array paling akhir
array_push($arrayBuah,"Buah Strawberry");

//menghapus data value/data array paling awal
array_shift($arrayBuah);

//menambahkan value array di paling awal
array_unshift($arrayBuah, "Semangka");

//mengubah data/value array dengan spesifik key/index
$arrayBuah[1] = "Anggur";

foreach($arrayBuah as $buah) {
    echo "<br>" . $buah ;
}