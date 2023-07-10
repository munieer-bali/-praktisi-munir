<?php
class Perhitungan
{
    protected $sisiPanjang;
    protected $sisiLebar;

    public function __construct($sisiPanjang, $sisiLebar)
    {
        $this->sisiPanjang = $sisiPanjang;
        $this->sisiPanjang = $sisiLebar;
    }
    public function rumusLuas()
    {
        return $this->sisiPanjang  * $this->sisiLebar;
    }
}

class Segitiga extends Perhitungan
{
    protected $sisiAlas;
    protected $sisiTinggi;

    public function __construct($sisiAlas, $sisiTinggi)
    {
        $this->sisiAlas = $sisiAlas;
        $this->sisiTinggi = $sisiTinggi;
    }
    public function rumusLuas()
    {
        return  0.5 * $this->sisiAlas  * $this->sisiTinggi;
    }
}

$samaSisi = new Segitiga(5, 10);
echo '<br>' . $samaSisi->rumusLuas();
