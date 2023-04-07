<?php
class Mamalia
{
    //properti class mamalia
    public $namahewan;
    public $warna;
    public $habitat;
    public $makanan;

    function bisaMenyusui()
    {
        return "$this->namahewan ini bisa menyusui !"; 
    }
    function berjalan()
    {
        return "$this->namaHewan ini bisa berjalan !";
    }
}
$objek = new Mamalia;
$objek->namahewan = "Monyet";
$objek->warna = "Coklat";
$objek->habitat = "Hutan";
$objek->makanan = "Pisang/buah-buahan";
echo $objek->bisaMenyusui();