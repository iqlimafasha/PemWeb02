<?php
class bola
{
    public $jari;

    public function __construct($jari)
    
    {
        $this->jari = $jari;
    }

    public function getvolume()
    {
        return 4/3 * pi() * pow($this->jari, 3);
    }

    public function getLuasSisi()
    {
        return 4 * pi() * pow($this->jari, 2);
    }
}
$bola = new bola (4);
echo "luas bola : " . $bola->getVolume() . "<br>";
echo "volume bola : " . $bola->getLuasSisi() . "<br>";