<?php
class baloK
{
    public $panjang, $lebar, $tinggi;

    public function __construct($p, $l, $t )
    
    {
        $this->panjang = $p;
        $this->lebar = $l;
        $this->tinggi = $t;
    }

    public function getLuas()
    {
        return 2 * (($this->panjang * $this->lebar) + ($this->panjang * $this->tinggi) + ($this->lebar * $this->tinggi));
    }

    public function getVolume()
    {
        return $this->panjang * $this->lebar * $this->tinggi;
    }
}
$baloK = new baloK (9,18,27);
echo "luas balok : " . $baloK->getLuas() . "<br>";
echo "volume balok : " . $baloK->getVolume() . "<br>";


