<?php
//  tolong implementasikan interface pada kelas induk(bukan nama kelas)
//  pada kelas anak buatlah 3 array
//  array untuk jajar genjang memiliki 2 dimensi untuk alas dan tinggi
//  array untuk belah ketupat memiliki 2 dimensi untuk diagonal 1 dan 2
//  array untuk belah ketupat memiliki 1 dimensi untuk jari jari
// nilai pada array random dari 1 sampai 20
// seriap rumus akan melakukan perhitungan sebanyak lima kali

interface PerhitunganLuas
{
    public function jajarGenjang($alas, $tinggi);
    public function belahKetupat($diagonal1, $diagonal2);
    public function lingkaran($jariJari);
}

class BangunDatar implements PerhitunganLuas
{

    public function __construct()
    {
    }
    public function jajarGenjang($alas, $tinggi)
    {

        return $alas * $tinggi;
    }

    public function belahKetupat($diagonal1, $diagonal2)
    {
        return $diagonal1 * $diagonal2;
    }

    public function lingkaran($jariJari)
    {
        return 22 / 7 * $jariJari * $jariJari;
    }
}

class HitungBangunDatar extends BangunDatar
{
    public function hitungJajarGenjang()
    {
        $arrayNilaiJajarGenjang = [];
        for ($i = 0; $i < 5; $i++) {
            $arrayNilaiJajarGenjang[$i][0] = rand(1, 20);
            $arrayNilaiJajarGenjang[$i][1] = rand(1, 20);
        }
        for ($i = 0; $i < 5; $i++) {
            echo "belah ketupat ke" . ($i + 1) . " = " . $this->jajarGenjang($arrayNilaiJajarGenjang[$i][0], $arrayNilaiJajarGenjang[$i][1]) . "<br>";
        }
    }

    public function hitungBelahKetupat()
    {
        $arrayBelahKetupat = [];
        for ($i = 0; $i < 5; $i++) {
            $arrayBelahKetupat[$i][0] = rand(1, 20);
            $arrayBelahKetupat[$i][1] = rand(1, 20);
        }
        for ($i = 0; $i < 5; $i++) {
            echo " belah ketupat ke" . ($i + 1) . " = " . $this->belahKetupat($$arrayBelahKetupat[$i][0], $arrayBelahKetupat[$i][1]) . "<br>";
        }
    }

    public function hitungLingkaran()
    {
        $arrayLingkaran = [];
        for ($i = 0; $i < 5; $i++) {
            $arrayLingkaran[$i][0] = rand(1, 20);
        }
        for ($i = 0; $i < 5; $i++) {
            echo "lingkaran ke" . ($i + 1) . " = " . $this->lingkaran($arrayLingkaran[$i], $arrayLingkaran[$i]) . "<br>";
        }
    }
}
