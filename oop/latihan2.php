<!-- Buatlah kelas induk yang dapat menghitung total, rata-rata, nilai tertinggi, dan terendah
Si kelas anak akan membuat array sebanyak 50 index denga nilai random -->

<?php

interface StatistikDasar
{
    public function median($arr);
    public function modus($arr);
}

interface Statistik
{
    public function standartDeviasi($arr);
}

abstract class Analitik
{
    // abstract public function banyaknyaGanjil($arr);
    // abstract public function banyaknyaGenap($arr);
    public function itungItung($arr)
    {
    }
}



class IndukPerhitungan extends Analitik implements
    StatistikDasar,
    Statistik
{
    public function median($arr)
    {
        if (count($arr) % 2 == 0) {
            sort($arr);
            print_r($arr);
            $indexTengah = ceil(count($arr) / 2) - 1;
            $median = ($arr[$indexTengah] + $arr[$indexTengah + 1]) / 2;
            return $median;
        } else {
            sort($arr);
            print_r($arr);
            $indexTengah = ceil(count($arr) / 2) - 1;
            $median = $arr[$indexTengah];
            return $median;
        }
    }
    public function modus($arr)
    {
    }
    public function standartDeviasi($arr)
    {
    }
    public function totalNilai($arr)
    {
        $total = 0;
        foreach ($arr as $val) {
            $total += $val;
        }
        return $total;
    }

    public function rataRata($arr)
    {
        $total = 0;
        foreach ($arr as $val) {
            $total += $val;
        }
        return $total / count($arr);
    }

    public function min($arr)
    {
        $min = $arr[0];
        foreach ($arr as $val) {
            if ($min > $val) {
                $min = $val;
            }
        }
        return $min;
    }

    public function max($arr)
    {
        $max = $arr[0];
        foreach ($arr as $val) {
            if ($max < $val) {
                $max = $val;
            }
        }
        return $max;
    }
}

class Anakanak extends IndukPerhitungan
{
    protected $maksArray;

    public function __construct($maksArray)
    {
        $this->maksArray = $maksArray;
    }

    public function intialArray()
    {
        $arr = array();
        for ($i = 0; $i < $this->maksArray; $i++) {
            array_push($arr,  rand(1, 100));
        }

        echo "<br>  Max" . max($arr);
        echo "<br>  Min " . min($arr);
        echo "<br>  Total " . $this->totalNilai($arr);
        echo "<br>  rata rata" . $this->rataRata($arr);
        echo "<br>  median" . $this->median($arr);

        echo "<br> ------------------------------<br>";
        print_r($arr);
    }
}

$nilai = new Anakanak(6);
$nilai->intialArray();
